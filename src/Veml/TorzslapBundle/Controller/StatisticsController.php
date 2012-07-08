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


class StatisticsController extends Controller
{
    /**
     * @Route("/statistics")
     * @Template()
     */
    public function indexAction()
    {
        /** @var $torzslap1Repo Torzslap1Repository */
        $torzslap1Repo = $this->getDoctrine()->getRepository('VemlTorzslapBundle:Torzslap1');
        $torzslap2Repo = $this->getDoctrine()->getRepository('VemlTorzslapBundle:Torzslap2');
        $torzslap3Repo = $this->getDoctrine()->getRepository('VemlTorzslapBundle:Torzslap3');
        $torzslap4Repo = $this->getDoctrine()->getRepository('VemlTorzslapBundle:Torzslap4');

        // get statistics for Torzslap1
        $torzslap1Entities = $torzslap1Repo->findAll();
        $statTorzslap1 = array(
            'chars' => 0,
        );
        foreach ($torzslap1Entities as $torzslap1) {
            /** @var $torzslap1 Torzslap1 */
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getAllapFoglViszonyIrva());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getEv());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getFoglalkozasaSzab());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getFolyoszam());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getForrashely());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getHalalIdejeEv());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getHalalIdejeHo());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getHalalIdejeNap());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getHalalKorulmenyei());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getHalalOkaIrva());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getHalalOkaSzab());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getHasab());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getHazNeve());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getHazszam());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getJelzet());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getKoraEv());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getKoraHet());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getKoraHo());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getKoraNap());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getKoraOra());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getLap());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getMaradtKkEsVagyon());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getMegholtNeveIrva());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getMegholtNeveSzab());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getMegjegyzesek());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getOldal());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getOszlop());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getSorKot());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getTovabbiEgykoruAdat());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getUtcaTelepulesIrva());
            $statTorzslap1['chars'] += mb_strlen($torzslap1->getUtcaTelepulesSzab());
        }

        // get statistics for Torzslap2
        $torzslap2Entities = $torzslap2Repo->findAll();
        $statTorzslap2 = array(
            'chars' => 0,
        );
        foreach ($torzslap2Entities as $torzslap2) {
            /** @var $torzslap2 Torzslap2 */
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getAllapFoglViszonyIrva());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getForrashely());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getForrashelyAkvNeme());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getForrashelyFelek());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getForrashelyPd());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getHalalIdejeEv());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getHalalIdejeHo());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getHalalIdejeNap());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getHalalOkaIrva());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getHalalOkaSzab());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getHivSzekhely());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getJelzet());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getJelzetEv());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getJelzetFolyoszam());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getKoraEv());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getKoraHet());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getKoraHo());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getKoraNap());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getKoraOra());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getLakhelyHazszam());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getLakhelyUtcaIrva());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getLakhelyUtcaSzab());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getMegholtFoglSzab());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getMegholtNeveIrva());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getMegholtNeveSzab());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getMegjegyzesek());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getSzulHelyIrva());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getSzulHelySzab());
            $statTorzslap2['chars'] += mb_strlen($torzslap2->getTovabbiEgykoruAdat());
        }

        // get statistics for Torzslap3
        $torzslap3Entities = $torzslap3Repo->findAll();
        $statTorzslap3 = array(
            'chars' => 0,
        );
        foreach ($torzslap3Entities as $torzslap3) {
            /** @var $torzslap3 Torzslap3 */
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getAnyanyelve());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getElotte());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getForrashely());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getForrashelyKot());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getForrashelyOp());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getGondviseloAllapFoglViszonyIrva());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getGondviseloFoglSzab());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getGondviseloNeveSzab());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getHazszam());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getJelzet());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getJelzetFsz());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getJelzetTanev());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getLakhelyLakcimUtcaIrva());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getLakhelyLakcimUtcaSzab());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getMegjegyzesek());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getNovendekNeveIrva());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getNovendekNeveSzab());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getNovendekSzulHelyeIrva());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getNovendekSzulHelyeSzab());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getNovendekSzulIdejeEv());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getNovendekSzulIdejeHo());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getNovendekSzulIdejeNap());
            $statTorzslap3['chars'] += mb_strlen($torzslap3->getTovabbiEgykoruAdat());
        }

        // get statistics for Torzslap4
        $torzslap4Entities = $torzslap4Repo->findAll();
        $statTorzslap4 = array(
            'chars' => 0,
        );
        foreach ($torzslap4Entities as $torzslap4) {
            /** @var $torzslap4 Torzslap4 */
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getFoglalkVallalkIrva());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getFoglalkVallalkNeve());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getFoglalkVallalkSzab());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getForrashely());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getForrashelyKot());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getForrashelyOld());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getHivatkEngSz());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getIpIgKelte());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getIpIgSzama());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getJelzet());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getJelzetEv());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getJelzetOsztaly());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getJelzetSsz());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getMegjegyzesek());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getModHivatkozasa());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getModositasValtozasBeszuntetes());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getTelepCimhelyeIrva());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getTelepCimhelyeSzab());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getTelepengedely());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getTelepHazNeve());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getTelepHazszam());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getTovabbiEgykoruAdat());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getUzlettarsNeveIrva());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getUzlettarsNeveSzab());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getUzlettarsSzemAdatai());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getUzletvezElarusito());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getVallalkozoNeveIrva());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getVallalkozoNeveSzab());
            $statTorzslap4['chars'] += mb_strlen($torzslap4->getVallalkozoSzemAdatai());
        }

        // return parameters for rendering
        return array('statistics' => array(
            'torzslap1' => $statTorzslap1,
            'torzslap2' => $statTorzslap2,
            'torzslap3' => $statTorzslap3,
            'torzslap4' => $statTorzslap4,
        ));
    }
}
