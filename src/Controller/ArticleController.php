<?php
/**
 * Created by PhpStorm.
 * User: Vlad-Andrei HRISCU
 * Date: 02.04.2018
 * Time: 10:36
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('test');
    }
}