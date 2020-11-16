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
    public const MESSAGE = 'result.first-record-must-be-array';
    public const CODE = 500;
}
