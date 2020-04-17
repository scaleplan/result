<?php
declare(strict_types=1);

namespace Scaleplan\Result;

use Scaleplan\Result\Interfaces\HTMLResultInterface;

/**
 * Класс результатов в виде HTML-страниц
 *
 * Class HTMLResult
 *
 * @package Scaleplan\Result
 */
class HTMLResult extends AbstractResult implements HTMLResultInterface
{
    /**
     * Конструктор
     *
     * @param mixed $result
     */
    public function __construct($result)
    {
        $this->setResult($result);
    }

    /**
     * Установить значение результата
     *
     * @param $result - значение результата
     */
    public function setResult($result): void
    {
        $this->result = $result;
    }

    /**
     * Get string result
     *
     * @return null|string
     */
    public function getStringResult(): ?string
    {
        return $this->result !== null ? (string) $this->result : null;
    }

    /**
     * Возвратить результат в виде массива
     *
     * @return null|array
     */
    public function getArrayResult(): ?array
    {
        return null;
    }

    /**
     * Возвратить результат в виде объекта
     *
     * @return null|object
     */
    public function getObjectResult(): ?object
    {
        return null;
    }

    /**
     * @param string $serialized
     */
    public function unserialize($serialized) : void
    {
        $this->setResult($serialized);
    }
}
