<?php
declare(strict_types=1);

namespace Scaleplan\Result\Exceptions;

/**
 * Class PropertyNotFoundException
 *
 * @package Scaleplan\Result\Exceptions
 */
class PropertyNotFoundException extends ResultException
{
    public const MESSAGE = 'Property :property not found.';
    public const CODE = 404;

    /**
     * PropertyNotFoundException constructor.
     *
     * @param string $propertyName
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(string $propertyName, string $message = '', int $code = 0, \Throwable $previous = null)
    {
        parent::__construct(
            \str_replace(':property', $propertyName, ($message ?: static::MESSAGE)),
            $code ?: static::CODE,
            $previous
        );
    }
}
