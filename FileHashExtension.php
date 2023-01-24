<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class FileHashExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('hash', [$this, 'hash']),
        ];
    }

    // add hash to resource
    public function hash(string $filename): string
    {
        $filepath = getcwd() . $filename;
        $md5 = md5_file($filepath);

        return $filename . '?v=' . $md5;
    }
}
