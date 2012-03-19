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
     * @var string $halal_korulmenyei
     *
     * @ORM\Column(name="halal_korulmenyei", type="string", length=255, nullable=true)
     */
    private $halal_korulmenyei;

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
     * @var boolean $btlan_u_t_szab
     *
     * @ORM\Column(name="btlan_u_t_szab", type="boolean", nullable=true)
     */
    private $btlan_u_t_szab;

    /**
     * @var boolean $btlan_u_t_irva
     *
     * @ORM\Column(name="btlan_u_t_irva", type="boolean", nullable=true)
     */
    private $btlan_u_t_irva;

    /**
     * @var boolean $btlan_hazszam
     *
     * @ORM\Column(name="btlan_hazszam", type="boolean", nullable=true)
     */
    private $btlan_hazszam;

    /**
     * @var boolean $btlan_megholt_neve_szab
     *
     * @ORM\Column(name="btlan_megholt_neve_szab", type="boolean", nullable=true)
     */
    private $btlan_megholt_neve_szab;

    /**
     * @var boolean $btlan_megholt_neve_irva
     *
     * @ORM\Column(name="btlan_megholt_neve_irva", type="boolean", nullable=true)
     */
    private $btlan_megholt_neve_irva;

    /**
     * @var boolean $btlan_megholt_neme
     *
     * @ORM\Column(name="btlan_megholt_neme", type="boolean", nullable=true)
     */
    private $btlan_megholt_neme;

    /**
     * @var boolean $btlan_vallasa
     *
     * @ORM\Column(name="btlan_vallasa", type="boolean", nullable=true)
     */
    private $btlan_vallasa;

    /**
     * @var boolean $btlan_kora
     *
     * @ORM\Column(name="btlan_kora", type="boolean", nullable=true)
     */
    private $btlan_kora;

    /**
     * @var boolean $btlan_halva_szuletett
     *
     * @ORM\Column(name="btlan_halva_szuletett", type="boolean", nullable=true)
     */
    private $btlan_halva_szuletett;

    /**
     * @var boolean $btlan_halal_korulmenyei
     *
     * @ORM\Column(name="btlan_halal_korulmenyei", type="boolean", nullable=true)
     */
    private $btlan_halal_korulmenyei;

    /**
     * @var boolean $btlan_fogl_szab
     *
     * @ORM\Column(name="btlan_fogl_szab", type="boolean", nullable=true)
     */
    private $btlan_fogl_szab;

    /**
     * @var boolean $btlan_allap_fogl_viszony_irva
     *
     * @ORM\Column(name="btlan_allap_fogl_viszony_irva", type="boolean", nullable=true)
     */
    private $btlan_allap_fogl_viszony_irva;

    /**
     * @var boolean $btlan_cs_all
     *
     * @ORM\Column(name="btlan_cs_all", type="boolean", nullable=true)
     */
    private $btlan_cs_all;

    /**
     * @var boolean $btlan_maradt_kk_es_vagyon
     *
     * @ORM\Column(name="btlan_maradt_kk_es_vagyon", type="boolean", nullable=true)
     */
    private $btlan_maradt_kk_es_vagyon;

    /**
     * @var boolean $btlan_halal_ideje
     *
     * @ORM\Column(name="btlan_halal_ideje", type="boolean", nullable=true)
     */
    private $btlan_halal_ideje;

    /**
     * @var boolean $btlan_halal_oka_szab
     *
     * @ORM\Column(name="btlan_halal_oka_szab", type="boolean", nullable=true)
     */
    private $btlan_halal_oka_szab;

    /**
     * @var boolean $btlan_halal_oka_irva
     *
     * @ORM\Column(name="btlan_halal_oka_irva", type="boolean", nullable=true)
     */
    private $btlan_halal_oka_irva;

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

    /**
     * Get Jelzet
     *
     * @return string
     */
    public function getJelzet()
    {
        return $this->getEv().":".$this->getFolyoszam();
    }

    /**
     * Get Forráshely
     *
     * @return string
     */
    public function getForrashely()
    {
        $str = "";
        if ($this->getSorKot() != "") $str .= $this->getSorKot()." sor., köt.; ";
        if ($this->getLap() != "") $str .= $this->getLap()." lap ";
        if ($this->getOldal() != "") $str .= $this->getOldal()." old. ";
        if ($this->getOszlop() != "") $str .= $this->getOszlop()." op. ";
        if ($this->getHasab() != "") $str .= $this->getHasab()." hb.";

        return trim($str);
    }

    /**
     * Set halal_korulmenyei
     *
     * @param string $halalKorulmenyei
     */
    public function setHalalKorulmenyei($halalKorulmenyei)
    {
        $this->halal_korulmenyei = $halalKorulmenyei;
    }

    /**
     * Get halal_korulmenyei
     *
     * @return string 
     */
    public function getHalalKorulmenyei()
    {
        return $this->halal_korulmenyei;
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
     * Set btlan_u_t_szab
     *
     * @param boolean $btlanUTSzab
     */
    public function setBtlanUTSzab($btlanUTSzab)
    {
        $this->btlan_u_t_szab = $btlanUTSzab;
    }

    /**
     * Get btlan_u_t_szab
     *
     * @return boolean 
     */
    public function getBtlanUTSzab()
    {
        return $this->btlan_u_t_szab;
    }

    /**
     * Set btlan_u_t_irva
     *
     * @param boolean $btlanUTIrva
     */
    public function setBtlanUTIrva($btlanUTIrva)
    {
        $this->btlan_u_t_irva = $btlanUTIrva;
    }

    /**
     * Get btlan_u_t_irva
     *
     * @return boolean 
     */
    public function getBtlanUTIrva()
    {
        return $this->btlan_u_t_irva;
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
     * Set btlan_megholt_neve_szab
     *
     * @param boolean $btlanMegholtNeveSzab
     */
    public function setBtlanMegholtNeveSzab($btlanMegholtNeveSzab)
    {
        $this->btlan_megholt_neve_szab = $btlanMegholtNeveSzab;
    }

    /**
     * Get btlan_megholt_neve_szab
     *
     * @return boolean 
     */
    public function getBtlanMegholtNeveSzab()
    {
        return $this->btlan_megholt_neve_szab;
    }

    /**
     * Set btlan_megholt_neve_irva
     *
     * @param boolean $btlanMegholtNeveIrva
     */
    public function setBtlanMegholtNeveIrva($btlanMegholtNeveIrva)
    {
        $this->btlan_megholt_neve_irva = $btlanMegholtNeveIrva;
    }

    /**
     * Get btlan_megholt_neve_irva
     *
     * @return boolean 
     */
    public function getBtlanMegholtNeveIrva()
    {
        return $this->btlan_megholt_neve_irva;
    }

    /**
     * Set btlan_megholt_neme
     *
     * @param boolean $btlanMegholtNeme
     */
    public function setBtlanMegholtNeme($btlanMegholtNeme)
    {
        $this->btlan_megholt_neme = $btlanMegholtNeme;
    }

    /**
     * Get btlan_megholt_neme
     *
     * @return boolean 
     */
    public function getBtlanMegholtNeme()
    {
        return $this->btlan_megholt_neme;
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
     * Set btlan_kora
     *
     * @param boolean $btlanKora
     */
    public function setBtlanKora($btlanKora)
    {
        $this->btlan_kora = $btlanKora;
    }

    /**
     * Get btlan_kora
     *
     * @return boolean 
     */
    public function getBtlanKora()
    {
        return $this->btlan_kora;
    }

    /**
     * Set btlan_halva_szuletett
     *
     * @param boolean $btlanHalvaSzuletett
     */
    public function setBtlanHalvaSzuletett($btlanHalvaSzuletett)
    {
        $this->btlan_halva_szuletett = $btlanHalvaSzuletett;
    }

    /**
     * Get btlan_halva_szuletett
     *
     * @return boolean 
     */
    public function getBtlanHalvaSzuletett()
    {
        return $this->btlan_halva_szuletett;
    }

    /**
     * Set btlan_halal_korulmenyei
     *
     * @param boolean $btlanHalalKorulmenyei
     */
    public function setBtlanHalalKorulmenyei($btlanHalalKorulmenyei)
    {
        $this->btlan_halal_korulmenyei = $btlanHalalKorulmenyei;
    }

    /**
     * Get btlan_halal_korulmenyei
     *
     * @return boolean 
     */
    public function getBtlanHalalKorulmenyei()
    {
        return $this->btlan_halal_korulmenyei;
    }

    /**
     * Set btlan_fogl_szab
     *
     * @param boolean $btlanFoglSzab
     */
    public function setBtlanFoglSzab($btlanFoglSzab)
    {
        $this->btlan_fogl_szab = $btlanFoglSzab;
    }

    /**
     * Get btlan_fogl_szab
     *
     * @return boolean 
     */
    public function getBtlanFoglSzab()
    {
        return $this->btlan_fogl_szab;
    }

    /**
     * Set btlan_allap_fogl_viszony_irva
     *
     * @param boolean $btlanAllapFoglViszonyIrva
     */
    public function setBtlanAllapFoglViszonyIrva($btlanAllapFoglViszonyIrva)
    {
        $this->btlan_allap_fogl_viszony_irva = $btlanAllapFoglViszonyIrva;
    }

    /**
     * Get btlan_allap_fogl_viszony_irva
     *
     * @return boolean 
     */
    public function getBtlanAllapFoglViszonyIrva()
    {
        return $this->btlan_allap_fogl_viszony_irva;
    }

    /**
     * Set btlan_cs_all
     *
     * @param boolean $btlanCsAll
     */
    public function setBtlanCsAll($btlanCsAll)
    {
        $this->btlan_cs_all = $btlanCsAll;
    }

    /**
     * Get btlan_cs_all
     *
     * @return boolean 
     */
    public function getBtlanCsAll()
    {
        return $this->btlan_cs_all;
    }

    /**
     * Set btlan_maradt_kk_es_vagyon
     *
     * @param boolean $btlanMaradtKkEsVagyon
     */
    public function setBtlanMaradtKkEsVagyon($btlanMaradtKkEsVagyon)
    {
        $this->btlan_maradt_kk_es_vagyon = $btlanMaradtKkEsVagyon;
    }

    /**
     * Get btlan_maradt_kk_es_vagyon
     *
     * @return boolean 
     */
    public function getBtlanMaradtKkEsVagyon()
    {
        return $this->btlan_maradt_kk_es_vagyon;
    }

    /**
     * Set btlan_halal_ideje
     *
     * @param boolean $btlanHalalIdeje
     */
    public function setBtlanHalalIdeje($btlanHalalIdeje)
    {
        $this->btlan_halal_ideje = $btlanHalalIdeje;
    }

    /**
     * Get btlan_halal_ideje
     *
     * @return boolean 
     */
    public function getBtlanHalalIdeje()
    {
        return $this->btlan_halal_ideje;
    }

    /**
     * Set btlan_halal_oka_szab
     *
     * @param boolean $btlanHalalOkaSzab
     */
    public function setBtlanHalalOkaSzab($btlanHalalOkaSzab)
    {
        $this->btlan_halal_oka_szab = $btlanHalalOkaSzab;
    }

    /**
     * Get btlan_halal_oka_szab
     *
     * @return boolean 
     */
    public function getBtlanHalalOkaSzab()
    {
        return $this->btlan_halal_oka_szab;
    }

    /**
     * Set btlan_halal_oka_irva
     *
     * @param boolean $btlanHalalOkaIrva
     */
    public function setBtlanHalalOkaIrva($btlanHalalOkaIrva)
    {
        $this->btlan_halal_oka_irva = $btlanHalalOkaIrva;
    }

    /**
     * Get btlan_halal_oka_irva
     *
     * @return boolean 
     */
    public function getBtlanHalalOkaIrva()
    {
        return $this->btlan_halal_oka_irva;
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
}