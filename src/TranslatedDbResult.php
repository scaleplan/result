<?php

namespace Scaleplan\Result;

use Scaleplan\Result\Exceptions\ResultException;
use function Scaleplan\Translator\translate;

/**
 * Класс результата запроса к БД
 *
 * Class DbResult
 *
 * @package Scaleplan\Result
 */
class TranslatedDbResult extends DbResult
{
    public const TRANSLATE_LABEL_PATTERN = '/to_translate_([a-z]+)_/';

    /**
     * @param array|null $result
     * @param string|null $prefix
     *
     * @throws ResultException
     *
     * @throws \ReflectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     */
    public function setResult(?array $result, string $prefix = null) : void
    {
        parent::setResult($result, $prefix);

        if (!\is_array($this->result)) {
            return;
        }

        $nameString = \implode(',', \array_keys($this->result));
        if (!\preg_match(static::TRANSLATE_LABEL_PATTERN, $nameString, $matches)) {
            return;
        }

        $newNames = \explode(',', preg_replace(static::TRANSLATE_LABEL_PATTERN, '', $nameString));
        foreach ($this->result as &$record) {
            foreach ($record as $name => &$value) {
                if (!\preg_match(static::TRANSLATE_LABEL_PATTERN, $name, $matches)) {
                    continue;
                }

                $value = translate("{$matches[1]}.$value") ?? $value;
            }

            unset($value);
            $record = array_combine($newNames, $record);
        }

        unset($record);
    }
}
