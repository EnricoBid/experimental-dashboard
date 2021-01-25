<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
      /**
      * @Route("/lucky/number/{max}", requirements={"max"="\d+"})
      */
    public function number(int $max = 1000, LoggerInterface $logger): Response
    {
        $number = random_int(0, $max);

        $logger->info("Hello World");

        return $this->render('lucky/number.html.twig', [
            'number' => $number
        ]);
    }
}