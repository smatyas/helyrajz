<?php

namespace Veml\TorzslapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Veml\TorzslapBundle\Entity\Torzslap1;
use Veml\TorzslapBundle\Entity\Torzslap1Repository;

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

        // get statistics for Torzslap3
        $torzslap3Entities = $torzslap3Repo->findAll();
        $statTorzslap3 = array(
            'chars' => 0,
        );

        // get statistics for Torzslap4
        $torzslap4Entities = $torzslap4Repo->findAll();
        $statTorzslap4 = array(
            'chars' => 0,
        );

        // return parameters for rendering
        return array('statistics' => array(
            'torzslap1' => $statTorzslap1,
            'torzslap2' => $statTorzslap2,
            'torzslap3' => $statTorzslap3,
            'torzslap4' => $statTorzslap4,
        ));
    }
}
