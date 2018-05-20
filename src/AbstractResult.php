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

    /**
     * Получение результата
     *
     * @return mixed
     */
    public abstract function getResult();

    //public abstract function setResult($result);

    /**
     * Получение результата в виде строки
     *
     * @return null|string
     */
    public abstract function getStringResult(): ?string;

    /**
     * Вернуть объект результата в виде строки
     *
     * @return string
     */
    public function __toString(): ?string
    {
        return $this->getStringResult();
    }
}