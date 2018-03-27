<?php

namespace II\Bundle\CongeBundle\Controller;

use II\Bundle\CongeBundle\Entity\CongeConvention;
use II\Bundle\CongeBundle\Form\CongeConventionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ConventionController extends Controller
{
    public function indexAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        if ($id) {
            $conventionRep = $em->getRepository('CongeBundle:CongeConvention');
            $convention = $conventionRep->findOneBy(array('id' => $id));
        }
        else {
            $convention = new CongeConvention();
        }
        $form = $this->createForm(CongeConventionType::class, $convention);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->persist($convention);
            $em->flush();

        }

        return $this->render('CongeBundle::saisie_convention.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
