<?php
declare(strict_types=1);

namespace Scaleplan\Result\Exceptions;

/**
 * Class FirstResultNotArrayException
 *
 * @package Scaleplan\Result\Exceptions
 */
class FirstResultNotArrayException extends ResultException
{
    public const MESSAGE = 'First result is not array.';
    public const CODE = 500;
}
