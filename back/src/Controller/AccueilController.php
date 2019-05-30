<?php


namespace App\Controller;


use App\Entity\Pages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/utilisateur", name="back-office_")
 */
class AccueilController extends AbstractController {
    /**
     * @Route("/page/{id}", name="pages_modify")
     */
    public function modifyPage($id){
        $page = $this->getDoctrine()->getRepository(Pages::class)->find($id);
        return $this->render('pages/modify.html.twig',array(
            'page'=>$page,
        ));
    }
}