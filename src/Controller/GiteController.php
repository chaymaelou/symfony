<?php 
namespace App\Controller;
use App\Entity\Gite;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GiteController extends AbstractController
 {
/**
 * @Route("/gite/{id}", name="gite_show")
 */



public function show(Gite $gite)
 {

return $this->render('gite/show.html.twig', [
    "gite"=> $gite
]);
}

}