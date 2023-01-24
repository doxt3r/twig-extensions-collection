<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class ClassTwigExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('get_class', 'get_class'),
        ];
    }

    public function getName(): string
    {
        return 'class_twig_extension';
    }
}
