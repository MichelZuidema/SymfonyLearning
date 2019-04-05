<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleController extends Controller
{
    /**
     * @Route("/")
     */
    public function index()
    {
        //Articles
        $articles = ['Article 1', 'Article2'];

        return $this->render('articles/index.html.twig', array('articles' => $articles));
    }
}