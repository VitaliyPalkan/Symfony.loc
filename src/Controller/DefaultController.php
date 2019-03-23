<?php

namespace App\Controller;
//необходимо добавить эти пространства имен
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class DefaultController
{
    public function index()
    {
        return new Response('This is the first Symfony4 page!');
    }
}