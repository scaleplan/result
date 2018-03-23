<?php

namespace avtomon;

class HTMLResultItem extends AbstractResult
{
    /**
     * @var string
     */
    protected $result = '';

    /**
     * HTMLResultItem constructor
     *
     * @param string $result
     */
    public function __construct(string $result)
    {
        $this->setResult($result);
    }

    public function getResult(): string
    {
        return $this->getStringResult();
    }

    /**
     * Get string result
     *
     * @return string
     */
    public function getStringResult(): string
    {
        return $this->result;
    }

    /**
     * Set string result
     *
     * @param string $result
     */
    public function setResult(string $result)
    {
        $this->result = $result;
    }
}