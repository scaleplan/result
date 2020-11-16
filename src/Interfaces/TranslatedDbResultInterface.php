<?php
declare(strict_types=1);

namespace Scaleplan\Result\Interfaces;

/**
 * Interface TranslatedDbResultInterface
 *
 * @package Scaleplan\Result\Interfaces
 */
interface TranslatedDbResultInterface extends DbResultInterface
{
    /**
     * @param array|null $result
     * @param string|null $prefix
     */
    public function setResult(?array $result, string $prefix = null) : void;
}
