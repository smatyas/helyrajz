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
            'entities' => count($torzslap1Entities),
        );
        foreach ($torzslap1Entities as $torzslap1) {
            /** @var $torzslap1 Torzslap1 */
            $statTorzslap1['chars'] += $torzslap1->getCharactersCount();
        }

        // get statistics for Torzslap2
        $torzslap2Entities = $torzslap2Repo->findAll();
        $statTorzslap2 = array(
            'chars' => 0,
            'entities' => count($torzslap2Entities),
        );
        foreach ($torzslap2Entities as $torzslap2) {
            /** @var $torzslap2 Torzslap2 */
            $statTorzslap2['chars'] += $torzslap2->getCharactersCount();
        }

        // get statistics for Torzslap3
        $torzslap3Entities = $torzslap3Repo->findAll();
        $statTorzslap3 = array(
            'chars' => 0,
            'entities' => count($torzslap3Entities),
        );
        foreach ($torzslap3Entities as $torzslap3) {
            /** @var $torzslap3 Torzslap3 */
            $statTorzslap3['chars'] += $torzslap3->getCharactersCount();
        }

        // get statistics for Torzslap4
        $torzslap4Entities = $torzslap4Repo->findAll();
        $statTorzslap4 = array(
            'chars' => 0,
            'entities' => count($torzslap4Entities),
        );
        foreach ($torzslap4Entities as $torzslap4) {
            /** @var $torzslap4 Torzslap4 */
            $statTorzslap4['chars'] += $torzslap4->getCharactersCount();
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
