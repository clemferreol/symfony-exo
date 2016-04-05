<?php

namespace LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotPinkController extends Controller
{
    public function crimzon_cloverAction()
    {
        return $this->render('LeaderboardBundle:NotPinkCont:crimzon_clover.html.twig');
    }

    public function ikarugaAction()
    {
        return $this->render('LeaderboardBundle:NotPinkCont:ikaruga.html.twig');
    }
}