<?php
declare(strict_types=1);

namespace Scaleplan\Result;

use Scaleplan\Model\Model;
use Scaleplan\Result\Exceptions\ClassIsNotModelException;
use Scaleplan\Result\Exceptions\FirstResultNotArrayException;
use Scaleplan\Result\Exceptions\PropertyNotFoundException;
use Scaleplan\Result\Exceptions\ResultException;
use Scaleplan\Result\Interfaces\DbResultInterface;
use function Scaleplan\Translator\translate;

/**
 * Класс результата запроса к БД
 *
 * Class DbResult
 *
 * @package Scaleplan\Result
 */
class DbResult extends ArrayResult implements DbResultInterface
{
    /**
     * @var string|null
     */
    protected $modelClass;

    /**
     * DbResult constructor.
     *
     * @param array|null $result
     * @param string|null $prefix
     *
     * @throws ResultException
     * @throws \ReflectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     */
    public function __construct(?array $result, string $prefix = null)
    {
        $this->setResult($result, $prefix);
    }

    /**
     * @param string|null $modelClass
     */
    public function setModelClass(?string $modelClass) : void
    {
        $this->modelClass = $modelClass;
    }

    /**
     * Установить результат
     *
     * @param $result - результат
     * @param string|null $prefix - префикс полей результата
     *
     * @throws ResultException
     * @throws \ReflectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     */
    public function setResult(?array $result, string $prefix = null) : void
    {
        if ($result === null) {
            $this->result = $result;
            return;
        }

        if (!empty($result[0]) && !\is_array($result[0])) {
            throw new ResultException(translate('result.not-db-result'));
        }

        if ($prefix) {
            foreach ($result as $record) {
                foreach ($record as $key => $value) {
                    $record["{$prefix}_$key"] = $value;
                    unset($record[$key]);
                }
            }
        }

        $this->result = $result;
    }

    /**
     * Вернуть первую запись результата
     *
     * @return array
     */
    public function getFirstResult() : ?array
    {
        return !empty($this->result[0]) && \is_array($this->result[0]) ? $this->result[0] : null;
    }

    /**
     * Вернуть поле id первой записи результата
     *
     * @return mixed|null
     */
    public function getResultId()
    {
        return $this->result[0]['id'] ?? null;
    }

    /**
     * Вернуть первое поле первой записи результата
     *
     * @return mixed
     */
    public function getResultFirstField()
    {
        if ($firstResult = $this->getFirstResult()) {
            return reset($firstResult);
        }

        return null;
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    public function hasFirstResultField(string $name) : bool
    {
        return $this->getFirstResult() && array_key_exists($name, $this->getFirstResult());
    }

    /**
     * @param string $name
     *
     * @return mixed
     *
     * @throws PropertyNotFoundException
     * @throws \ReflectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     */
    public function getFirstResultField(string $name)
    {
        if ($this->hasFirstResultField($name)) {
            return $this->getFirstResult()[$name];
        }

        throw new PropertyNotFoundException($name);
    }

    /**
     * @param string $name
     * @param $value
     *
     * @throws FirstResultNotArrayException
     */
    public function setFirstResultField(string $name, $value) : void
    {
        if (!empty($this->result[0]) && is_array($this->result[0])) {
            $this->result[0][$name] = $value;
            return;
        }

        throw new FirstResultNotArrayException($name);
    }

    /**
     * @param array|null $array
     *
     * @return Model|null
     *
     * @throws ClassIsNotModelException
     */
    protected function arrayToObject(?array $array) : ?Model
    {
        if ($array === null) {
            return null;
        }

//        $propertyArray = [];
//        foreach ($array as $property => $value) {
//            $newPropertyName = NameConverter::snakeCaseToLowerCamelCase($property);
//            $propertyArray[$newPropertyName] = $value;
//        }

        if (!empty($this->modelClass)) {
            if (!is_subclass_of($this->modelClass, Model::class)) {
                throw new ClassIsNotModelException();
            }

            return new $this->modelClass($array);
        }

        return new Model($array);
    }

    /**
     * @return null|Model[]
     */
    public function getObjectResult() : ?array
    {
        if ($this->getArrayResult() === null) {
            return null;
        }

        return array_map(function (array $row) {
            return $this->arrayToObject($row);
        }, $this->getArrayResult());
    }

    /**
     * Возвратить результат в виде объекта
     *
     * @return Model|null
     *
     * @throws ClassIsNotModelException
     */
    public function getFirstObjectResult() : ?Model
    {
        return $this->arrayToObject($this->getFirstResult());
    }

    /**
     * @param string $column
     *
     * @return array|null
     */
    public function getColumn(string $column) : ?array
    {
        if (null === $this->getResult()) {
            return null;
        }

        return array_column($this->getResult(), $column);
    }

    /**
     * @param array $columns
     * @param string $locale
     *
     * @throws \Exception
     */
    public function setDateFormatting(array $columns, string $locale) : void
    {
        $formatter = new \IntlDateFormatter($locale, \IntlDateFormatter::SHORT, \IntlDateFormatter::NONE);
        foreach ($this->result as &$record) {
            foreach ($columns as &$column) {
                if (!empty($record[$column])) {
                    $record[$column] = $formatter->format(new \DateTimeImmutable($record[$column]));
                }
            }
        }
        unset($record, $column);
    }

    /**
     * @param array $columns
     * @param string $locale
     *
     * @throws \Exception
     */
    public function setDateTimeFormatting(array $columns, string $locale) : void
    {
        $formatter = new \IntlDateFormatter($locale, \IntlDateFormatter::SHORT, \IntlDateFormatter::SHORT);
        foreach ($this->result as &$record) {
            foreach ($columns as &$column) {
                if (!empty($record[$column])) {
                    $record[$column] = $formatter->format(new \DateTimeImmutable($record[$column]));
                }
            }
        }
        unset($record, $column);
    }
}
