<?php

namespace avtomon;

/**
 * Интерфейс общий для всех типов результатов
 *
 * Interface IResultInterface
 * @package avtomon
 */
interface IResultInterface
{
    /**
     * Получение результата
     *
     * @return mixed
     */
    public function getResult();

    /**
     * Получение результата в виде строки
     *
     * @return null|string
     */
    public function getStringResult(): ?string;

    /**
     * Возвратить результат в виде массива
     *
     * @return array|null
     */
    public function getArrayResult(): ?array;

    /**
     * Возвратить результат в виде объекта
     *
     * @return null|\object
     */
    public function getObjectResult(): ?object;

    /**
     * Вернуть объект результата в виде строки
     *
     * @return string
     */
    public function __toString(): ?string;

    /**
     * Булева интерпретация результата
     *
     * @return bool
     */
    public function getBoolResult(): bool;
}