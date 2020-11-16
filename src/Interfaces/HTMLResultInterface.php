<?php
declare(strict_types=1);

namespace Scaleplan\Result\Interfaces;

/**
 * Интерфейс результатов в виде HTML-страниц
 *
 * Interface HTMLResultInterface
 *
 * @package Scaleplan\Result
 */
interface HTMLResultInterface extends ResultInterface
{
    /**
     * Конструктор
     *
     * @param mixed $result
     */
    public function __construct($result);

    /**
     * Установить значение результата
     *
     * @param $result - значение результата
     */
    public function setResult($result) : void;

    /**
     * Get string result
     *
     * @return null|string
     */
    public function getStringResult() : ?string;

    /**
     * Возвратить результат в виде массива
     *
     * @return null|array
     */
    public function getArrayResult() : ?array;

    /**
     * Возвратить результат в виде объекта
     *
     * @return null|object
     */
    public function getObjectResult() : ?object;
}
