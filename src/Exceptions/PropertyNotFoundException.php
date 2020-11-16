<?php
declare(strict_types=1);

namespace Scaleplan\Result\Exceptions;

use function Scaleplan\Translator\translate;

/**
 * Class PropertyNotFoundException
 *
 * @package Scaleplan\Result\Exceptions
 */
class PropertyNotFoundException extends ResultException
{
    public const MESSAGE = 'result.property-not-found';
    public const CODE = 404;

    /**
     * PropertyNotFoundException constructor.
     *
     * @param string $propertyName
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     *
     * @throws \ReflectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     */
    public function __construct(string $propertyName, string $message = '', int $code = 0, \Throwable $previous = null)
    {
        parent::__construct(
            translate($message ?: static::MESSAGE, ['property' => $propertyName,]),
            $code ?: static::CODE,
            $previous
        );
    }
}
