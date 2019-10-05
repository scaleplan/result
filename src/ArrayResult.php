<?php

namespace Scaleplan\Result;

use Scaleplan\Result\Interfaces\ArrayResultInterface;

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
     * @param array $record
     */
    public function addRecord(array $record) : void
    {
        $this->result = $this->result ?? [];
        $this->result[] = $record;
    }

    /**
     * @return int
     */
    public function count() : int
    {
        return count($this->getArrayResult());
    }
}
