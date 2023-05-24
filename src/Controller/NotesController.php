<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NotesController extends AbstractController {
    public function index()
    {
        $content = ['content' => 'some content'];

        return $this->render('/index.html.twig', $content);
    }

    public function list ($media)
    {
        $content = ['content' => $media];
        return $this->json($content);
    }

    public function saveNotesAction ($note)
    {
        $content = ['content' => $note];
        return $this->json($content);
    }
}
