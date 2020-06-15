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
    public const MESSAGE = 'Первая запись результата не является массивом.';
    public const CODE = 500;
}
