<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DownloadController extends AbstractController
{
      /**
      * @Route("/download/sketch")
      */
    public function download_sketch(LoggerInterface $logger): Response
    {
        $logger->info("Download Sketch");

        $file = new File('asset/sketch.png');
        return $this->file($file, 'my_sketch.png', ResponseHeaderBag::DISPOSITION_INLINE);

    }
}