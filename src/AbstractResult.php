<?php

namespace avtomon;

/**
 * Базовый класс результата
 *
 * Class AbstractResult
 * @package avtomon
 */
abstract class AbstractResult implements IResultInterface
{
    /**
     * @var mixed
     */
    protected $result;

    /**
     * Получение результата
     *
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Получение результата в виде строки
     *
     * @return null|string
     */
    abstract public function getStringResult(): ?string;

    /**
     * Возвратить результат в виде массива
     *
     * @return array|null
     */
    abstract public function getArrayResult(): ?array;

    /**
     * Возвратить результат в виде объекта
     *
     * @return null|\object
     */
    abstract public function getObjectResult(): ?object;

    /**
     * Вернуть объект результата в виде строки
     *
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->getStringResult();
    }

    /**
     * Булева интерпретация результата
     *
     * @return bool
     */
    public function getBoolResult(): bool
    {
        return (bool) $this->result;
    }
}