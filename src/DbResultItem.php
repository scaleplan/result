<?php

namespace avtomon;

/**
 * Класс ошибок
 *
 * Class DbResultItemException
 * @package avtomon
 */
class DbResultItemException extends CustomException
{
}

/**
 * Класс результата запроса к БД
 *
 * Class DbResultItem
 * @package avtomon
 */
class DbResultItem extends ArrayResultItem
{
    /**
     * Конструктор
     *
     * @param array|null $result - результат
     * @param string $prefix - префикс полей результата
     *
     * @throws DbResultItemException
     */
    public function __construct(?array $result, string $prefix = '')
    {
        $this->setResult($result, $prefix);
    }

    /**
     * Установить результат
     *
     * @param $result - результат
     * @param string $prefix - префикс полей результата
     *
     * @throws DbResultItemException
     */
    public function setResult(?array $result, string $prefix = ''): void
    {
        if ($result === null) {
            $this->result = $result;
            return;
        }

        if (!empty($result[0]) &&  !\is_array($result[0])) {
            throw new DbResultItemException('Входной массив не является результатом запроса к РСУБД');
        }

        if ($prefix) {
            foreach ($result as $record) {
                foreach ($record as $key => $value) {
                    $record["{$prefix}_$key"] = $value;
                    unset($record[$key]);
                }
            }
        }

        $this->result = $result;
    }

    /**
     * Вернуть первую запись результата
     *
     * @return array
     */
    public function getFirstResult(): ?array
    {
        return !empty($this->result[0]) && \is_array($this->result[0]) ? $this->result[0] : null;
    }

    /**
     * Вернуть поле id первой записи результата
     *
     * @return mixed|null
     */
    public function getResultId()
    {
        return $this->result[0]['id'] ?? null;
    }

    /**
     * Вернуть первое поле первой записи результата
     *
     * @return null
     */
    public function getResultFirstField()
    {
        if ($firstResult = $this->getFirstResult()) {
            return reset($firstResult);
        }

        return null;
    }

    /**
     * Возвратить результат в виде объекта
     *
     * @return null|\object
     */
    public function getObjectResult(): ?object
    {
        return (object) $this->getFirstResult();
    }
}