<?php

namespace Veml\TorzslapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Veml\TorzslapBundle\Entity\Torzslap3;
use Veml\TorzslapBundle\Form\Torzslap3Type;

/**
 * Torzslap3 controller.
 *
 * @Route("/3_sz_torzslap")
 */
class Torzslap3Controller extends Controller
{
    /**
     * Lists all Torzslap3 entities.
     *
     * @Route("/", name="3_sz_torzslap")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('VemlTorzslapBundle:Torzslap3')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Torzslap3 entity.
     *
     * @Route("/{id}/show", name="3_sz_torzslap_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('VemlTorzslapBundle:Torzslap3')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Torzslap3 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Torzslap3 entity.
     *
     * @Route("/new", name="3_sz_torzslap_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Torzslap3();
        $form   = $this->createForm(new Torzslap3Type(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Torzslap3 entity.
     *
     * @Route("/create", name="3_sz_torzslap_create")
     * @Method("post")
     * @Template("VemlTorzslapBundle:Torzslap3:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Torzslap3();
        $request = $this->getRequest();
        $form    = $this->createForm(new Torzslap3Type(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('3_sz_torzslap'));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Torzslap3 entity.
     *
     * @Route("/{id}/edit", name="3_sz_torzslap_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('VemlTorzslapBundle:Torzslap3')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Torzslap3 entity.');
        }

        $editForm = $this->createForm(new Torzslap3Type(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Torzslap3 entity.
     *
     * @Route("/{id}/update", name="3_sz_torzslap_update")
     * @Method("post")
     * @Template("VemlTorzslapBundle:Torzslap3:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('VemlTorzslapBundle:Torzslap3')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Torzslap3 entity.');
        }

        $editForm   = $this->createForm(new Torzslap3Type(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('3_sz_torzslap_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Torzslap3 entity.
     *
     * @Route("/{id}/delete", name="3_sz_torzslap_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('VemlTorzslapBundle:Torzslap3')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Torzslap3 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('3_sz_torzslap'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
