<?php

namespace avtomon;

/**
 * Интерфейс результатов запросов к БД
 *
 * Interface DbResultInterface
 * @package avtomon
 */
interface DbResultInterface
{
    public function getResult();

    /**
     * Get result as array
     *
     * @return mixed
     */
    public function getArrayResult(): ?array;

    /**
     * Get result as JSON
     *
     * @return mixed
     */
    public function getJsonResult(): ?string;

    /**
     * If result is array, returns first element of result array
     *
     * @return mixed
     */
    public function getFirstResult();

    /**
     * If result is assiciative array, returns id field from first record of result
     *
     * @return mixed
     */
    public function getResultId();

    /**
     * If result is assiciative array, returns first field from first record of result
     *
     * @return mixed
     */
    public function getResultFirstField();

    /**
     * get result as string
     *
     * @return mixed
     */
    public function getStringResult();
}