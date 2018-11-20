<?php

namespace Scaleplan\Result;

use Scaleplan\Helpers\NameConverter;

/**
 * Класс результат типа Массив
 *
 * Class ArrayResult
 *
 * @package Scaleplan\Result
 */
class ArrayResult extends AbstractResult implements ArrayResultInterface
{
    /**
     * Конструктор
     *
     * @param array|null $result - результат
     */
    public function __construct(?array $result)
    {
        $this->setResult($result);
    }

    /**
     * Установить результат
     *
     * @param null|array $result - результат
     */
    public function setResult(?array $result) : void
    {
        if ($result === null) {
            $this->result = $result;
            return;
        }

        $this->result = $result;
    }

    /**
     * Вернуть результат в виде массива
     *
     * @return array
     */
    public function getArrayResult() : ?array
    {
        return $this->result;
    }

    /**
     * Вернуть результат в виде JSON
     *
     * @return null|string
     */
    public function getJsonResult() : ?string
    {
        if ($this->result === null) {
            return null;
        }

        return json_encode($this->getResult(), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Вернуть результат в виде строки
     *
     * @return string
     */
    public function getStringResult() : ?string
    {
        return $this->getJsonResult();
    }

    /**
     * @return object
     */
    protected static function getObjectTemplate() : object
    {
        static $object;
        if ($object === null) {
            $object = new class
            {
                public function __get($name)
                {
                    return null;
                }
            };
        }

        return $object;
    }

    /**
     * @param array $array
     *
     * @return object
     */
    protected static function arrayToObject(?array $array) : object
    {
        if ($array === null) {
            return null;
        }

        $object = static::getObjectTemplate();
        foreach ($array as $property => $value) {
            $newPropertyName = NameConverter::snakeCaseToLowerCamelCase($property);
            $object->$newPropertyName = $value;
        }

        return $object;
    }

    /**
     * @return null|object
     */
    public function getObjectResult() : ?object
    {
        if ($this->getArrayResult() === null) {
            return null;
        }

        return array_map(function(array $row) {
            return static::arrayToObject($row);
        }, $this->getArrayResult());
    }
}