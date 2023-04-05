<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
Use Symfony\Component\Routing\Annotation\Route;
class IndexController extends AbstractController
{
 #[Route('/')]
 public function home()
 {
 return new Response('<h1>Ma première page Symfony</h1>');

 }
}