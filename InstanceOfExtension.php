<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension

    /**
     * @return array|\Twig_Filter[]
     */
    public function getFilters()
    {
        return [           
            new TwigFilter('is_instance_of', [$this, 'isInstanceOf'])
        ];
    }

    /**
     * @param $object
     * @param $class
     * @return bool
     */
    public function isInstanceOf($object, $class): bool
    {
        return is_a($object, $class, true);
    }
}
