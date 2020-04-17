<?php
declare(strict_types=1);

namespace Scaleplan\Result\Exceptions;

/**
 * Class ClassIsNotModelException
 *
 * @package Scaleplan\Result\Exceptions
 */
class ClassIsNotModelException extends ResultException
{
    public const MESSAGE = 'Class is not a model.';
    public const CODE = 406;
}
