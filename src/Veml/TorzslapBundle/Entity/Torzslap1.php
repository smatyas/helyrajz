<?php

namespace Veml\TorzslapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Veml\TorzslapBundle\Entity\Torzslap1
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Torzslap1
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
     * @var string $sor_kot
     *
     * @ORM\Column(name="sor_kot", type="string", length=255, nullable=true)
     */
    private $sor_kot;

    /**
     * @var integer $lap
     *
     * @ORM\Column(name="lap", type="integer", nullable=true)
     */
    private $lap;

    /**
     * @var integer $oldal
     *
     * @ORM\Column(name="oldal", type="integer", nullable=true)
     */
    private $oldal;

    /**
     * @var integer $oszlop
     *
     * @ORM\Column(name="oszlop", type="integer", nullable=true)
     */
    private $oszlop;

    /**
     * @var integer $hasab
     *
     * @ORM\Column(name="hasab", type="integer", nullable=true)
     */
    private $hasab;

    /**
     * @var string $ev
     *
     * @ORM\Column(name="ev", type="string", length=255, nullable=true)
     */
    private $ev;

    /**
     * @var string $folyoszam
     *
     * @ORM\Column(name="folyoszam", type="string", length=255, nullable=true)
     */
    private $folyoszam;

    /**
     * @var string $utca_telepules_szab
     *
     * @ORM\Column(name="utca_telepules_szab", type="string", length=255, nullable=true)
     */
    private $utca_telepules_szab;

    /**
     * @var string $utca_telepules_irva
     *
     * @ORM\Column(name="utca_telepules_irva", type="string", length=255, nullable=true)
     */
    private $utca_telepules_irva;

    /**
     * @var string $hazszam
     *
     * @ORM\Column(name="hazszam", type="string", length=255, nullable=true)
     */
    private $hazszam;

    /**
     * @var string $haz_neve
     *
     * @ORM\Column(name="haz_neve", type="string", length=255, nullable=true)
     */
    private $haz_neve;

    /**
     * @var string $megholt_neve_szab
     *
     * @ORM\Column(name="megholt_neve_szab", type="string", length=255, nullable=true)
     */
    private $megholt_neve_szab;

    /**
     * @var string $megholt_neve_irva
     *
     * @ORM\Column(name="megholt_neve_irva", type="string", length=255, nullable=true)
     */
    private $megholt_neve_irva;

    /**
     * @var boolean $neme_ffi
     *
     * @ORM\Column(name="neme_ffi", type="boolean", nullable=true)
     */
    private $neme_ffi;

    /**
     * @var boolean $neme_no
     *
     * @ORM\Column(name="neme_no", type="boolean", nullable=true)
     */
    private $neme_no;

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
     * @var smallint $kora_ev
     *
     * @ORM\Column(name="kora_ev", type="smallint", nullable=true)
     */
    private $kora_ev;

    /**
     * @var smallint $kora_ho
     *
     * @ORM\Column(name="kora_ho", type="smallint", nullable=true)
     */
    private $kora_ho;

    /**
     * @var smallint $kora_het
     *
     * @ORM\Column(name="kora_het", type="smallint", nullable=true)
     */
    private $kora_het;

    /**
     * @var smallint $kora_nap
     *
     * @ORM\Column(name="kora_nap", type="smallint", nullable=true)
     */
    private $kora_nap;

    /**
     * @var smallint $kora_ora
     *
     * @ORM\Column(name="kora_ora", type="smallint", nullable=true)
     */
    private $kora_ora;

    /**
     * @var boolean $halva_szuletett
     *
     * @ORM\Column(name="halva_szuletett", type="boolean", nullable=true)
     */
    private $halva_szuletett;

    /**
     * @var string $foglalkozasa_szab
     *
     * @ORM\Column(name="foglalkozasa_szab", type="string", length=255, nullable=true)
     */
    private $foglalkozasa_szab;

    /**
     * @var text $allap_fogl_viszony_irva
     *
     * @ORM\Column(name="allap_fogl_viszony_irva", type="text", nullable=true)
     */
    private $allap_fogl_viszony_irva;

    /**
     * @var boolean $cs_all_notlen_hajadon
     *
     * @ORM\Column(name="cs_all_notlen_hajadon", type="boolean", nullable=true)
     */
    private $cs_all_notlen_hajadon;

    /**
     * @var boolean $cs_all_hazas
     *
     * @ORM\Column(name="cs_all_hazas", type="boolean", nullable=true)
     */
    private $cs_all_hazas;

    /**
     * @var boolean $cs_all_ozvegy
     *
     * @ORM\Column(name="cs_all_ozvegy", type="boolean", nullable=true)
     */
    private $cs_all_ozvegy;

    /**
     * @var boolean $cs_all_elvalt
     *
     * @ORM\Column(name="cs_all_elvalt", type="boolean", nullable=true)
     */
    private $cs_all_elvalt;

    /**
     * @var text $maradt_kk_es_vagyon
     *
     * @ORM\Column(name="maradt_kk_es_vagyon", type="text", nullable=true)
     */
    private $maradt_kk_es_vagyon;

    /**
     * @var string $halal_ideje_ev
     *
     * @ORM\Column(name="halal_ideje_ev", type="string", length=4, nullable=true)
     */
    private $halal_ideje_ev;

    /**
     * @var string $halal_ideje_ho
     *
     * @ORM\Column(name="halal_ideje_ho", type="string", length=2, nullable=true)
     */
    private $halal_ideje_ho;

    /**
     * @var string $halal_ideje_nap
     *
     * @ORM\Column(name="halal_ideje_nap", type="string", length=2, nullable=true)
     */
    private $halal_ideje_nap;

    /**
     * @var string $halal_oka_szab
     *
     * @ORM\Column(name="halal_oka_szab", type="string", length=255, nullable=true)
     */
    private $halal_oka_szab;

    /**
     * @var string $halal_oka_irva
     *
     * @ORM\Column(name="halal_oka_irva", type="string", length=255, nullable=true)
     */
    private $halal_oka_irva;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sor_kot
     *
     * @param string $sorKot
     */
    public function setSorKot($sorKot)
    {
        $this->sor_kot = $sorKot;
    }

    /**
     * Get sor_kot
     *
     * @return string 
     */
    public function getSorKot()
    {
        return $this->sor_kot;
    }

    /**
     * Set lap
     *
     * @param integer $lap
     */
    public function setLap($lap)
    {
        $this->lap = $lap;
    }

    /**
     * Get lap
     *
     * @return integer 
     */
    public function getLap()
    {
        return $this->lap;
    }

    /**
     * Set oldal
     *
     * @param integer $oldal
     */
    public function setOldal($oldal)
    {
        $this->oldal = $oldal;
    }

    /**
     * Get oldal
     *
     * @return integer 
     */
    public function getOldal()
    {
        return $this->oldal;
    }

    /**
     * Set oszlop
     *
     * @param integer $oszlop
     */
    public function setOszlop($oszlop)
    {
        $this->oszlop = $oszlop;
    }

    /**
     * Get oszlop
     *
     * @return integer 
     */
    public function getOszlop()
    {
        return $this->oszlop;
    }

    /**
     * Set hasab
     *
     * @param integer $hasab
     */
    public function setHasab($hasab)
    {
        $this->hasab = $hasab;
    }

    /**
     * Get hasab
     *
     * @return integer 
     */
    public function getHasab()
    {
        return $this->hasab;
    }

    /**
     * Set ev
     *
     * @param string $ev
     */
    public function setEv($ev)
    {
        $this->ev = $ev;
    }

    /**
     * Get ev
     *
     * @return string 
     */
    public function getEv()
    {
        return $this->ev;
    }

    /**
     * Set folyoszam
     *
     * @param string $folyoszam
     */
    public function setFolyoszam($folyoszam)
    {
        $this->folyoszam = $folyoszam;
    }

    /**
     * Get folyoszam
     *
     * @return string 
     */
    public function getFolyoszam()
    {
        return $this->folyoszam;
    }

    /**
     * Set utca_telepules_szab
     *
     * @param string $utcaTelepulesSzab
     */
    public function setUtcaTelepulesSzab($utcaTelepulesSzab)
    {
        $this->utca_telepules_szab = $utcaTelepulesSzab;
    }

    /**
     * Get utca_telepules_szab
     *
     * @return string 
     */
    public function getUtcaTelepulesSzab()
    {
        return $this->utca_telepules_szab;
    }

    /**
     * Set utca_telepules_irva
     *
     * @param string $utcaTelepulesIrva
     */
    public function setUtcaTelepulesIrva($utcaTelepulesIrva)
    {
        $this->utca_telepules_irva = $utcaTelepulesIrva;
    }

    /**
     * Get utca_telepules_irva
     *
     * @return string 
     */
    public function getUtcaTelepulesIrva()
    {
        return $this->utca_telepules_irva;
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
     * Set haz_neve
     *
     * @param string $hazNeve
     */
    public function setHazNeve($hazNeve)
    {
        $this->haz_neve = $hazNeve;
    }

    /**
     * Get haz_neve
     *
     * @return string 
     */
    public function getHazNeve()
    {
        return $this->haz_neve;
    }

    /**
     * Set megholt_neve_szab
     *
     * @param string $megholtNeveSzab
     */
    public function setMegholtNeveSzab($megholtNeveSzab)
    {
        $this->megholt_neve_szab = $megholtNeveSzab;
    }

    /**
     * Get megholt_neve_szab
     *
     * @return string 
     */
    public function getMegholtNeveSzab()
    {
        return $this->megholt_neve_szab;
    }

    /**
     * Set megholt_neve_irva
     *
     * @param string $megholtNeveIrva
     */
    public function setMegholtNeveIrva($megholtNeveIrva)
    {
        $this->megholt_neve_irva = $megholtNeveIrva;
    }

    /**
     * Get megholt_neve_irva
     *
     * @return string 
     */
    public function getMegholtNeveIrva()
    {
        return $this->megholt_neve_irva;
    }

    /**
     * Set neme_ffi
     *
     * @param boolean $nemeFfi
     */
    public function setNemeFfi($nemeFfi)
    {
        $this->neme_ffi = $nemeFfi;
    }

    /**
     * Get neme_ffi
     *
     * @return boolean 
     */
    public function getNemeFfi()
    {
        return $this->neme_ffi;
    }

    /**
     * Set neme_no
     *
     * @param boolean $nemeNo
     */
    public function setNemeNo($nemeNo)
    {
        $this->neme_no = $nemeNo;
    }

    /**
     * Get neme_no
     *
     * @return boolean 
     */
    public function getNemeNo()
    {
        return $this->neme_no;
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
     * Set kora_ev
     *
     * @param smallint $koraEv
     */
    public function setKoraEv($koraEv)
    {
        $this->kora_ev = $koraEv;
    }

    /**
     * Get kora_ev
     *
     * @return smallint 
     */
    public function getKoraEv()
    {
        return $this->kora_ev;
    }

    /**
     * Set kora_ho
     *
     * @param smallint $koraHo
     */
    public function setKoraHo($koraHo)
    {
        $this->kora_ho = $koraHo;
    }

    /**
     * Get kora_ho
     *
     * @return smallint 
     */
    public function getKoraHo()
    {
        return $this->kora_ho;
    }

    /**
     * Set kora_het
     *
     * @param smallint $koraHet
     */
    public function setKoraHet($koraHet)
    {
        $this->kora_het = $koraHet;
    }

    /**
     * Get kora_het
     *
     * @return smallint 
     */
    public function getKoraHet()
    {
        return $this->kora_het;
    }

    /**
     * Set kora_nap
     *
     * @param smallint $koraNap
     */
    public function setKoraNap($koraNap)
    {
        $this->kora_nap = $koraNap;
    }

    /**
     * Get kora_nap
     *
     * @return smallint 
     */
    public function getKoraNap()
    {
        return $this->kora_nap;
    }

    /**
     * Set kora_ora
     *
     * @param smallint $koraOra
     */
    public function setKoraOra($koraOra)
    {
        $this->kora_ora = $koraOra;
    }

    /**
     * Get kora_ora
     *
     * @return smallint 
     */
    public function getKoraOra()
    {
        return $this->kora_ora;
    }

    /**
     * Set halva_szuletett
     *
     * @param boolean $halvaSzuletett
     */
    public function setHalvaSzuletett($halvaSzuletett)
    {
        $this->halva_szuletett = $halvaSzuletett;
    }

    /**
     * Get halva_szuletett
     *
     * @return boolean 
     */
    public function getHalvaSzuletett()
    {
        return $this->halva_szuletett;
    }

    /**
     * Set foglalkozasa_szab
     *
     * @param string $foglalkozasaSzab
     */
    public function setFoglalkozasaSzab($foglalkozasaSzab)
    {
        $this->foglalkozasa_szab = $foglalkozasaSzab;
    }

    /**
     * Get foglalkozasa_szab
     *
     * @return string 
     */
    public function getFoglalkozasaSzab()
    {
        return $this->foglalkozasa_szab;
    }

    /**
     * Set allap_fogl_viszony_irva
     *
     * @param text $allapFoglViszonyIrva
     */
    public function setAllapFoglViszonyIrva($allapFoglViszonyIrva)
    {
        $this->allap_fogl_viszony_irva = $allapFoglViszonyIrva;
    }

    /**
     * Get allap_fogl_viszony_irva
     *
     * @return text 
     */
    public function getAllapFoglViszonyIrva()
    {
        return $this->allap_fogl_viszony_irva;
    }

    /**
     * Set cs_all_notlen_hajadon
     *
     * @param boolean $csAllNotlenHajadon
     */
    public function setCsAllNotlenHajadon($csAllNotlenHajadon)
    {
        $this->cs_all_notlen_hajadon = $csAllNotlenHajadon;
    }

    /**
     * Get cs_all_notlen_hajadon
     *
     * @return boolean 
     */
    public function getCsAllNotlenHajadon()
    {
        return $this->cs_all_notlen_hajadon;
    }

    /**
     * Set cs_all_hazas
     *
     * @param boolean $csAllHazas
     */
    public function setCsAllHazas($csAllHazas)
    {
        $this->cs_all_hazas = $csAllHazas;
    }

    /**
     * Get cs_all_hazas
     *
     * @return boolean 
     */
    public function getCsAllHazas()
    {
        return $this->cs_all_hazas;
    }

    /**
     * Set cs_all_ozvegy
     *
     * @param boolean $csAllOzvegy
     */
    public function setCsAllOzvegy($csAllOzvegy)
    {
        $this->cs_all_ozvegy = $csAllOzvegy;
    }

    /**
     * Get cs_all_ozvegy
     *
     * @return boolean 
     */
    public function getCsAllOzvegy()
    {
        return $this->cs_all_ozvegy;
    }

    /**
     * Set cs_all_elvalt
     *
     * @param boolean $csAllElvalt
     */
    public function setCsAllElvalt($csAllElvalt)
    {
        $this->cs_all_elvalt = $csAllElvalt;
    }

    /**
     * Get cs_all_elvalt
     *
     * @return boolean 
     */
    public function getCsAllElvalt()
    {
        return $this->cs_all_elvalt;
    }

    /**
     * Set maradt_kk_es_vagyon
     *
     * @param text $maradtKkEsVagyon
     */
    public function setMaradtKkEsVagyon($maradtKkEsVagyon)
    {
        $this->maradt_kk_es_vagyon = $maradtKkEsVagyon;
    }

    /**
     * Get maradt_kk_es_vagyon
     *
     * @return text 
     */
    public function getMaradtKkEsVagyon()
    {
        return $this->maradt_kk_es_vagyon;
    }

    /**
     * Set halal_ideje_ev
     *
     * @param string $halalIdejeEv
     */
    public function setHalalIdejeEv($halalIdejeEv)
    {
        $this->halal_ideje_ev = $halalIdejeEv;
    }

    /**
     * Get halal_ideje_ev
     *
     * @return string 
     */
    public function getHalalIdejeEv()
    {
        return $this->halal_ideje_ev;
    }

    /**
     * Set halal_ideje_ho
     *
     * @param string $halalIdejeHo
     */
    public function setHalalIdejeHo($halalIdejeHo)
    {
        $this->halal_ideje_ho = $halalIdejeHo;
    }

    /**
     * Get halal_ideje_ho
     *
     * @return string 
     */
    public function getHalalIdejeHo()
    {
        return $this->halal_ideje_ho;
    }

    /**
     * Set halal_ideje_nap
     *
     * @param string $halalIdejeNap
     */
    public function setHalalIdejeNap($halalIdejeNap)
    {
        $this->halal_ideje_nap = $halalIdejeNap;
    }

    /**
     * Get halal_ideje_nap
     *
     * @return string 
     */
    public function getHalalIdejeNap()
    {
        return $this->halal_ideje_nap;
    }

    /**
     * Set halal_oka_szab
     *
     * @param string $halalOkaSzab
     */
    public function setHalalOkaSzab($halalOkaSzab)
    {
        $this->halal_oka_szab = $halalOkaSzab;
    }

    /**
     * Get halal_oka_szab
     *
     * @return string 
     */
    public function getHalalOkaSzab()
    {
        return $this->halal_oka_szab;
    }

    /**
     * Set halal_oka_irva
     *
     * @param string $halalOkaIrva
     */
    public function setHalalOkaIrva($halalOkaIrva)
    {
        $this->halal_oka_irva = $halalOkaIrva;
    }

    /**
     * Get halal_oka_irva
     *
     * @return string 
     */
    public function getHalalOkaIrva()
    {
        return $this->halal_oka_irva;
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
}