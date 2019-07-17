<?php

namespace Scaleplan\Result\Interfaces;

use Scaleplan\Model\Model;
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
     * @return mixed
     */
    public function getResultFirstField();

    /**
     * @return null|Model[]
     */
    public function getObjectResult() : ?array;

    /**
     * Возвратить результат в виде объекта
     *
     * @return null|Model
     */
    public function getFirstObjectResult() : ?Model;

    /**
     * @param string|null $modelClass
     */
    public function setModelClass(?string $modelClass) : void;

    /**
     * @param string $column
     *
     * @return array|null
     */
    public function getColumn(string $column) : ?array;
}
