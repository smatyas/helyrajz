<?php

namespace Veml\TorzslapBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Veml\TorzslapBundle\Entity\Torzslap1;
use Veml\TorzslapBundle\Entity\Torzslap1Repository;
use Veml\TorzslapBundle\Entity\Torzslap2;
use Veml\TorzslapBundle\Entity\Torzslap2Repository;
use Veml\TorzslapBundle\Entity\Torzslap3;
use Veml\TorzslapBundle\Entity\Torzslap3Repository;
use Veml\TorzslapBundle\Entity\Torzslap4;
use Veml\TorzslapBundle\Entity\Torzslap4Repository;


class UtcanevController extends Controller
{
    /**
     * @Route("/utcanevek/{filter}", defaults={"filter" = "null"})
     * @Template()
     */
    public function indexAction(Request $request, $filter = null)
    {
        $res = null;
        $form = $this->getSearchForm();

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $data = $form->getData();
                $filter = $data['utcanev'];
            } else {
                $filter = null;
            }
        }

        if (!is_null($filter)) {
            $res = array();
            $em = $this->getDoctrine()->getEntityManager();
            /** @var $torzslap1Repo Torzslap1Repository */
            $torzslap1Repo = $em->getRepository('VemlTorzslapBundle:Torzslap1');
            /** @var $torzslap2Repo Torzslap2Repository */
            $torzslap2Repo = $em->getRepository('VemlTorzslapBundle:Torzslap2');
            /** @var $torzslap3Repo Torzslap3Repository */
            $torzslap3Repo = $em->getRepository('VemlTorzslapBundle:Torzslap3');
            /** @var $torzslap4Repo Torzslap4Repository */
            $torzslap4Repo = $em->getRepository('VemlTorzslapBundle:Torzslap4');

            $qbt1 = $torzslap1Repo->createQueryBuilder('t1');
            $qbt1->orderBy('t1.utca_telepules_szab');
            $qbt1->addOrderBy('t1.hazszam');
            $qbt2 = $torzslap2Repo->createQueryBuilder('t2');
            $qbt2->orderBy('t2.lakhely_utca_szab');
            $qbt2->addOrderBy('t2.lakhely_hazszam');
            $qbt3 = $torzslap3Repo->createQueryBuilder('t3');
            $qbt3->orderBy('t3.lakhely_lakcim_utca_szab');
            $qbt3->addOrderBy('t3.hazszam');
            $qbt4 = $torzslap4Repo->createQueryBuilder('t4');
            $qbt4->orderBy('t4.telep_cimhelye_szab');
            $qbt4->addOrderBy('t4.telep_hazszam');

            if ($filter != 'all') {
                $qbt1->where($qbt1->expr()->like('t1.utca_telepules_szab', ':utca'))
                    ->setParameter('utca', '%'.$filter.'%');

                $qbt2->where($qbt2->expr()->like('t2.lakhely_utca_szab', ':utca'))
                    ->setParameter('utca', '%'.$filter.'%');

                $qbt3->where($qbt3->expr()->like('t3.lakhely_lakcim_utca_szab', ':utca'))
                    ->setParameter('utca', '%'.$filter.'%');

                $qbt4->where($qbt4->expr()->like('t4.telep_cimhelye_szab', ':utca'))
                    ->setParameter('utca', '%'.$filter.'%');
            }

            foreach ($qbt1->getQuery()->getResult() as $tl) {
                /** @var $tl Torzslap1 */
                $res[$tl->getUtcaTelepulesSzab()][] = array(
                    'hazszam' => $tl->getHazszam(),
                    'link' => $this->generateUrl('1_sz_torzslap_edit', array('id' => $tl->getId())),
                    'link_title' => 'P-1/'.$tl->getId(),
                );
            }

            foreach ($qbt2->getQuery()->getResult() as $tl) {
                /** @var $tl Torzslap2 */
                $res[$tl->getLakhelyUtcaSzab()][] = array(
                    'hazszam' => $tl->getLakhelyHazszam(),
                    'link' => $this->generateUrl('2_sz_torzslap_edit', array('id' => $tl->getId())),
                    'link_title' => 'P-2/'.$tl->getId(),
                );
            }

            foreach ($qbt3->getQuery()->getResult() as $tl) {
                /** @var $tl Torzslap3 */
                $res[$tl->getLakhelyLakcimUtcaSzab()][] = array(
                    'hazszam' => $tl->getHazszam(),
                    'link' => $this->generateUrl('3_sz_torzslap_edit', array('id' => $tl->getId())),
                    'link_title' => 'P-3/'.$tl->getId(),
                );
            }

            foreach ($qbt4->getQuery()->getResult() as $tl) {
                /** @var $tl Torzslap4 */
                $res[$tl->getTelepCimhelyeSzab()][] = array(
                    'hazszam' => $tl->getTelepHazszam(),
                    'link' => $this->generateUrl('4_sz_torzslap_edit', array('id' => $tl->getId())),
                    'link_title' => 'P-4/'.$tl->getId(),
                );
            }
        }

        return array(
            'results' => $res,
            'form' => $form->createView(),
        );
    }

    /**
     * Builds search form
     *
     * @return \Symfony\Component\Form\Form
     */
    private function getSearchForm()
    {
        $form = $this->createFormBuilder();
        $form->add('utcanev', 'text', array(
            'label' => 'Utcanév',
            'error_bubbling' => true,
        ));

        return $form->getForm();
    }
}
