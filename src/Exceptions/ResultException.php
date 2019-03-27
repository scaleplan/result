<?php

namespace Scaleplan\Result\Exceptions;

/**
 * Class ResultException
 *
 * @package Scaleplan\Result\Exceptions
 */
class ResultException extends \Exception
{
    public const MESSAGE = 'Result error.';

    /**
     * ResultException constructor.
     *
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(string $message = '', int $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message ?: static::MESSAGE, $code, $previous);
    }
}
