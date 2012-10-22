<?php

namespace Veml\TorzslapBundle\Controller;

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


class HazszamController extends Controller
{
    /**
     * @Route("/hazszamok/{filter}", defaults={"filter" = "null"})
     * @Template()
     */
    public function indexAction($filter = null)
    {
        $res = null;
        if ($filter == 'all' || is_numeric($filter)) {
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
            $qbt1->orderBy('t1.hazszam');
            $qbt1->addOrderBy('t1.utca_telepules_szab');
            $qbt2 = $torzslap2Repo->createQueryBuilder('t2');
            $qbt2->orderBy('t2.lakhely_hazszam');
            $qbt2->addOrderBy('t2.lakhely_utca_szab');
            $qbt3 = $torzslap3Repo->createQueryBuilder('t3');
            $qbt3->orderBy('t3.hazszam');
            $qbt3->addOrderBy('t3.lakhely_lakcim_utca_szab');
            $qbt4 = $torzslap4Repo->createQueryBuilder('t4');
            $qbt4->orderBy('t4.telep_hazszam');
            $qbt4->addOrderBy('t4.telep_cimhelye_szab');

            if ($filter != 'all') {
                $hazszam = intval($filter);

                $qbt1->where('t1.hazszam = :hazszam')
                    ->setParameter('hazszam', $hazszam);

                $qbt2->where('t2.lakhely_hazszam= :hazszam')
                    ->setParameter('hazszam', $hazszam);

                $qbt3->where('t3.hazszam= :hazszam')
                    ->setParameter('hazszam', $hazszam);

                $qbt4->where('t4.telep_hazszam= :hazszam')
                    ->setParameter('hazszam', $hazszam);
            }

            foreach ($qbt1->getQuery()->getResult() as $tl) {
                /** @var $tl Torzslap1 */
                $res[$tl->getHazszam()][] = array(
                    'utcanev' => $tl->getUtcaTelepulesSzab(),
                    'link' => $this->generateUrl('1_sz_torzslap_edit', array('id' => $tl->getId())),
                    'link_title' => 'P-1/'.$tl->getId(),
                );
            }

            foreach ($qbt2->getQuery()->getResult() as $tl) {
                /** @var $tl Torzslap2 */
                $res[$tl->getLakhelyHazszam()][] = array(
                    'utcanev' => $tl->getLakhelyUtcaSzab(),
                    'link' => $this->generateUrl('2_sz_torzslap_edit', array('id' => $tl->getId())),
                    'link_title' => 'P-2/'.$tl->getId(),
                );
            }

            foreach ($qbt3->getQuery()->getResult() as $tl) {
                /** @var $tl Torzslap3 */
                $res[$tl->getHazszam()][] = array(
                    'utcanev' => $tl->getLakhelyLakcimUtcaSzab(),
                    'link' => $this->generateUrl('3_sz_torzslap_edit', array('id' => $tl->getId())),
                    'link_title' => 'P-3/'.$tl->getId(),
                );
            }

            foreach ($qbt4->getQuery()->getResult() as $tl) {
                /** @var $tl Torzslap4 */
                $res[$tl->getTelepHazszam()][] = array(
                    'utcanev' => $tl->getTelepCimhelyeSzab(),
                    'link' => $this->generateUrl('4_sz_torzslap_edit', array('id' => $tl->getId())),
                    'link_title' => 'P-4/'.$tl->getId(),
                );
            }
        }

//        var_dump($res);
        return array(
            'results' => $res,
        );
    }
}
