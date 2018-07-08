<?php

namespace avtomon;

/**
 * Класс ошибок
 *
 * Class ArrayResultItemException
 * @package avtomon
 */
class ArrayResultItemException extends CustomException
{
}

/**
 * Класс результат типа Массив
 *
 * Class ArrayResultItem
 * @package avtomon
 */
class ArrayResultItem extends AbstractResult
{
    /**
     * Конструктор
     *
     * @param array|null $result - результат
     */
    public function __construct(?array $result)
    {
        $this->setResult($result);
    }

    /**
     * Геттер для результата
     *
     * @return array
     */
    public function getResult(): ?array
    {
        return $this->getArrayResult();
    }

    /**
     * Установить результат
     *
     * @param null|array $result - результат
     */
    public function setResult(?array $result): void
    {
        if ($result === null) {
            $this->result = $result;
            return;
        }

        $this->result = $result;
    }

    /**
     * Вернуть результат в виде массива
     *
     * @return array
     */
    public function getArrayResult(): ?array
    {
        return $this->result;
    }

    /**
     * Вернуть результат в виде JSON
     *
     * @return null|string
     */
    public function getJsonResult(): ?string
    {
        if ($this->result === null) {
            return null;
        }

        return json_encode($this->getResult(), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Вернуть результат в виде строки
     *
     * @return string
     */
    public function getStringResult(): ?string
    {
        return $this->getJsonResult();
    }

    /**
     * Возвратить результат в виде объекта
     *
     * @return null|\object
     */
    public function getObjectResult(): ?object
    {
        return (object) $this->result;
    }
}