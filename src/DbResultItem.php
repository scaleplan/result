<?php

namespace avtomon;

class DbResultItemException extends \Exception
{
}

class DbResultItem implements ResultInterface
{
    /**
     * @var array
     */
    private $result = [];

    public function __construct(array $result, string $prefix = '')
    {
        $this->setResult($result, $prefix);
    }

    /**
     * Геттер для результата
     *
     * @return array
     */
    public function getResult(): array
    {
        return $this->getArrayResult();
    }

    /**
     * Установить результат
     *
     * @param $result - результат
     * @param string $prefix - префикс полей результата
     */
    public function setResult(array $result, string $prefix = ''): void
    {
        if (empty($result[0]) ||  !is_array($result[0])) {
            throw new DbResultItemException('Входной массив не является результатом запроса к РСУБД');
        }

        if ($prefix) {
            $addPrefix = function (array &$record) use ($prefix) {

            };

            foreach ($result as &$record) {
                foreach ($record as $key => &$value) {
                    $record["$prefix_$key"] = $value;
                }

                unset($value);
            }

            unset($record);
        }

        $this->result = $result;
    }

    /**
     * Вернуть результат в виде массива
     *
     * @return array
     */
    public function getArrayResult(): array
    {
        return $this->result;
    }

    /**
     * Вернуть результат в виде JSON
     *
     * @return string
     */
    public function getJsonResult(): string
    {
        return json_encode($this->getResult(), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Вернуть первую запись результата
     *
     * @return array
     */
    public function getFirstResult(): ?array
    {
        return $this->result[0] ?? null;
    }

    /**
     * Вернуть поле id первой записи результата
     *
     * @return mixed|null
     */
    public function getResultId()
    {
        if (!isset($this->result[0]['id']) && !is_null($this->result[0]['id'])) {
            throw new DbResultItemException('Первая запись результа не существует или не содержит поля id');
        }

        return $this->result[0]['id'];
    }

    /**
     * Вернуть первое поле первой записи результата
     *
     * @return mixed
     * @throws AclessException
     */
    public function getResultFirstField()
    {
        if (!($firstResult = $this->getFirstResult())) {
            throw new DbResultItemException('Первая запись результа не существует или пуста');
        }

        return reset($firstResult);
    }

    /**
     * Вернуть результат в виде строки
     *
     * @return string
     */
    public function getStringResult(): string
    {
        return $this->getJsonResult();
    }

    /**
     * Вернуть результат в виде строки
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getStringResult();
    }
}