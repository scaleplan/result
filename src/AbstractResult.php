<?php
declare(strict_types=1);

namespace Scaleplan\Result;

use Scaleplan\Result\Interfaces\ResultInterface;

/**
 * Базовый класс результата
 *
 * Class AbstractResult
 *
 * @package Scaleplan\Result
 */
abstract class AbstractResult implements ResultInterface, \Serializable
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
    abstract public function getStringResult() : ?string;

    /**
     * Вернуть объект результата в виде строки
     *
     * @return string
     */
    public function __toString() : ?string
    {
        return (string)$this->getStringResult();
    }

    /**
     * Булева интерпретация результата
     *
     * @return bool
     */
    public function getBoolResult() : bool
    {
        return (bool)$this->result;
    }

    /**
     * @return string|null
     */
    public function serialize() : ?string
    {
        return $this->getStringResult();
    }
}
