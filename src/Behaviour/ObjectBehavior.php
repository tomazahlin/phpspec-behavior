<?php

namespace Ahlin\PhpSpec\Behaviour;

use PhpSpec\ObjectBehavior as BaseBehavior;

/**
 * Class ObjectBehavior can be used as a base class for PhpSpec classes, as it provides additional common functionality
 */
class ObjectBehavior extends BaseBehavior
{
    /**
     * {@inheritdoc}
     * Provides additional inline matchers for PhpSpec
     * @return array
     */
    public function getMatchers()
    {
        return [
            'haveKey' => function(array $subject, $key) {
                return array_key_exists($key, $subject);
            },
            'haveValue' => function(array $subject, $value) {
                return in_array($value, $subject);
            },
            'haveKeyWithValue' => function(array $subject, $key, $value) {
                if(!array_key_exists($key, $subject)) {
                    return false;
                }
                return $subject[$key] === $value;
            },
            'beEmpty' => function($array) {
                return count($array) === 0;
            },
        ];
    }
}
