<?php


namespace Morebec\Validator\Rule;


use Morebec\Validator\ValidationRuleInterface;

/**
 * Validates that a value is a boolean
 */
class IsBoolean implements ValidationRuleInterface
{
    /**
     * @inheritDoc
     */
    public function validate($v): bool
    {
        return is_bool($v);
    }

    /**
     * @inheritDoc
     */
    public function getMessage($v): string
    {
        return "The value '{$v}' was expected to be a boolean";
    }
}