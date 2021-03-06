<?php
declare(strict_types=1);

namespace Scaleplan\Result\Interfaces;

/**
 * Интерфейс результата типа Массив
 *
 * Interface ArrayResultInterface
 *
 * @package Scaleplan\Result
 */
interface ArrayResultInterface extends ResultInterface
{
    /**
     * Установить результат
     *
     * @param null|array $result - результат
     */
    public function setResult(?array $result) : void;

    /**
     * Вернуть результат в виде массива
     *
     * @return array
     */
    public function getArrayResult() : ?array;

    /**
     * Вернуть результат в виде JSON
     *
     * @return null|string
     */
    public function getJsonResult() : ?string;

    /**
     * Вернуть результат в виде строки
     *
     * @return string
     */
    public function getStringResult() : ?string;

    /**
     * @param array $record
     */
    public function addRecord(array $record) : void;

    /**
     * @param array $record
     */
    public function addFirstRecord(array $record) : void;

    /**
     * @return int
     */
    public function count() : int;
}
