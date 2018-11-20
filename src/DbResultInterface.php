<?php

namespace Scaleplan\Result;

use Scaleplan\Result\Exceptions\ResultException;

/**
 * Класс результата запроса к БД
 *
 * Interface DbResultInterface
 *
 * @package Scaleplan\Result
 */
interface DbResultInterface extends ArrayResultInterface
{
    /**
     * Установить результат
     *
     * @param $result - результат
     * @param string $prefix - префикс полей результата
     *
     * @throws ResultException
     */
    public function setResult(?array $result, string $prefix = '') : void;

    /**
     * Вернуть первую запись результата
     *
     * @return array
     */
    public function getFirstResult() : ?array;

    /**
     * Вернуть поле id первой записи результата
     *
     * @return mixed|null
     */
    public function getResultId();

    /**
     * Вернуть первое поле первой записи результата
     *
     * @return null
     */
    public function getResultFirstField();

    /**
     * Возвратить результат в виде объекта
     *
     * @return null|\object
     */
    public function getFirstObjectResult() : ?object;
}