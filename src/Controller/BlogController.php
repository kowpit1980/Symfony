<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    public function list()
    {
        $list = [
            ["slug" => "alamakota", "description" => "co to "],  
            ["slug" => "123", "description" => "321 "],
            ["slug" => "zab", "description" => "dwojka "],
        ];

        return $this->render('Blog/list.html.twig', [
            'list' => $list,
        ]);
    }
    public function show($slug)
    {
    
        return $this->render('Blog/show.html.twig', [
            'slug' => $slug,
        ]);
    }

}



?>
