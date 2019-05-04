<?php

namespace Scaleplan\Result;

use Scaleplan\Helpers\NameConverter;
use Scaleplan\Model\Model;
use Scaleplan\Result\Exceptions\ResultException;
use Scaleplan\Result\Interfaces\DbResultInterface;

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
     * DbResult constructor.
     *
     * @param array|null $result
     * @param string $prefix
     *
     * @throws ResultException
     */
    public function __construct(?array $result, string $prefix = '')
    {
        parent::__construct($result);
        $this->setResult($result, $prefix);
    }

    /**
     * Установить результат
     *
     * @param $result - результат
     * @param string $prefix - префикс полей результата
     *
     * @throws ResultException
     */
    public function setResult(?array $result, string $prefix = '') : void
    {
        if ($result === null) {
            $this->result = $result;
            return;
        }

        if (!empty($result[0]) && !\is_array($result[0])) {
            throw new ResultException('Входной массив не является результатом запроса к РСУБД');
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
     * @param array $array
     *
     * @return Model
     */
    protected static function arrayToObject(?array $array) : ?Model
    {
        if ($array === null) {
            return null;
        }

        $propertyArray = [];
        foreach ($array as $property => $value) {
            $newPropertyName = NameConverter::snakeCaseToLowerCamelCase($property);
            $propertyArray[$newPropertyName] = $value;
        }

        return new Model($propertyArray);
    }

    /**
     * @return null|Model[]
     */
    public function getObjectResult() : ?array
    {
        if ($this->getArrayResult() === null) {
            return null;
        }

        return array_map(static function(array $row) {
            return static::arrayToObject($row);
        }, $this->getArrayResult());
    }

    /**
     * Возвратить результат в виде объекта
     *
     * @return null|Model
     */
    public function getFirstObjectResult() : ?Model
    {
        return static::arrayToObject($this->getFirstResult());
    }
}
