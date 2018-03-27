<?php

namespace II\Bundle\CongeBundle\Controller;

use II\Bundle\CongeBundle\Entity\CongeUtilisateur;
use II\Bundle\CongeBundle\Form\CongeUtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UtilisateurController extends Controller
{
    public function indexAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        if ($id) {
            $utilisateurRep = $em->getRepository('CongeBundle:CongeUtilisateur');
            $utilisateur = $utilisateurRep->findOneBy(array('id' => $id));
        }
        else {
            $utilisateur = new CongeUtilisateur();
        }

        $form = $this->createForm(CongeUtilisateurType::class, $utilisateur);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->persist($utilisateur);
            $em->flush();

        }

        return $this->render('CongeBundle::saisie_utilisateur.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
