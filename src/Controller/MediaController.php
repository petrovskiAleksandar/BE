<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MediaController extends AbstractController {
    public function index()
    {
        return $this->render('/index.html.twig');
    }

    public function generate ($media)
    {
        $content = ['content' => $media];
        return $this->json($content);
    }
}
