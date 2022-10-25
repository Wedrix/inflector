<?php

declare(strict_types=1);

namespace Wedrix\Inflector;

use Doctrine\Inflector\Inflector as DoctrineInflector;
use Doctrine\Inflector\InflectorFactory;

final class Inflector extends DoctrineInflector
{
    private static DoctrineInflector $inflector;

    public function __construct()
    {
        static::$inflector ??= InflectorFactory::create()->build();
    }

    /**
     * @inheritdoc
     */
    public function tableize(string $word): string
    {
        return static::$inflector
                    ->tableize($word);
    }

    /**
     * @inheritdoc
     */
    public function classify(string $word): string
    {
        return static::$inflector
                    ->classify($word);
    }

    /**
     * @inheritdoc
     */
    public function camelize(string $word): string
    {
        return static::$inflector
                    ->camelize($word);
    }

    /**
     * @inheritdoc
     */
    public function capitalize(string $string, string $delimiters = " \n\t\r\0\x0B-"): string
    {
        return static::$inflector
                    ->capitalize($string, $delimiters);
    }

    /**
     * @inheritdoc
     */
    public function seemsUtf8(string $string): bool
    {
        return static::$inflector
                    ->seemsUtf8($string);
    }

    /**
     * @inheritdoc
     */
    public function unaccent(string $string): string
    {
        return static::$inflector
                    ->unaccent($string);
    }

    /**
     * @inheritdoc
     */
    public function urlize(string $string): string
    {
        return static::$inflector
                    ->urlize($string);
    }

    /**
     * @inheritdoc
     */
    public function singularize(string $word): string
    {
        return static::$inflector
                    ->singularize($word);
    }

    /**
     * @inheritdoc
     */
    public function pluralize(string $word): string
    {
        return static::$inflector
                    ->pluralize($word);
    }
}