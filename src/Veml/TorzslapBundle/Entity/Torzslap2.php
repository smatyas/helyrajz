<?php

namespace Veml\TorzslapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Veml\TorzslapBundle\Entity\Torzslap2
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Veml\TorzslapBundle\Entity\Torzslap2Repository")
 */
class Torzslap2
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
     * @var string $forrashely_felek
     *
     * @ORM\Column(name="forrashely_felek", type="string", length=255, nullable=true)
     */
    private $forrashely_felek;

    /**
     * @var string $forrashely_akv_neme
     *
     * @ORM\Column(name="forrashely_akv_neme", type="string", length=255, nullable=true)
     */
    private $forrashely_akv_neme;

    /**
     * @var string $forrashely_pd
     *
     * @ORM\Column(name="forrashely_pd", type="string", length=255, nullable=true)
     */
    private $forrashely_pd;

    /**
     * @var string $hiv_szekhely
     *
     * @ORM\Column(name="hiv_szekhely", type="string", length=255, nullable=true)
     */
    private $hiv_szekhely;

    /**
     * @var string $jelzet_ev
     *
     * @ORM\Column(name="jelzet_ev", type="string", length=255, nullable=true)
     */
    private $jelzet_ev;

    /**
     * @var string $jelzet_folyoszam
     *
     * @ORM\Column(name="jelzet_folyoszam", type="string", length=255, nullable=true)
     */
    private $jelzet_folyoszam;

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
     * @var string $szul_hely_szab
     *
     * @ORM\Column(name="szul_hely_szab", type="string", length=255, nullable=true)
     */
    private $szul_hely_szab;

    /**
     * @var string $szul_hely_irva
     *
     * @ORM\Column(name="szul_hely_irva", type="string", length=255, nullable=true)
     */
    private $szul_hely_irva;

    /**
     * @var string $lakhely_utca_szab
     *
     * @ORM\Column(name="lakhely_utca_szab", type="string", length=255, nullable=true)
     */
    private $lakhely_utca_szab;

    /**
     * @var string $lakhely_utca_irva
     *
     * @ORM\Column(name="lakhely_utca_irva", type="string", length=255, nullable=true)
     */
    private $lakhely_utca_irva;

    /**
     * @var string $lakhely_hazszam
     *
     * @ORM\Column(name="lakhely_hazszam", type="string", length=255, nullable=true)
     */
    private $lakhely_hazszam;

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
     * @var string $megholt_fogl_szab
     *
     * @ORM\Column(name="megholt_fogl_szab", type="string", length=255, nullable=true)
     */
    private $megholt_fogl_szab;

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
     * @var boolean $btlan_hiv_szekhely
     *
     * @ORM\Column(name="btlan_hiv_szekhely", type="boolean", nullable=true)
     */
    private $btlan_hiv_szekhely;

    /**
     * @var boolean $btlan_jelzet
     *
     * @ORM\Column(name="btlan_jelzet", type="boolean", nullable=true)
     */
    private $btlan_jelzet;

    /**
     * @var boolean $btlan_halal_ideje
     *
     * @ORM\Column(name="btlan_halal_ideje", type="boolean", nullable=true)
     */
    private $btlan_halal_ideje;

    /**
     * @var boolean $btlan_szul_hely_szab
     *
     * @ORM\Column(name="btlan_szul_hely_szab", type="boolean", nullable=true)
     */
    private $btlan_szul_hely_szab;

    /**
     * @var boolean $btlan_szul_hely_irva
     *
     * @ORM\Column(name="btlan_szul_hely_irva", type="boolean", nullable=true)
     */
    private $btlan_szul_hely_irva;

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
     * @var boolean $btlan_lakhely_hazszam
     *
     * @ORM\Column(name="btlan_lakhely_hazszam", type="boolean", nullable=true)
     */
    private $btlan_lakhely_hazszam;

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
     * @var boolean $btlan_megholt_fogl_szab
     *
     * @ORM\Column(name="btlan_megholt_fogl_szab", type="boolean", nullable=true)
     */
    private $btlan_megholt_fogl_szab;

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
     * Set forrashely_felek
     *
     * @param string $forrashelyFelek
     */
    public function setForrashelyFelek($forrashelyFelek)
    {
        $this->forrashely_felek = $forrashelyFelek;
    }

    /**
     * Get forrashely_felek
     *
     * @return string 
     */
    public function getForrashelyFelek()
    {
        return $this->forrashely_felek;
    }

    /**
     * Set forrashely_akv_neme
     *
     * @param string $forrashelyAkvNeme
     */
    public function setForrashelyAkvNeme($forrashelyAkvNeme)
    {
        $this->forrashely_akv_neme = $forrashelyAkvNeme;
    }

    /**
     * Get forrashely_akv_neme
     *
     * @return string 
     */
    public function getForrashelyAkvNeme()
    {
        return $this->forrashely_akv_neme;
    }

    /**
     * Set forrashely_pd
     *
     * @param string $forrashelyPd
     */
    public function setForrashelyPd($forrashelyPd)
    {
        $this->forrashely_pd = $forrashelyPd;
    }

    /**
     * Get forrashely_pd
     *
     * @return string 
     */
    public function getForrashelyPd()
    {
        return $this->forrashely_pd;
    }

    /**
     * Set hiv_szekhely
     *
     * @param string $hivSzekhely
     */
    public function setHivSzekhely($hivSzekhely)
    {
        $this->hiv_szekhely = $hivSzekhely;
    }

    /**
     * Get hiv_szekhely
     *
     * @return string 
     */
    public function getHivSzekhely()
    {
        return $this->hiv_szekhely;
    }

    /**
     * Set jelzet_ev
     *
     * @param string $jelzetEv
     */
    public function setJelzetEv($jelzetEv)
    {
        $this->jelzet_ev = $jelzetEv;
    }

    /**
     * Get jelzet_ev
     *
     * @return string 
     */
    public function getJelzetEv()
    {
        return $this->jelzet_ev;
    }

    /**
     * Set jelzet_folyoszam
     *
     * @param string $jelzetFolyoszam
     */
    public function setJelzetFolyoszam($jelzetFolyoszam)
    {
        $this->jelzet_folyoszam = $jelzetFolyoszam;
    }

    /**
     * Get jelzet_folyoszam
     *
     * @return string 
     */
    public function getJelzetFolyoszam()
    {
        return $this->jelzet_folyoszam;
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
     * Set szul_hely_szab
     *
     * @param string $szulHelySzab
     */
    public function setSzulHelySzab($szulHelySzab)
    {
        $this->szul_hely_szab = $szulHelySzab;
    }

    /**
     * Get szul_hely_szab
     *
     * @return string 
     */
    public function getSzulHelySzab()
    {
        return $this->szul_hely_szab;
    }

    /**
     * Set szul_hely_irva
     *
     * @param string $szulHelyIrva
     */
    public function setSzulHelyIrva($szulHelyIrva)
    {
        $this->szul_hely_irva = $szulHelyIrva;
    }

    /**
     * Get szul_hely_irva
     *
     * @return string 
     */
    public function getSzulHelyIrva()
    {
        return $this->szul_hely_irva;
    }

    /**
     * Set lakhely_utca_szab
     *
     * @param string $lakhelyUtcaSzab
     */
    public function setLakhelyUtcaSzab($lakhelyUtcaSzab)
    {
        $this->lakhely_utca_szab = $lakhelyUtcaSzab;
    }

    /**
     * Get lakhely_utca_szab
     *
     * @return string 
     */
    public function getLakhelyUtcaSzab()
    {
        return $this->lakhely_utca_szab;
    }

    /**
     * Set lakhely_utca_irva
     *
     * @param string $lakhelyUtcaIrva
     */
    public function setLakhelyUtcaIrva($lakhelyUtcaIrva)
    {
        $this->lakhely_utca_irva = $lakhelyUtcaIrva;
    }

    /**
     * Get lakhely_utca_irva
     *
     * @return string 
     */
    public function getLakhelyUtcaIrva()
    {
        return $this->lakhely_utca_irva;
    }

    /**
     * Set lakhely_hazszam
     *
     * @param string $lakhelyHazszam
     */
    public function setLakhelyHazszam($lakhelyHazszam)
    {
        $this->lakhely_hazszam = $lakhelyHazszam;
    }

    /**
     * Get lakhely_hazszam
     *
     * @return string 
     */
    public function getLakhelyHazszam()
    {
        return $this->lakhely_hazszam;
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
     * Set megholt_fogl_szab
     *
     * @param string $megholtFoglSzab
     */
    public function setMegholtFoglSzab($megholtFoglSzab)
    {
        $this->megholt_fogl_szab = $megholtFoglSzab;
    }

    /**
     * Get megholt_fogl_szab
     *
     * @return string 
     */
    public function getMegholtFoglSzab()
    {
        return $this->megholt_fogl_szab;
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
     * @param smallint $kora_nap
     */
    public function setKoraNap($kora_nap)
    {
        $this->kora_nap = $kora_nap;
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
     * Get Forráshely
     *
     * @return string
     */
    public function getForrashely()
    {
        $str = "";
        if ($this->getForrashelyFelek() != "") $str .= $this->getForrashelyFelek()." felek. ";
        if ($this->getForrashelyAkvNeme() != "") $str .= $this->getForrashelyAkvNeme()." akv. neme ";
        if ($this->getForrashelyPd() != "") $str .= $this->getForrashelyPd()." pd.";

        return trim($str);
    }

    /**
     * Get Jelzet
     *
     * @return string
     */
    public function getJelzet()
    {
        return $this->getJelzetEv().":".$this->getJelzetFolyoszam();
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
     * Set btlan_hiv_szekhely
     *
     * @param boolean $btlanHivSzekhely
     */
    public function setBtlanHivSzekhely($btlanHivSzekhely)
    {
        $this->btlan_hiv_szekhely = $btlanHivSzekhely;
    }

    /**
     * Get btlan_hiv_szekhely
     *
     * @return boolean 
     */
    public function getBtlanHivSzekhely()
    {
        return $this->btlan_hiv_szekhely;
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
     * Set btlan_szul_hely_szab
     *
     * @param boolean $btlanSzulHelySzab
     */
    public function setBtlanSzulHelySzab($btlanSzulHelySzab)
    {
        $this->btlan_szul_hely_szab = $btlanSzulHelySzab;
    }

    /**
     * Get btlan_szul_hely_szab
     *
     * @return boolean 
     */
    public function getBtlanSzulHelySzab()
    {
        return $this->btlan_szul_hely_szab;
    }

    /**
     * Set btlan_szul_hely_irva
     *
     * @param boolean $btlanSzulHelyIrva
     */
    public function setBtlanSzulHelyIrva($btlanSzulHelyIrva)
    {
        $this->btlan_szul_hely_irva = $btlanSzulHelyIrva;
    }

    /**
     * Get btlan_szul_hely_irva
     *
     * @return boolean 
     */
    public function getBtlanSzulHelyIrva()
    {
        return $this->btlan_szul_hely_irva;
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
     * Set btlan_lakhely_hazszam
     *
     * @param boolean $btlanLakhelyHazszam
     */
    public function setBtlanLakhelyHazszam($btlanLakhelyHazszam)
    {
        $this->btlan_lakhely_hazszam = $btlanLakhelyHazszam;
    }

    /**
     * Get btlan_lakhely_hazszam
     *
     * @return boolean 
     */
    public function getBtlanLakhelyHazszam()
    {
        return $this->btlan_lakhely_hazszam;
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
     * Set btlan_megholt_fogl_szab
     *
     * @param boolean $btlanMegholtFoglSzab
     */
    public function setBtlanMegholtFoglSzab($btlanMegholtFoglSzab)
    {
        $this->btlan_megholt_fogl_szab = $btlanMegholtFoglSzab;
    }

    /**
     * Get btlan_megholt_fogl_szab
     *
     * @return boolean 
     */
    public function getBtlanMegholtFoglSzab()
    {
        return $this->btlan_megholt_fogl_szab;
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
    
    /**
     * Get typed characters count
     *
     * @return int
     */
    public function getCharactersCount()
    {
        $count = 0;
        $count += mb_strlen($this->getAllapFoglViszonyIrva(), 'utf8');
        $count += mb_strlen($this->getForrashelyAkvNeme(), 'utf8');
        $count += mb_strlen($this->getForrashelyFelek(), 'utf8');
        $count += mb_strlen($this->getForrashelyPd(), 'utf8');
        $count += mb_strlen($this->getHalalIdejeEv(), 'utf8');
        $count += mb_strlen($this->getHalalIdejeHo(), 'utf8');
        $count += mb_strlen($this->getHalalIdejeNap(), 'utf8');
        $count += mb_strlen($this->getHalalOkaIrva(), 'utf8');
        $count += mb_strlen($this->getHalalOkaSzab(), 'utf8');
        $count += mb_strlen($this->getHivSzekhely(), 'utf8');
        $count += mb_strlen($this->getJelzetEv(), 'utf8');
        $count += mb_strlen($this->getJelzetFolyoszam(), 'utf8');
        $count += mb_strlen($this->getKoraEv(), 'utf8');
        $count += mb_strlen($this->getKoraHet(), 'utf8');
        $count += mb_strlen($this->getKoraHo(), 'utf8');
        $count += mb_strlen($this->getKoraNap(), 'utf8');
        $count += mb_strlen($this->getKoraOra(), 'utf8');
        $count += mb_strlen($this->getLakhelyHazszam(), 'utf8');
        $count += mb_strlen($this->getLakhelyUtcaIrva(), 'utf8');
        $count += mb_strlen($this->getLakhelyUtcaSzab(), 'utf8');
        $count += mb_strlen($this->getMegholtFoglSzab(), 'utf8');
        $count += mb_strlen($this->getMegholtNeveIrva(), 'utf8');
        $count += mb_strlen($this->getMegholtNeveSzab(), 'utf8');
        $count += mb_strlen($this->getMegjegyzesek(), 'utf8');
        $count += mb_strlen($this->getSzulHelyIrva(), 'utf8');
        $count += mb_strlen($this->getSzulHelySzab(), 'utf8');
        $count += mb_strlen($this->getTovabbiEgykoruAdat(), 'utf8');

        return $count;
    }
}