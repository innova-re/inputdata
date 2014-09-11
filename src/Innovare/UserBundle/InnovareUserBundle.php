<?php

namespace Innovare\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class InnovareUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
