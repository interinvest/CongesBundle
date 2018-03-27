<?php

namespace II\Bundle\CongeBundle\Controller;

namespace II\Bundle\CongeBundle\Controller;

use II\Bundle\CongeBundle\Entity\CongeSociete;
use II\Bundle\CongeBundle\Form\CongeSocieteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SocieteController extends Controller
{
    public function indexAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        if ($id) {
            $societeRep = $em->getRepository('CongeBundle:CongeSociete');
            $societe = $societeRep->findOneBy(array('id' => $id));
        }
        else {
            $societe = new CongeSociete();
        }
        $form = $this->createForm(CongeSocieteType::class, $societe);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $infos = $request->get('ii_bundle_congebundle_conge_societe');
            $gerantRep = $em->getRepository('MigrationBundle:Gerant');
            $gerant    = $gerantRep->findOneBy(array('id' => $infos['gerant']));
            $societe->setGerant($gerant);

            $em->persist($societe);
            $em->flush();

        }

        return $this->render('CongeBundle::saisie_societe.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
