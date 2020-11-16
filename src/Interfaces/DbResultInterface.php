<?php
declare(strict_types=1);

namespace Scaleplan\Result\Interfaces;

use Scaleplan\Model\Model;

/**
 * Interface DbResultInterface
 *
 * @package Scaleplan\Result\Interfaces
 */
interface DbResultInterface extends ArrayResultInterface
{
    /**
     * @param string|null $modelClass
     */
    public function setModelClass(?string $modelClass) : void;

    /**
     * Установить результат
     *
     * @param $result - результат
     * @param string|null $prefix - префикс полей результата
     */
    public function setResult(?array $result, string $prefix = null) : void;

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
     * @param string $name
     *
     * @return mixed
     */
    public function getFirstResultField(string $name);

    /**
     * @param string $name
     * @param $value
     */
    public function setFirstResultField(string $name, $value) : void ;

    /**
     * @return null|Model[]
     */
    public function getObjectResult() : ?array;

    /**
     * Возвратить результат в виде объекта
     *
     * @return Model|null
     */
    public function getFirstObjectResult() : ?Model;

    /**
     * @param string $column
     *
     * @return array|null
     */
    public function getColumn(string $column) : ?array;

    /**
     * @param array $columns
     * @param string $locale
     */
    public function setDateFormatting(array $columns, string $locale) : void;

    /**
     * @param array $columns
     * @param string $locale
     */
    public function setDateTimeFormatting(array $columns, string $locale) : void;
}
