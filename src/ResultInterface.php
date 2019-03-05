<?php

namespace Scaleplan\Result;

/**
 * Интерфейс общий для всех типов результатов
 *
 * Interface ResultInterface
 *
 * @package Scaleplan\Result
 */
interface ResultInterface
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