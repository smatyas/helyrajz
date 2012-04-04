<?php

namespace Veml\TorzslapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Veml\TorzslapBundle\Entity\Torzslap1;
use Veml\TorzslapBundle\Entity\Torzslap1Repository;
use Veml\TorzslapBundle\Form\Torzslap1Type;

/**
 * Torzslap1 controller.
 *
 * @Route("/1_sz_torzslap")
 */
class Torzslap1Controller extends Controller
{
    /**
     * Lists all Torzslap1 entities.
     *
     * @Route("/", name="1_sz_torzslap")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        /** @var $repo Torzslap1Repository */
        $repo = $em->getRepository('VemlTorzslapBundle:Torzslap1');
        $entities = $repo->createQueryBuilder('l')->orderBy('l.id', 'ASC')->getQuery()->getResult();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Torzslap1 entity.
     *
     * @Route("/{id}/show", name="1_sz_torzslap_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('VemlTorzslapBundle:Torzslap1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Torzslap1 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Torzslap1 entity.
     *
     * @Route("/new", name="1_sz_torzslap_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Torzslap1();
        $form   = $this->createForm(new Torzslap1Type(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Torzslap1 entity.
     *
     * @Route("/create", name="1_sz_torzslap_create")
     * @Method("post")
     * @Template("VemlTorzslapBundle:Torzslap1:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Torzslap1();
        $request = $this->getRequest();
        $form    = $this->createForm(new Torzslap1Type(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('1_sz_torzslap'));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Torzslap1 entity.
     *
     * @Route("/{id}/edit", name="1_sz_torzslap_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('VemlTorzslapBundle:Torzslap1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Torzslap1 entity.');
        }

        $editForm = $this->createForm(new Torzslap1Type(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Torzslap1 entity.
     *
     * @Route("/{id}/update", name="1_sz_torzslap_update")
     * @Method("post")
     * @Template("VemlTorzslapBundle:Torzslap1:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('VemlTorzslapBundle:Torzslap1')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Torzslap1 entity.');
        }

        $editForm   = $this->createForm(new Torzslap1Type(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('1_sz_torzslap_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Torzslap1 entity.
     *
     * @Route("/{id}/delete", name="1_sz_torzslap_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('VemlTorzslapBundle:Torzslap1')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Torzslap1 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('1_sz_torzslap'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
