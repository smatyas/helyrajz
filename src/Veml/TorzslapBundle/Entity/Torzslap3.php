<?php

namespace Veml\TorzslapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Veml\TorzslapBundle\Entity\Torzslap3
 *
 * @ORM\Table(name="torzslap3")
 * @ORM\Entity(repositoryClass="Veml\TorzslapBundle\Entity\Torzslap3Repository")
 */
class Torzslap3
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $forrashely_kot
     *
     * @ORM\Column(name="forrashely_kot", type="string", length=255, nullable=true)
     */
    private $forrashely_kot;

    /**
     * @var string $forrashely_op
     *
     * @ORM\Column(name="forrashely_op", type="string", length=255, nullable=true)
     */
    private $forrashely_op;

    /**
     * @var string $jelzet_tanev
     *
     * @ORM\Column(name="jelzet_tanev", type="string", length=255, nullable=true)
     */
    private $jelzet_tanev;

    /**
     * @var string $jelzet_fsz
     *
     * @ORM\Column(name="jelzet_fsz", type="string", length=255, nullable=true)
     */
    private $jelzet_fsz;

    /**
     * @var string $novendek_neve_szab
     *
     * @ORM\Column(name="novendek_neve_szab", type="string", length=255, nullable=true)
     */
    private $novendek_neve_szab;

    /**
     * @var string $novendek_neve_irva
     *
     * @ORM\Column(name="novendek_neve_irva", type="string", length=255, nullable=true)
     */
    private $novendek_neve_irva;

    /**
     * @var string $novendek_szul_helye_szab
     *
     * @ORM\Column(name="novendek_szul_helye_szab", type="string", length=255, nullable=true)
     */
    private $novendek_szul_helye_szab;

    /**
     * @var string $novendek_szul_helye_irva
     *
     * @ORM\Column(name="novendek_szul_helye_irva", type="string", length=255, nullable=true)
     */
    private $novendek_szul_helye_irva;

    /**
     * @var string $novendek_szul_ideje_ev
     *
     * @ORM\Column(name="novendek_szul_ideje_ev", type="string", length=4, nullable=true)
     */
    private $novendek_szul_ideje_ev;

    /**
     * @var string $novendek_szul_ideje_ho
     *
     * @ORM\Column(name="novendek_szul_ideje_ho", type="string", length=2, nullable=true)
     */
    private $novendek_szul_ideje_ho;

    /**
     * @var string $novendek_szul_ideje_nap
     *
     * @ORM\Column(name="novendek_szul_ideje_nap", type="string", length=2, nullable=true)
     */
    private $novendek_szul_ideje_nap;

    /**
     * @var string $gondviselo_neve_szab
     *
     * @ORM\Column(name="gondviselo_neve_szab", type="string", length=255, nullable=true)
     */
    private $gondviselo_neve_szab;

    /**
     * @var string $gondviselo_fogl_szab
     *
     * @ORM\Column(name="gondviselo_fogl_szab", type="string", length=255, nullable=true)
     */
    private $gondviselo_fogl_szab;

    /**
     * @var text $gondviselo_allap_fogl_viszony_irva
     *
     * @ORM\Column(name="gondviselo_allap_fogl_viszony_irva", type="text", nullable=true)
     */
    private $gondviselo_allap_fogl_viszony_irva;

    /**
     * @var string $lakhely_lakcim_utca_szab
     *
     * @ORM\Column(name="lakhely_lakcim_utca_szab", type="string", length=255, nullable=true)
     */
    private $lakhely_lakcim_utca_szab;

    /**
     * @var string $lakhely_lakcim_utca_irva
     *
     * @ORM\Column(name="lakhely_lakcim_utca_irva", type="string", length=255, nullable=true)
     */
    private $lakhely_lakcim_utca_irva;

    /**
     * @var string $hazszam
     *
     * @ORM\Column(name="hazszam", type="string", length=255, nullable=true)
     */
    private $hazszam;

    /**
     * @var string $anyanyelve
     *
     * @ORM\Column(name="anyanyelve", type="string", length=255, nullable=true)
     */
    private $anyanyelve;

    /**
     * @var boolean $vallasa_rk
     *
     * @ORM\Column(name="vallasa_rk", type="boolean", nullable=true)
     */
    private $vallasa_rk;

    /**
     * @var boolean $vallasa_ref
     *
     * @ORM\Column(name="vallasa_ref", type="boolean", nullable=true)
     */
    private $vallasa_ref;

    /**
     * @var boolean $vallasa_ev
     *
     * @ORM\Column(name="vallasa_ev", type="boolean", nullable=true)
     */
    private $vallasa_ev;

    /**
     * @var boolean $vallasa_izr
     *
     * @ORM\Column(name="vallasa_izr", type="boolean", nullable=true)
     */
    private $vallasa_izr;

    /**
     * @var boolean $vallasa_ao
     *
     * @ORM\Column(name="vallasa_ao", type="boolean", nullable=true)
     */
    private $vallasa_ao;

    /**
     * @var boolean $vallasa_c
     *
     * @ORM\Column(name="vallasa_c", type="boolean", nullable=true)
     */
    private $vallasa_c;

    /**
     * @var boolean $osztalya_1
     *
     * @ORM\Column(name="osztalya_1", type="boolean", nullable=true)
     */
    private $osztalya_1;

    /**
     * @var boolean $osztalya_2
     *
     * @ORM\Column(name="osztalya_2", type="boolean", nullable=true)
     */
    private $osztalya_2;

    /**
     * @var boolean $osztalya_3
     *
     * @ORM\Column(name="osztalya_3", type="boolean", nullable=true)
     */
    private $osztalya_3;

    /**
     * @var boolean $osztalya_4
     *
     * @ORM\Column(name="osztalya_4", type="boolean", nullable=true)
     */
    private $osztalya_4;

    /**
     * @var text $elotte
     *
     * @ORM\Column(name="elotte", type="text", nullable=true)
     */
    private $elotte;

    /**
     * @var text $tovabbi_egykoru_adat
     *
     * @ORM\Column(name="tovabbi_egykoru_adat", type="text", nullable=true)
     */
    private $tovabbi_egykoru_adat;

    /**
     * @var text $megjegyzesek
     *
     * @ORM\Column(name="megjegyzesek", type="text", nullable=true)
     */
    private $megjegyzesek;

    /**
     * @var boolean $btlan_forrashely
     *
     * @ORM\Column(name="btlan_forrashely", type="boolean", nullable=true)
     */
    private $btlan_forrashely;

    /**
     * @var boolean $btlan_jelzet
     *
     * @ORM\Column(name="btlan_jelzet", type="boolean", nullable=true)
     */
    private $btlan_jelzet;

    /**
     * @var boolean $btlan_novendek_neve_szab
     *
     * @ORM\Column(name="btlan_novendek_neve_szab", type="boolean", nullable=true)
     */
    private $btlan_novendek_neve_szab;

    /**
     * @var boolean $btlan_novendek_neve_irva
     *
     * @ORM\Column(name="btlan_novendek_neve_irva", type="boolean", nullable=true)
     */
    private $btlan_novendek_neve_irva;

    /**
     * @var boolean $btlan_novendek_szul_helye_szab
     *
     * @ORM\Column(name="btlan_novendek_szul_helye_szab", type="boolean", nullable=true)
     */
    private $btlan_novendek_szul_helye_szab;

    /**
     * @var boolean $btlan_novendek_szul_helye_irva
     *
     * @ORM\Column(name="btlan_novendek_szul_helye_irva", type="boolean", nullable=true)
     */
    private $btlan_novendek_szul_helye_irva;

    /**
     * @var boolean $btlan_novendek_szul_ideje
     *
     * @ORM\Column(name="btlan_novendek_szul_ideje", type="boolean", nullable=true)
     */
    private $btlan_novendek_szul_ideje;

    /**
     * @var boolean $btlan_gondviselo_neve_szab
     *
     * @ORM\Column(name="btlan_gondviselo_neve_szab", type="boolean", nullable=true)
     */
    private $btlan_gondviselo_neve_szab;

    /**
     * @var boolean $btlan_gondviselo_fogl_szab
     *
     * @ORM\Column(name="btlan_gondviselo_fogl_szab", type="boolean", nullable=true)
     */
    private $btlan_gondviselo_fogl_szab;

    /**
     * @var boolean $btlan_gondviselo_allap_fogl_viszony_irva
     *
     * @ORM\Column(name="btlan_gondviselo_allap_fogl_viszony_irva", type="boolean", nullable=true)
     */
    private $btlan_gondviselo_allap_fogl_viszony_irva;

    /**
     * @var boolean $btlan_lakhely_szab
     *
     * @ORM\Column(name="btlan_lakhely_szab", type="boolean", nullable=true)
     */
    private $btlan_lakhely_szab;

    /**
     * @var boolean $btlan_lakhely_irva
     *
     * @ORM\Column(name="btlan_lakhely_irva", type="boolean", nullable=true)
     */
    private $btlan_lakhely_irva;

    /**
     * @var boolean $btlan_hazszam
     *
     * @ORM\Column(name="btlan_hazszam", type="boolean", nullable=true)
     */
    private $btlan_hazszam;

    /**
     * @var boolean $btlan_anyanyelve
     *
     * @ORM\Column(name="btlan_anyanyelve", type="boolean", nullable=true)
     */
    private $btlan_anyanyelve;

    /**
     * @var boolean $btlan_vallasa
     *
     * @ORM\Column(name="btlan_vallasa", type="boolean", nullable=true)
     */
    private $btlan_vallasa;

    /**
     * @var boolean $btlan_osztalya
     *
     * @ORM\Column(name="btlan_osztalya", type="boolean", nullable=true)
     */
    private $btlan_osztalya;

    /**
     * @var boolean $btlan_elotte
     *
     * @ORM\Column(name="btlan_elotte", type="boolean", nullable=true)
     */
    private $btlan_elotte;

    /**
     * @var boolean $btlan_tovabbi_egykoru_adat
     *
     * @ORM\Column(name="btlan_tovabbi_egykoru_adat", type="boolean", nullable=true)
     */
    private $btlan_tovabbi_egykoru_adat;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set forrashely_kot
     *
     * @param string $forrashelyKot
     */
    public function setForrashelyKot($forrashelyKot)
    {
        $this->forrashely_kot = $forrashelyKot;
    }

    /**
     * Get forrashely_kot
     *
     * @return string 
     */
    public function getForrashelyKot()
    {
        return $this->forrashely_kot;
    }

    /**
     * Set forrashely_op
     *
     * @param string $forrashelyOp
     */
    public function setForrashelyOp($forrashelyOp)
    {
        $this->forrashely_op = $forrashelyOp;
    }

    /**
     * Get forrashely_op
     *
     * @return string 
     */
    public function getForrashelyOp()
    {
        return $this->forrashely_op;
    }

    /**
     * Set jelzet_tanev
     *
     * @param string $jelzetTanev
     */
    public function setJelzetTanev($jelzetTanev)
    {
        $this->jelzet_tanev = $jelzetTanev;
    }

    /**
     * Get jelzet_tanev
     *
     * @return string 
     */
    public function getJelzetTanev()
    {
        return $this->jelzet_tanev;
    }

    /**
     * Set jelzet_fsz
     *
     * @param string $jelzetFsz
     */
    public function setJelzetFsz($jelzetFsz)
    {
        $this->jelzet_fsz = $jelzetFsz;
    }

    /**
     * Get jelzet_fsz
     *
     * @return string 
     */
    public function getJelzetFsz()
    {
        return $this->jelzet_fsz;
    }

    /**
     * Set novendek_neve_szab
     *
     * @param string $novendekNeveSzab
     */
    public function setNovendekNeveSzab($novendekNeveSzab)
    {
        $this->novendek_neve_szab = $novendekNeveSzab;
    }

    /**
     * Get novendek_neve_szab
     *
     * @return string 
     */
    public function getNovendekNeveSzab()
    {
        return $this->novendek_neve_szab;
    }

    /**
     * Set novendek_neve_irva
     *
     * @param string $novendekNeveIrva
     */
    public function setNovendekNeveIrva($novendekNeveIrva)
    {
        $this->novendek_neve_irva = $novendekNeveIrva;
    }

    /**
     * Get novendek_neve_irva
     *
     * @return string 
     */
    public function getNovendekNeveIrva()
    {
        return $this->novendek_neve_irva;
    }

    /**
     * Set novendek_szul_helye_szab
     *
     * @param string $novendekSzulHelyeSzab
     */
    public function setNovendekSzulHelyeSzab($novendekSzulHelyeSzab)
    {
        $this->novendek_szul_helye_szab = $novendekSzulHelyeSzab;
    }

    /**
     * Get novendek_szul_helye_szab
     *
     * @return string 
     */
    public function getNovendekSzulHelyeSzab()
    {
        return $this->novendek_szul_helye_szab;
    }

    /**
     * Set novendek_szul_helye_irva
     *
     * @param string $novendekSzulHelyeIrva
     */
    public function setNovendekSzulHelyeIrva($novendekSzulHelyeIrva)
    {
        $this->novendek_szul_helye_irva = $novendekSzulHelyeIrva;
    }

    /**
     * Get novendek_szul_helye_irva
     *
     * @return string 
     */
    public function getNovendekSzulHelyeIrva()
    {
        return $this->novendek_szul_helye_irva;
    }

    /**
     * Set novendek_szul_ideje_ev
     *
     * @param string $novendekSzulIdejeEv
     */
    public function setNovendekSzulIdejeEv($novendekSzulIdejeEv)
    {
        $this->novendek_szul_ideje_ev = $novendekSzulIdejeEv;
    }

    /**
     * Get novendek_szul_ideje_ev
     *
     * @return string 
     */
    public function getNovendekSzulIdejeEv()
    {
        return $this->novendek_szul_ideje_ev;
    }

    /**
     * Set novendek_szul_ideje_ho
     *
     * @param string $novendekSzulIdejeHo
     */
    public function setNovendekSzulIdejeHo($novendekSzulIdejeHo)
    {
        $this->novendek_szul_ideje_ho = $novendekSzulIdejeHo;
    }

    /**
     * Get novendek_szul_ideje_ho
     *
     * @return string 
     */
    public function getNovendekSzulIdejeHo()
    {
        return $this->novendek_szul_ideje_ho;
    }

    /**
     * Set novendek_szul_ideje_nap
     *
     * @param string $novendekSzulIdejeNap
     */
    public function setNovendekSzulIdejeNap($novendekSzulIdejeNap)
    {
        $this->novendek_szul_ideje_nap = $novendekSzulIdejeNap;
    }

    /**
     * Get novendek_szul_ideje_nap
     *
     * @return string 
     */
    public function getNovendekSzulIdejeNap()
    {
        return $this->novendek_szul_ideje_nap;
    }

    /**
     * Set gondviselo_neve_szab
     *
     * @param string $gondviseloNeveSzab
     */
    public function setGondviseloNeveSzab($gondviseloNeveSzab)
    {
        $this->gondviselo_neve_szab = $gondviseloNeveSzab;
    }

    /**
     * Get gondviselo_neve_szab
     *
     * @return string 
     */
    public function getGondviseloNeveSzab()
    {
        return $this->gondviselo_neve_szab;
    }

    /**
     * Set gondviselo_fogl_szab
     *
     * @param string $gondviseloFoglSzab
     */
    public function setGondviseloFoglSzab($gondviseloFoglSzab)
    {
        $this->gondviselo_fogl_szab = $gondviseloFoglSzab;
    }

    /**
     * Get gondviselo_fogl_szab
     *
     * @return string 
     */
    public function getGondviseloFoglSzab()
    {
        return $this->gondviselo_fogl_szab;
    }

    /**
     * Set gondviselo_allap_fogl_viszony_irva
     *
     * @param text $gondviseloAllapFoglViszonyIrva
     */
    public function setGondviseloAllapFoglViszonyIrva($gondviseloAllapFoglViszonyIrva)
    {
        $this->gondviselo_allap_fogl_viszony_irva = $gondviseloAllapFoglViszonyIrva;
    }

    /**
     * Get gondviselo_allap_fogl_viszony_irva
     *
     * @return text 
     */
    public function getGondviseloAllapFoglViszonyIrva()
    {
        return $this->gondviselo_allap_fogl_viszony_irva;
    }

    /**
     * Set lakhely_lakcim_utca_szab
     *
     * @param string $lakhelyLakcimUtcaSzab
     */
    public function setLakhelyLakcimUtcaSzab($lakhelyLakcimUtcaSzab)
    {
        $this->lakhely_lakcim_utca_szab = $lakhelyLakcimUtcaSzab;
    }

    /**
     * Get lakhely_lakcim_utca_szab
     *
     * @return string 
     */
    public function getLakhelyLakcimUtcaSzab()
    {
        return $this->lakhely_lakcim_utca_szab;
    }

    /**
     * Set lakhely_lakcim_utca_irva
     *
     * @param string $lakhelyLakcimUtcaIrva
     */
    public function setLakhelyLakcimUtcaIrva($lakhelyLakcimUtcaIrva)
    {
        $this->lakhely_lakcim_utca_irva = $lakhelyLakcimUtcaIrva;
    }

    /**
     * Get lakhely_lakcim_utca_irva
     *
     * @return string 
     */
    public function getLakhelyLakcimUtcaIrva()
    {
        return $this->lakhely_lakcim_utca_irva;
    }

    /**
     * Set hazszam
     *
     * @param string $hazszam
     */
    public function setHazszam($hazszam)
    {
        $this->hazszam = $hazszam;
    }

    /**
     * Get hazszam
     *
     * @return string 
     */
    public function getHazszam()
    {
        return $this->hazszam;
    }

    /**
     * Set anyanyelve
     *
     * @param string $anyanyelve
     */
    public function setAnyanyelve($anyanyelve)
    {
        $this->anyanyelve = $anyanyelve;
    }

    /**
     * Get anyanyelve
     *
     * @return string 
     */
    public function getAnyanyelve()
    {
        return $this->anyanyelve;
    }

    /**
     * Set vallasa_rk
     *
     * @param boolean $vallasaRk
     */
    public function setVallasaRk($vallasaRk)
    {
        $this->vallasa_rk = $vallasaRk;
    }

    /**
     * Get vallasa_rk
     *
     * @return boolean 
     */
    public function getVallasaRk()
    {
        return $this->vallasa_rk;
    }

    /**
     * Set vallasa_ref
     *
     * @param boolean $vallasaRef
     */
    public function setVallasaRef($vallasaRef)
    {
        $this->vallasa_ref = $vallasaRef;
    }

    /**
     * Get vallasa_ref
     *
     * @return boolean 
     */
    public function getVallasaRef()
    {
        return $this->vallasa_ref;
    }

    /**
     * Set vallasa_ev
     *
     * @param boolean $vallasaEv
     */
    public function setVallasaEv($vallasaEv)
    {
        $this->vallasa_ev = $vallasaEv;
    }

    /**
     * Get vallasa_ev
     *
     * @return boolean 
     */
    public function getVallasaEv()
    {
        return $this->vallasa_ev;
    }

    /**
     * Set vallasa_izr
     *
     * @param boolean $vallasaIzr
     */
    public function setVallasaIzr($vallasaIzr)
    {
        $this->vallasa_izr = $vallasaIzr;
    }

    /**
     * Get vallasa_izr
     *
     * @return boolean 
     */
    public function getVallasaIzr()
    {
        return $this->vallasa_izr;
    }

    /**
     * Set vallasa_ao
     *
     * @param boolean $vallasaAo
     */
    public function setVallasaAo($vallasaAo)
    {
        $this->vallasa_ao = $vallasaAo;
    }

    /**
     * Get vallasa_ao
     *
     * @return boolean 
     */
    public function getVallasaAo()
    {
        return $this->vallasa_ao;
    }

    /**
     * Set vallasa_c
     *
     * @param boolean $vallasaC
     */
    public function setVallasaC($vallasaC)
    {
        $this->vallasa_c = $vallasaC;
    }

    /**
     * Get vallasa_c
     *
     * @return boolean 
     */
    public function getVallasaC()
    {
        return $this->vallasa_c;
    }

    /**
     * Set osztalya_1
     *
     * @param boolean $osztalya1
     */
    public function setOsztalya1($osztalya1)
    {
        $this->osztalya_1 = $osztalya1;
    }

    /**
     * Get osztalya_1
     *
     * @return boolean 
     */
    public function getOsztalya1()
    {
        return $this->osztalya_1;
    }

    /**
     * Set osztalya_2
     *
     * @param boolean $osztalya2
     */
    public function setOsztalya2($osztalya2)
    {
        $this->osztalya_2 = $osztalya2;
    }

    /**
     * Get osztalya_2
     *
     * @return boolean 
     */
    public function getOsztalya2()
    {
        return $this->osztalya_2;
    }

    /**
     * Set osztalya_3
     *
     * @param boolean $osztalya3
     */
    public function setOsztalya3($osztalya3)
    {
        $this->osztalya_3 = $osztalya3;
    }

    /**
     * Get osztalya_3
     *
     * @return boolean 
     */
    public function getOsztalya3()
    {
        return $this->osztalya_3;
    }

    /**
     * Set osztalya_4
     *
     * @param boolean $osztalya4
     */
    public function setOsztalya4($osztalya4)
    {
        $this->osztalya_4 = $osztalya4;
    }

    /**
     * Get osztalya_4
     *
     * @return boolean 
     */
    public function getOsztalya4()
    {
        return $this->osztalya_4;
    }

    /**
     * Set elotte
     *
     * @param text $elotte
     */
    public function setElotte($elotte)
    {
        $this->elotte = $elotte;
    }

    /**
     * Get elotte
     *
     * @return text 
     */
    public function getElotte()
    {
        return $this->elotte;
    }

    /**
     * Set tovabbi_egykoru_adat
     *
     * @param text $tovabbiEgykoruAdat
     */
    public function setTovabbiEgykoruAdat($tovabbiEgykoruAdat)
    {
        $this->tovabbi_egykoru_adat = $tovabbiEgykoruAdat;
    }

    /**
     * Get tovabbi_egykoru_adat
     *
     * @return text 
     */
    public function getTovabbiEgykoruAdat()
    {
        return $this->tovabbi_egykoru_adat;
    }

    /**
     * Set megjegyzesek
     *
     * @param text $megjegyzesek
     */
    public function setMegjegyzesek($megjegyzesek)
    {
        $this->megjegyzesek = $megjegyzesek;
    }

    /**
     * Get megjegyzesek
     *
     * @return text 
     */
    public function getMegjegyzesek()
    {
        return $this->megjegyzesek;
    }

    /**
     * Get Forráshely
     *
     * @return string
     */
    public function getForrashely()
    {
        $str = "";
        if ($this->getForrashelyKot() != "") $str .= $this->getForrashelyKot()." köt.; ";
        if ($this->getForrashelyOp() != "") $str .= $this->getForrashelyOp()." op. ";

        return trim($str);
    }

    /**
     * Get Jelzet
     *
     * @return string
     */
    public function getJelzet()
    {
        return $this->getJelzetTanev().":".$this->getJelzetFsz();
    }

    /**
     * Set btlan_forrashely
     *
     * @param boolean $btlanForrashely
     */
    public function setBtlanForrashely($btlanForrashely)
    {
        $this->btlan_forrashely = $btlanForrashely;
    }

    /**
     * Get btlan_forrashely
     *
     * @return boolean 
     */
    public function getBtlanForrashely()
    {
        return $this->btlan_forrashely;
    }

    /**
     * Set btlan_jelzet
     *
     * @param boolean $btlanJelzet
     */
    public function setBtlanJelzet($btlanJelzet)
    {
        $this->btlan_jelzet = $btlanJelzet;
    }

    /**
     * Get btlan_jelzet
     *
     * @return boolean 
     */
    public function getBtlanJelzet()
    {
        return $this->btlan_jelzet;
    }

    /**
     * Set btlan_novendek_neve_szab
     *
     * @param boolean $btlanNovendekNeveSzab
     */
    public function setBtlanNovendekNeveSzab($btlanNovendekNeveSzab)
    {
        $this->btlan_novendek_neve_szab = $btlanNovendekNeveSzab;
    }

    /**
     * Get btlan_novendek_neve_szab
     *
     * @return boolean 
     */
    public function getBtlanNovendekNeveSzab()
    {
        return $this->btlan_novendek_neve_szab;
    }

    /**
     * Set btlan_novendek_neve_irva
     *
     * @param boolean $btlanNovendekNeveIrva
     */
    public function setBtlanNovendekNeveIrva($btlanNovendekNeveIrva)
    {
        $this->btlan_novendek_neve_irva = $btlanNovendekNeveIrva;
    }

    /**
     * Get btlan_novendek_neve_irva
     *
     * @return boolean 
     */
    public function getBtlanNovendekNeveIrva()
    {
        return $this->btlan_novendek_neve_irva;
    }

    /**
     * Set btlan_novendek_szul_helye_szab
     *
     * @param boolean $btlanNovendekSzulHelyeSzab
     */
    public function setBtlanNovendekSzulHelyeSzab($btlanNovendekSzulHelyeSzab)
    {
        $this->btlan_novendek_szul_helye_szab = $btlanNovendekSzulHelyeSzab;
    }

    /**
     * Get btlan_novendek_szul_helye_szab
     *
     * @return boolean 
     */
    public function getBtlanNovendekSzulHelyeSzab()
    {
        return $this->btlan_novendek_szul_helye_szab;
    }

    /**
     * Set btlan_novendek_szul_helye_irva
     *
     * @param boolean $btlanNovendekSzulHelyeIrva
     */
    public function setBtlanNovendekSzulHelyeIrva($btlanNovendekSzulHelyeIrva)
    {
        $this->btlan_novendek_szul_helye_irva = $btlanNovendekSzulHelyeIrva;
    }

    /**
     * Get btlan_novendek_szul_helye_irva
     *
     * @return boolean 
     */
    public function getBtlanNovendekSzulHelyeIrva()
    {
        return $this->btlan_novendek_szul_helye_irva;
    }

    /**
     * Set btlan_novendek_szul_ideje
     *
     * @param boolean $btlanNovendekSzulIdeje
     */
    public function setBtlanNovendekSzulIdeje($btlanNovendekSzulIdeje)
    {
        $this->btlan_novendek_szul_ideje = $btlanNovendekSzulIdeje;
    }

    /**
     * Get btlan_novendek_szul_ideje
     *
     * @return boolean 
     */
    public function getBtlanNovendekSzulIdeje()
    {
        return $this->btlan_novendek_szul_ideje;
    }

    /**
     * Set btlan_gondviselo_neve_szab
     *
     * @param boolean $btlanGondviseloNeveSzab
     */
    public function setBtlanGondviseloNeveSzab($btlanGondviseloNeveSzab)
    {
        $this->btlan_gondviselo_neve_szab = $btlanGondviseloNeveSzab;
    }

    /**
     * Get btlan_gondviselo_neve_szab
     *
     * @return boolean 
     */
    public function getBtlanGondviseloNeveSzab()
    {
        return $this->btlan_gondviselo_neve_szab;
    }

    /**
     * Set btlan_gondviselo_fogl_szab
     *
     * @param boolean $btlanGondviseloFoglSzab
     */
    public function setBtlanGondviseloFoglSzab($btlanGondviseloFoglSzab)
    {
        $this->btlan_gondviselo_fogl_szab = $btlanGondviseloFoglSzab;
    }

    /**
     * Get btlan_gondviselo_fogl_szab
     *
     * @return boolean 
     */
    public function getBtlanGondviseloFoglSzab()
    {
        return $this->btlan_gondviselo_fogl_szab;
    }

    /**
     * Set btlan_gondviselo_allap_fogl_viszony_irva
     *
     * @param boolean $btlanGondviseloAllapFoglViszonyIrva
     */
    public function setBtlanGondviseloAllapFoglViszonyIrva($btlanGondviseloAllapFoglViszonyIrva)
    {
        $this->btlan_gondviselo_allap_fogl_viszony_irva = $btlanGondviseloAllapFoglViszonyIrva;
    }

    /**
     * Get btlan_gondviselo_allap_fogl_viszony_irva
     *
     * @return boolean 
     */
    public function getBtlanGondviseloAllapFoglViszonyIrva()
    {
        return $this->btlan_gondviselo_allap_fogl_viszony_irva;
    }

    /**
     * Set btlan_lakhely_szab
     *
     * @param boolean $btlanLakhelySzab
     */
    public function setBtlanLakhelySzab($btlanLakhelySzab)
    {
        $this->btlan_lakhely_szab = $btlanLakhelySzab;
    }

    /**
     * Get btlan_lakhely_szab
     *
     * @return boolean 
     */
    public function getBtlanLakhelySzab()
    {
        return $this->btlan_lakhely_szab;
    }

    /**
     * Set btlan_lakhely_irva
     *
     * @param boolean $btlanLakhelyIrva
     */
    public function setBtlanLakhelyIrva($btlanLakhelyIrva)
    {
        $this->btlan_lakhely_irva = $btlanLakhelyIrva;
    }

    /**
     * Get btlan_lakhely_irva
     *
     * @return boolean 
     */
    public function getBtlanLakhelyIrva()
    {
        return $this->btlan_lakhely_irva;
    }

    /**
     * Set btlan_hazszam
     *
     * @param boolean $btlanHazszam
     */
    public function setBtlanHazszam($btlanHazszam)
    {
        $this->btlan_hazszam = $btlanHazszam;
    }

    /**
     * Get btlan_hazszam
     *
     * @return boolean 
     */
    public function getBtlanHazszam()
    {
        return $this->btlan_hazszam;
    }

    /**
     * Set btlan_anyanyelve
     *
     * @param boolean $btlanAnyanyelve
     */
    public function setBtlanAnyanyelve($btlanAnyanyelve)
    {
        $this->btlan_anyanyelve = $btlanAnyanyelve;
    }

    /**
     * Get btlan_anyanyelve
     *
     * @return boolean 
     */
    public function getBtlanAnyanyelve()
    {
        return $this->btlan_anyanyelve;
    }

    /**
     * Set btlan_vallasa
     *
     * @param boolean $btlanVallasa
     */
    public function setBtlanVallasa($btlanVallasa)
    {
        $this->btlan_vallasa = $btlanVallasa;
    }

    /**
     * Get btlan_vallasa
     *
     * @return boolean 
     */
    public function getBtlanVallasa()
    {
        return $this->btlan_vallasa;
    }

    /**
     * Set btlan_osztalya
     *
     * @param boolean $btlanOsztalya
     */
    public function setBtlanOsztalya($btlanOsztalya)
    {
        $this->btlan_osztalya = $btlanOsztalya;
    }

    /**
     * Get btlan_osztalya
     *
     * @return boolean 
     */
    public function getBtlanOsztalya()
    {
        return $this->btlan_osztalya;
    }

    /**
     * Set btlan_elotte
     *
     * @param boolean $btlanElotte
     */
    public function setBtlanElotte($btlanElotte)
    {
        $this->btlan_elotte = $btlanElotte;
    }

    /**
     * Get btlan_elotte
     *
     * @return boolean 
     */
    public function getBtlanElotte()
    {
        return $this->btlan_elotte;
    }

    /**
     * Set btlan_tovabbi_egykoru_adat
     *
     * @param boolean $btlanTovabbiEgykoruAdat
     */
    public function setBtlanTovabbiEgykoruAdat($btlanTovabbiEgykoruAdat)
    {
        $this->btlan_tovabbi_egykoru_adat = $btlanTovabbiEgykoruAdat;
    }

    /**
     * Get btlan_tovabbi_egykoru_adat
     *
     * @return boolean 
     */
    public function getBtlanTovabbiEgykoruAdat()
    {
        return $this->btlan_tovabbi_egykoru_adat;
    }

    /**
     * Get typed characters count
     *
     * @return int
     */
    public function getCharactersCount()
    {
        $count = 0;
        $count += mb_strlen($this->getAnyanyelve(), 'utf8');
        $count += mb_strlen($this->getElotte(), 'utf8');
        $count += mb_strlen($this->getForrashelyKot(), 'utf8');
        $count += mb_strlen($this->getForrashelyOp(), 'utf8');
        $count += mb_strlen($this->getGondviseloAllapFoglViszonyIrva(), 'utf8');
        $count += mb_strlen($this->getGondviseloFoglSzab(), 'utf8');
        $count += mb_strlen($this->getGondviseloNeveSzab(), 'utf8');
        $count += mb_strlen($this->getHazszam(), 'utf8');
        $count += mb_strlen($this->getJelzetFsz(), 'utf8');
        $count += mb_strlen($this->getJelzetTanev(), 'utf8');
        $count += mb_strlen($this->getLakhelyLakcimUtcaIrva(), 'utf8');
        $count += mb_strlen($this->getLakhelyLakcimUtcaSzab(), 'utf8');
        $count += mb_strlen($this->getMegjegyzesek(), 'utf8');
        $count += mb_strlen($this->getNovendekNeveIrva(), 'utf8');
        $count += mb_strlen($this->getNovendekNeveSzab(), 'utf8');
        $count += mb_strlen($this->getNovendekSzulHelyeIrva(), 'utf8');
        $count += mb_strlen($this->getNovendekSzulHelyeSzab(), 'utf8');
        $count += mb_strlen($this->getNovendekSzulIdejeEv(), 'utf8');
        $count += mb_strlen($this->getNovendekSzulIdejeHo(), 'utf8');
        $count += mb_strlen($this->getNovendekSzulIdejeNap(), 'utf8');
        $count += mb_strlen($this->getTovabbiEgykoruAdat(), 'utf8');

        return $count;
    }
}