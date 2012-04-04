<?php

namespace Veml\TorzslapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Veml\TorzslapBundle\Entity\Torzslap4;
use Veml\TorzslapBundle\Entity\Torzslap4Repository;
use Veml\TorzslapBundle\Form\Torzslap4Type;

/**
 * Torzslap4 controller.
 *
 * @Route("/4_sz_torzslap")
 */
class Torzslap4Controller extends Controller
{
    /**
     * Lists all Torzslap4 entities.
     *
     * @Route("/", name="4_sz_torzslap")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        /** @var $repo Torzslap4Repository */
        $repo = $em->getRepository('VemlTorzslapBundle:Torzslap4');
        $entities = $repo->createQueryBuilder('l')->orderBy('l.id', 'ASC')->getQuery()->getResult();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Torzslap4 entity.
     *
     * @Route("/{id}/show", name="4_sz_torzslap_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('VemlTorzslapBundle:Torzslap4')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Torzslap4 entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Torzslap4 entity.
     *
     * @Route("/new", name="4_sz_torzslap_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Torzslap4();
        $form   = $this->createForm(new Torzslap4Type(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Torzslap4 entity.
     *
     * @Route("/create", name="4_sz_torzslap_create")
     * @Method("post")
     * @Template("VemlTorzslapBundle:Torzslap4:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Torzslap4();
        $request = $this->getRequest();
        $form    = $this->createForm(new Torzslap4Type(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('4_sz_torzslap'));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Torzslap4 entity.
     *
     * @Route("/{id}/edit", name="4_sz_torzslap_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        /** @var $repo Torzslap4Repository */
        $repo = $em->getRepository('VemlTorzslapBundle:Torzslap4');

        /** @var $entity Torzslap4 */
        $entity = $repo->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Torzslap4 entity.');
        }

        $itemPrev = $repo->createQueryBuilder('l')
            ->where('l.id < :id')
            ->orderBy('l.id', 'DESC')
            ->setMaxResults(1)
            ->setParameter('id', $entity->getId())
            ->getQuery()->getOneOrNullResult();

        $itemNext = $repo->createQueryBuilder('l')
            ->where('l.id > :id')
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(1)
            ->setParameter('id', $entity->getId())
            ->getQuery()->getOneOrNullResult();

        $editForm = $this->createForm(new Torzslap4Type(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'item_prev'   => $itemPrev,
            'item_next'   => $itemNext,
        );
    }

    /**
     * Edits an existing Torzslap4 entity.
     *
     * @Route("/{id}/update", name="4_sz_torzslap_update")
     * @Method("post")
     * @Template("VemlTorzslapBundle:Torzslap4:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('VemlTorzslapBundle:Torzslap4')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Torzslap4 entity.');
        }

        $editForm   = $this->createForm(new Torzslap4Type(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('4_sz_torzslap_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Torzslap4 entity.
     *
     * @Route("/{id}/delete", name="4_sz_torzslap_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('VemlTorzslapBundle:Torzslap4')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Torzslap4 entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('4_sz_torzslap'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
