<?php

namespace avtomon;


abstract class AbstractResult
{
    /**
     * @var mixed
     */
    protected $result;

    /**
     * Конструктор
     *
     * @param mixed $result
     */
    public function __construct($result)
    {
        $this->setResult($result);
    }

    public abstract function getResult();

    //public abstract function setResult($result);

    public abstract function getStringResult(): ?string;

    /**
     * Вернуть результат в виде строки
     *
     * @return string
     */
    public function __toString(): ?string
    {
        return $this->getStringResult();
    }
}