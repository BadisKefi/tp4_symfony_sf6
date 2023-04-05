<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Article;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class IndexController extends AbstractController
{
/**
 *@Route("/",name="article_list")
 */
public function home()
 {
 //récupérer tous les articles de la table article de la BD
 // et les mettre dans le tableau $articles
$articles= $this->getDoctrine()->getRepository(Article::class)->findAll();
return $this->render('articles/index.html.twig',['articles'=> $articles]);
 }
 /**
 * @Route("/article/save")
 */
public function save() {
    $entityManager = $this->getDoctrine()->getManager();
    $article = new Article();
    $article->setNom('Article 1');
    $article->setPrix(1000);
   
    $entityManager->persist($article);
    $entityManager->flush();
    return new Response('Article enregisté avec id '.$article->getId());
    }
   
}
