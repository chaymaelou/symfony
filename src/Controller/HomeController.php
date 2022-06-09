<?php 

namespace   App\Controller;

use App\Entity\Gite;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {
 

/**
 * @Route("/", name="home") 
 */



public function index(ManagerRegistry $doctrine)
{

$repository = $doctrine->getRepository(Gite::class);
$gites = $repository->findAll();
dump($gites);



return $this->render("home/index.html.twig", [
    "title" => "Bienvenue",
    "message" => " my first page " ,
    "menu" => "home",
    "gites" => $gites
]);
}

/**
 * @Route("/contact", name="contact")
 */
public function contact(){
    return $this->render("home/contact.html.twig" , [
        "menu" => "contact"
    ]);
}


}