<?php

namespace Veml\TorzslapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Veml\TorzslapBundle\Entity\Torzslap4
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Veml\TorzslapBundle\Entity\Torzslap4Repository")
 */
class Torzslap4
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
     * @var string $forrashely_old
     *
     * @ORM\Column(name="forrashely_old", type="string", length=255, nullable=true)
     */
    private $forrashely_old;

    /**
     * @var string $jelzet_osztaly
     *
     * @ORM\Column(name="jelzet_osztaly", type="string", length=255, nullable=true)
     */
    private $jelzet_osztaly;

    /**
     * @var string $jelzet_ssz
     *
     * @ORM\Column(name="jelzet_ssz", type="string", length=255, nullable=true)
     */
    private $jelzet_ssz;

    /**
     * @var string $jelzet_ev
     *
     * @ORM\Column(name="jelzet_ev", type="string", length=255, nullable=true)
     */
    private $jelzet_ev;

    /**
     * @var string $vallalkozo_neve_szab
     *
     * @ORM\Column(name="vallalkozo_neve_szab", type="string", length=255, nullable=true)
     */
    private $vallalkozo_neve_szab;

    /**
     * @var string $vallalkozo_neve_irva
     *
     * @ORM\Column(name="vallalkozo_neve_irva", type="string", length=255, nullable=true)
     */
    private $vallalkozo_neve_irva;

    /**
     * @var string $vallalkozo_szem_adatai
     *
     * @ORM\Column(name="vallalkozo_szem_adatai", type="string", length=255, nullable=true)
     */
    private $vallalkozo_szem_adatai;

    /**
     * @var string $uzlettars_neve_szab
     *
     * @ORM\Column(name="uzlettars_neve_szab", type="string", length=255, nullable=true)
     */
    private $uzlettars_neve_szab;

    /**
     * @var string $uzlettars_neve_irva
     *
     * @ORM\Column(name="uzlettars_neve_irva", type="string", length=255, nullable=true)
     */
    private $uzlettars_neve_irva;

    /**
     * @var string $uzlettars_szem_adatai
     *
     * @ORM\Column(name="uzlettars_szem_adatai", type="string", length=255, nullable=true)
     */
    private $uzlettars_szem_adatai;

    /**
     * @var string $foglalk_vallalk_szab
     *
     * @ORM\Column(name="foglalk_vallalk_szab", type="text", nullable=true)
     */
    private $foglalk_vallalk_szab;

    /**
     * @var string $foglalk_vallalk_irva
     *
     * @ORM\Column(name="foglalk_vallalk_irva", type="string", length=255, nullable=true)
     */
    private $foglalk_vallalk_irva;

    /**
     * @var string $foglalk_vallalk_neve
     *
     * @ORM\Column(name="foglalk_vallalk_neve", type="string", length=255, nullable=true)
     */
    private $foglalk_vallalk_neve;

    /**
     * @var string $telep_cimhelye_szab
     *
     * @ORM\Column(name="telep_cimhelye_szab", type="string", length=255, nullable=true)
     */
    private $telep_cimhelye_szab;

    /**
     * @var string $telep_cimhelye_irva
     *
     * @ORM\Column(name="telep_cimhelye_irva", type="string", length=255, nullable=true)
     */
    private $telep_cimhelye_irva;

    /**
     * @var string $telep_hazszam
     *
     * @ORM\Column(name="telep_hazszam", type="string", length=255, nullable=true)
     */
    private $telep_hazszam;

    /**
     * @var string $telep_haz_neve
     *
     * @ORM\Column(name="telep_haz_neve", type="string", length=255, nullable=true)
     */
    private $telep_haz_neve;

    /**
     * @var string $ip_ig_szama
     *
     * @ORM\Column(name="ip_ig_szama", type="string", length=255, nullable=true)
     */
    private $ip_ig_szama;

    /**
     * @var string $ip_ig_kelte
     *
     * @ORM\Column(name="ip_ig_kelte", type="string", length=255, nullable=true)
     */
    private $ip_ig_kelte;

    /**
     * @var string $hivatk_eng_sz
     *
     * @ORM\Column(name="hivatk_eng_sz", type="string", length=255, nullable=true)
     */
    private $hivatk_eng_sz;

    /**
     * @var string $telepengedely
     *
     * @ORM\Column(name="telepengedely", type="string", length=255, nullable=true)
     */
    private $telepengedely;

    /**
     * @var text $uzletvez_elarusito
     *
     * @ORM\Column(name="uzletvez_elarusito", type="text", nullable=true)
     */
    private $uzletvez_elarusito;

    /**
     * @var text $modositas_valtozas_beszuntetes
     *
     * @ORM\Column(name="modositas_valtozas_beszuntetes", type="text", nullable=true)
     */
    private $modositas_valtozas_beszuntetes;

    /**
     * @var string $mod_hivatkozasa
     *
     * @ORM\Column(name="mod_hivatkozasa", type="string", length=255, nullable=true)
     */
    private $mod_hivatkozasa;

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
     * @var boolean $btlan_vallalkozo_neve_szab
     *
     * @ORM\Column(name="btlan_vallalkozo_neve_szab", type="boolean", nullable=true)
     */
    private $btlan_vallalkozo_neve_szab;

    /**
     * @var boolean $btlan_vallalkozo_neve_irva
     *
     * @ORM\Column(name="btlan_vallalkozo_neve_irva", type="boolean", nullable=true)
     */
    private $btlan_vallalkozo_neve_irva;

    /**
     * @var boolean $btlan_vallalkozo_szem_adatai
     *
     * @ORM\Column(name="btlan_vallalkozo_szem_adatai", type="boolean", nullable=true)
     */
    private $btlan_vallalkozo_szem_adatai;

    /**
     * @var boolean $btlan_uzlettars_neve_szab
     *
     * @ORM\Column(name="btlan_uzlettars_neve_szab", type="boolean", nullable=true)
     */
    private $btlan_uzlettars_neve_szab;

    /**
     * @var boolean $btlan_uzlettars_neve_irva
     *
     * @ORM\Column(name="btlan_uzlettars_neve_irva", type="boolean", nullable=true)
     */
    private $btlan_uzlettars_neve_irva;

    /**
     * @var boolean $btlan_uzlettars_szem_adatai
     *
     * @ORM\Column(name="btlan_uzlettars_szem_adatai", type="boolean", nullable=true)
     */
    private $btlan_uzlettars_szem_adatai;

    /**
     * @var boolean $btlan_foglalk_vallalk_szab
     *
     * @ORM\Column(name="btlan_foglalk_vallalk_szab", type="boolean", nullable=true)
     */
    private $btlan_foglalk_vallalk_szab;

    /**
     * @var boolean $btlan_foglalk_vallalk_irva
     *
     * @ORM\Column(name="btlan_foglalk_vallalk_irva", type="boolean", nullable=true)
     */
    private $btlan_foglalk_vallalk_irva;

    /**
     * @var boolean $btlan_foglalk_vallalk_neve
     *
     * @ORM\Column(name="btlan_foglalk_vallalk_neve", type="boolean", nullable=true)
     */
    private $btlan_foglalk_vallalk_neve;

    /**
     * @var boolean $btlan_telep_cimhelye_szab
     *
     * @ORM\Column(name="btlan_telep_cimhelye_szab", type="boolean", nullable=true)
     */
    private $btlan_telep_cimhelye_szab;

    /**
     * @var boolean $btlan_telep_cimhelye_irva
     *
     * @ORM\Column(name="btlan_telep_cimhelye_irva", type="boolean", nullable=true)
     */
    private $btlan_telep_cimhelye_irva;

    /**
     * @var boolean $btlan_telep_hazszam
     *
     * @ORM\Column(name="btlan_telep_hazszam", type="boolean", nullable=true)
     */
    private $btlan_telep_hazszam;

    /**
     * @var boolean $btlan_ip_ig_szama
     *
     * @ORM\Column(name="btlan_ip_ig_szama", type="boolean", nullable=true)
     */
    private $btlan_ip_ig_szama;

    /**
     * @var boolean $btlan_hivatk_eng_sz
     *
     * @ORM\Column(name="btlan_hivatk_eng_sz", type="boolean", nullable=true)
     */
    private $btlan_hivatk_eng_sz;

    /**
     * @var boolean $btlan_telepengedely
     *
     * @ORM\Column(name="btlan_telepengedely", type="boolean", nullable=true)
     */
    private $btlan_telepengedely;

    /**
     * @var boolean $btlan_uzletvez_elarusito
     *
     * @ORM\Column(name="btlan_uzletvez_elarusito", type="boolean", nullable=true)
     */
    private $btlan_uzletvez_elarusito;

    /**
     * @var boolean $btlan_modositas_valtozas_beszuntetes
     *
     * @ORM\Column(name="btlan_modositas_valtozas_beszuntetes", type="boolean", nullable=true)
     */
    private $btlan_modositas_valtozas_beszuntetes;

    /**
     * @var boolean $btlan_mod_hivatkozasa
     *
     * @ORM\Column(name="btlan_mod_hivatkozasa", type="boolean", nullable=true)
     */
    private $btlan_mod_hivatkozasa;

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
     * Set forrashely_old
     *
     * @param string $forrashelyOld
     */
    public function setForrashelyOld($forrashelyOld)
    {
        $this->forrashely_old = $forrashelyOld;
    }

    /**
     * Get forrashely_old
     *
     * @return string 
     */
    public function getForrashelyOld()
    {
        return $this->forrashely_old;
    }

    /**
     * Set jelzet_osztaly
     *
     * @param string $jelzetOsztaly
     */
    public function setJelzetOsztaly($jelzetOsztaly)
    {
        $this->jelzet_osztaly = $jelzetOsztaly;
    }

    /**
     * Get jelzet_osztaly
     *
     * @return string 
     */
    public function getJelzetOsztaly()
    {
        return $this->jelzet_osztaly;
    }

    /**
     * Set jelzet_ssz
     *
     * @param string $jelzetSsz
     */
    public function setJelzetSsz($jelzetSsz)
    {
        $this->jelzet_ssz = $jelzetSsz;
    }

    /**
     * Get jelzet_ssz
     *
     * @return string 
     */
    public function getJelzetSsz()
    {
        return $this->jelzet_ssz;
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
     * Set vallalkozo_neve_szab
     *
     * @param string $vallalkozoNeveSzab
     */
    public function setVallalkozoNeveSzab($vallalkozoNeveSzab)
    {
        $this->vallalkozo_neve_szab = $vallalkozoNeveSzab;
    }

    /**
     * Get vallalkozo_neve_szab
     *
     * @return string 
     */
    public function getVallalkozoNeveSzab()
    {
        return $this->vallalkozo_neve_szab;
    }

    /**
     * Set vallalkozo_neve_irva
     *
     * @param string $vallalkozoNeveIrva
     */
    public function setVallalkozoNeveIrva($vallalkozoNeveIrva)
    {
        $this->vallalkozo_neve_irva = $vallalkozoNeveIrva;
    }

    /**
     * Get vallalkozo_neve_irva
     *
     * @return string 
     */
    public function getVallalkozoNeveIrva()
    {
        return $this->vallalkozo_neve_irva;
    }

    /**
     * Set vallalkozo_szem_adatai
     *
     * @param string $vallalkozoSzemAdatai
     */
    public function setVallalkozoSzemAdatai($vallalkozoSzemAdatai)
    {
        $this->vallalkozo_szem_adatai = $vallalkozoSzemAdatai;
    }

    /**
     * Get vallalkozo_szem_adatai
     *
     * @return string 
     */
    public function getVallalkozoSzemAdatai()
    {
        return $this->vallalkozo_szem_adatai;
    }

    /**
     * Set uzlettars_neve_szab
     *
     * @param string $uzlettarsNeveSzab
     */
    public function setUzlettarsNeveSzab($uzlettarsNeveSzab)
    {
        $this->uzlettars_neve_szab = $uzlettarsNeveSzab;
    }

    /**
     * Get uzlettars_neve_szab
     *
     * @return string 
     */
    public function getUzlettarsNeveSzab()
    {
        return $this->uzlettars_neve_szab;
    }

    /**
     * Set uzlettars_neve_irva
     *
     * @param string $uzlettarsNeveIrva
     */
    public function setUzlettarsNeveIrva($uzlettarsNeveIrva)
    {
        $this->uzlettars_neve_irva = $uzlettarsNeveIrva;
    }

    /**
     * Get uzlettars_neve_irva
     *
     * @return string 
     */
    public function getUzlettarsNeveIrva()
    {
        return $this->uzlettars_neve_irva;
    }

    /**
     * Set uzlettars_szem_adatai
     *
     * @param string $uzlettarsSzemAdatai
     */
    public function setUzlettarsSzemAdatai($uzlettarsSzemAdatai)
    {
        $this->uzlettars_szem_adatai = $uzlettarsSzemAdatai;
    }

    /**
     * Get uzlettars_szem_adatai
     *
     * @return string 
     */
    public function getUzlettarsSzemAdatai()
    {
        return $this->uzlettars_szem_adatai;
    }

    /**
     * Set foglalk_vallalk_szab
     *
     * @param string $foglalkVallalkSzab
     */
    public function setFoglalkVallalkSzab($foglalkVallalkSzab)
    {
        $this->foglalk_vallalk_szab = $foglalkVallalkSzab;
    }

    /**
     * Get foglalk_vallalk_szab
     *
     * @return string 
     */
    public function getFoglalkVallalkSzab()
    {
        return $this->foglalk_vallalk_szab;
    }

    /**
     * Set foglalk_vallalk_irva
     *
     * @param string $foglalkVallalkIrva
     */
    public function setFoglalkVallalkIrva($foglalkVallalkIrva)
    {
        $this->foglalk_vallalk_irva = $foglalkVallalkIrva;
    }

    /**
     * Get foglalk_vallalk_irva
     *
     * @return string 
     */
    public function getFoglalkVallalkIrva()
    {
        return $this->foglalk_vallalk_irva;
    }

    /**
     * Set foglalk_vallalk_neve
     *
     * @param string $foglalkVallalkNeve
     */
    public function setFoglalkVallalkNeve($foglalkVallalkNeve)
    {
        $this->foglalk_vallalk_neve = $foglalkVallalkNeve;
    }

    /**
     * Get foglalk_vallalk_neve
     *
     * @return string 
     */
    public function getFoglalkVallalkNeve()
    {
        return $this->foglalk_vallalk_neve;
    }

    /**
     * Set telep_cimhelye_szab
     *
     * @param string $telepCimhelyeSzab
     */
    public function setTelepCimhelyeSzab($telepCimhelyeSzab)
    {
        $this->telep_cimhelye_szab = $telepCimhelyeSzab;
    }

    /**
     * Get telep_cimhelye_szab
     *
     * @return string 
     */
    public function getTelepCimhelyeSzab()
    {
        return $this->telep_cimhelye_szab;
    }

    /**
     * Set telep_cimhelye_irva
     *
     * @param string $telepCimhelyeIrva
     */
    public function setTelepCimhelyeIrva($telepCimhelyeIrva)
    {
        $this->telep_cimhelye_irva = $telepCimhelyeIrva;
    }

    /**
     * Get telep_cimhelye_irva
     *
     * @return string 
     */
    public function getTelepCimhelyeIrva()
    {
        return $this->telep_cimhelye_irva;
    }

    /**
     * Set ip_ig_szama
     *
     * @param string $ipIgSzama
     */
    public function setIpIgSzama($ipIgSzama)
    {
        $this->ip_ig_szama = $ipIgSzama;
    }

    /**
     * Get ip_ig_szama
     *
     * @return string 
     */
    public function getIpIgSzama()
    {
        return $this->ip_ig_szama;
    }

    /**
     * Set ip_ig_kelte
     *
     * @param string $ipIgKelte
     */
    public function setIpIgKelte($ipIgKelte)
    {
        $this->ip_ig_kelte = $ipIgKelte;
    }

    /**
     * Get ip_ig_kelte
     *
     * @return string 
     */
    public function getIpIgKelte()
    {
        return $this->ip_ig_kelte;
    }

    /**
     * Set hivatk_eng_sz
     *
     * @param string $hivatkEngSz
     */
    public function setHivatkEngSz($hivatkEngSz)
    {
        $this->hivatk_eng_sz = $hivatkEngSz;
    }

    /**
     * Get hivatk_eng_sz
     *
     * @return string 
     */
    public function getHivatkEngSz()
    {
        return $this->hivatk_eng_sz;
    }

    /**
     * Set telepengedely
     *
     * @param string $telepengedely
     */
    public function setTelepengedely($telepengedely)
    {
        $this->telepengedely = $telepengedely;
    }

    /**
     * Get telepengedely
     *
     * @return string 
     */
    public function getTelepengedely()
    {
        return $this->telepengedely;
    }

    /**
     * Set uzletvez_elarusito
     *
     * @param text $uzletvezElarusito
     */
    public function setUzletvezElarusito($uzletvezElarusito)
    {
        $this->uzletvez_elarusito = $uzletvezElarusito;
    }

    /**
     * Get uzletvez_elarusito
     *
     * @return text 
     */
    public function getUzletvezElarusito()
    {
        return $this->uzletvez_elarusito;
    }

    /**
     * Set modositas_valtozas_beszuntetes
     *
     * @param text $modositasValtozasBeszuntetes
     */
    public function setModositasValtozasBeszuntetes($modositasValtozasBeszuntetes)
    {
        $this->modositas_valtozas_beszuntetes = $modositasValtozasBeszuntetes;
    }

    /**
     * Get modositas_valtozas_beszuntetes
     *
     * @return text 
     */
    public function getModositasValtozasBeszuntetes()
    {
        return $this->modositas_valtozas_beszuntetes;
    }

    /**
     * Set mod_hivatkozasa
     *
     * @param string $modHivatkozasa
     */
    public function setModHivatkozasa($modHivatkozasa)
    {
        $this->mod_hivatkozasa = $modHivatkozasa;
    }

    /**
     * Get mod_hivatkozasa
     *
     * @return string 
     */
    public function getModHivatkozasa()
    {
        return $this->mod_hivatkozasa;
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
        if ($this->getForrashelyKot() != "") $str .= $this->getForrashelyKot()." sor.; téka, köt.; ";
        if ($this->getForrashelyOld() != "") $str .= $this->getForrashelyOld()." (cer.) old. ";

        return trim($str);
    }

    /**
     * Get Jelzet
     *
     * @return string
     */
    public function getJelzet()
    {
        return $this->getJelzetOsztaly()."-".$this->getJelzetSsz()."/".$this->getJelzetEv();
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
     * Set btlan_vallalkozo_neve_szab
     *
     * @param boolean $btlanVallalkozoNeveSzab
     */
    public function setBtlanVallalkozoNeveSzab($btlanVallalkozoNeveSzab)
    {
        $this->btlan_vallalkozo_neve_szab = $btlanVallalkozoNeveSzab;
    }

    /**
     * Get btlan_vallalkozo_neve_szab
     *
     * @return boolean 
     */
    public function getBtlanVallalkozoNeveSzab()
    {
        return $this->btlan_vallalkozo_neve_szab;
    }

    /**
     * Set btlan_vallalkozo_neve_irva
     *
     * @param boolean $btlanVallalkozoNeveIrva
     */
    public function setBtlanVallalkozoNeveIrva($btlanVallalkozoNeveIrva)
    {
        $this->btlan_vallalkozo_neve_irva = $btlanVallalkozoNeveIrva;
    }

    /**
     * Get btlan_vallalkozo_neve_irva
     *
     * @return boolean 
     */
    public function getBtlanVallalkozoNeveIrva()
    {
        return $this->btlan_vallalkozo_neve_irva;
    }

    /**
     * Set btlan_vallalkozo_szem_adatai
     *
     * @param boolean $btlanVallalkozoSzemAdatai
     */
    public function setBtlanVallalkozoSzemAdatai($btlanVallalkozoSzemAdatai)
    {
        $this->btlan_vallalkozo_szem_adatai = $btlanVallalkozoSzemAdatai;
    }

    /**
     * Get btlan_vallalkozo_szem_adatai
     *
     * @return boolean 
     */
    public function getBtlanVallalkozoSzemAdatai()
    {
        return $this->btlan_vallalkozo_szem_adatai;
    }

    /**
     * Set btlan_uzlettars_neve_szab
     *
     * @param boolean $btlanUzlettarsNeveSzab
     */
    public function setBtlanUzlettarsNeveSzab($btlanUzlettarsNeveSzab)
    {
        $this->btlan_uzlettars_neve_szab = $btlanUzlettarsNeveSzab;
    }

    /**
     * Get btlan_uzlettars_neve_szab
     *
     * @return boolean 
     */
    public function getBtlanUzlettarsNeveSzab()
    {
        return $this->btlan_uzlettars_neve_szab;
    }

    /**
     * Set btlan_uzlettars_neve_irva
     *
     * @param boolean $btlanUzlettarsNeveIrva
     */
    public function setBtlanUzlettarsNeveIrva($btlanUzlettarsNeveIrva)
    {
        $this->btlan_uzlettars_neve_irva = $btlanUzlettarsNeveIrva;
    }

    /**
     * Get btlan_uzlettars_neve_irva
     *
     * @return boolean 
     */
    public function getBtlanUzlettarsNeveIrva()
    {
        return $this->btlan_uzlettars_neve_irva;
    }

    /**
     * Set btlan_uzlettars_szem_adatai
     *
     * @param boolean $btlanUzlettarsSzemAdatai
     */
    public function setBtlanUzlettarsSzemAdatai($btlanUzlettarsSzemAdatai)
    {
        $this->btlan_uzlettars_szem_adatai = $btlanUzlettarsSzemAdatai;
    }

    /**
     * Get btlan_uzlettars_szem_adatai
     *
     * @return boolean 
     */
    public function getBtlanUzlettarsSzemAdatai()
    {
        return $this->btlan_uzlettars_szem_adatai;
    }

    /**
     * Set btlan_foglalk_vallalk_szab
     *
     * @param boolean $btlanFoglalkVallalkSzab
     */
    public function setBtlanFoglalkVallalkSzab($btlanFoglalkVallalkSzab)
    {
        $this->btlan_foglalk_vallalk_szab = $btlanFoglalkVallalkSzab;
    }

    /**
     * Get btlan_foglalk_vallalk_szab
     *
     * @return boolean 
     */
    public function getBtlanFoglalkVallalkSzab()
    {
        return $this->btlan_foglalk_vallalk_szab;
    }

    /**
     * Set btlan_foglalk_vallalk_irva
     *
     * @param boolean $btlanFoglalkVallalkIrva
     */
    public function setBtlanFoglalkVallalkIrva($btlanFoglalkVallalkIrva)
    {
        $this->btlan_foglalk_vallalk_irva = $btlanFoglalkVallalkIrva;
    }

    /**
     * Get btlan_foglalk_vallalk_irva
     *
     * @return boolean 
     */
    public function getBtlanFoglalkVallalkIrva()
    {
        return $this->btlan_foglalk_vallalk_irva;
    }

    /**
     * Set btlan_foglalk_vallalk_neve
     *
     * @param boolean $btlanFoglalkVallalkNeve
     */
    public function setBtlanFoglalkVallalkNeve($btlanFoglalkVallalkNeve)
    {
        $this->btlan_foglalk_vallalk_neve = $btlanFoglalkVallalkNeve;
    }

    /**
     * Get btlan_foglalk_vallalk_neve
     *
     * @return boolean 
     */
    public function getBtlanFoglalkVallalkNeve()
    {
        return $this->btlan_foglalk_vallalk_neve;
    }

    /**
     * Set btlan_telep_cimhelye_szab
     *
     * @param boolean $btlanTelepCimhelyeSzab
     */
    public function setBtlanTelepCimhelyeSzab($btlanTelepCimhelyeSzab)
    {
        $this->btlan_telep_cimhelye_szab = $btlanTelepCimhelyeSzab;
    }

    /**
     * Get btlan_telep_cimhelye_szab
     *
     * @return boolean 
     */
    public function getBtlanTelepCimhelyeSzab()
    {
        return $this->btlan_telep_cimhelye_szab;
    }

    /**
     * Set btlan_telep_cimhelye_irva
     *
     * @param boolean $btlanTelepCimhelyeIrva
     */
    public function setBtlanTelepCimhelyeIrva($btlanTelepCimhelyeIrva)
    {
        $this->btlan_telep_cimhelye_irva = $btlanTelepCimhelyeIrva;
    }

    /**
     * Get btlan_telep_cimhelye_irva
     *
     * @return boolean 
     */
    public function getBtlanTelepCimhelyeIrva()
    {
        return $this->btlan_telep_cimhelye_irva;
    }

    /**
     * Set btlan_ip_ig_szama
     *
     * @param boolean $btlanIpIgSzama
     */
    public function setBtlanIpIgSzama($btlanIpIgSzama)
    {
        $this->btlan_ip_ig_szama = $btlanIpIgSzama;
    }

    /**
     * Get btlan_ip_ig_szama
     *
     * @return boolean 
     */
    public function getBtlanIpIgSzama()
    {
        return $this->btlan_ip_ig_szama;
    }

    /**
     * Set btlan_hivatk_eng_sz
     *
     * @param boolean $btlanHivatkEngSz
     */
    public function setBtlanHivatkEngSz($btlanHivatkEngSz)
    {
        $this->btlan_hivatk_eng_sz = $btlanHivatkEngSz;
    }

    /**
     * Get btlan_hivatk_eng_sz
     *
     * @return boolean 
     */
    public function getBtlanHivatkEngSz()
    {
        return $this->btlan_hivatk_eng_sz;
    }

    /**
     * Set btlan_telepengedely
     *
     * @param boolean $btlanTelepengedely
     */
    public function setBtlanTelepengedely($btlanTelepengedely)
    {
        $this->btlan_telepengedely = $btlanTelepengedely;
    }

    /**
     * Get btlan_telepengedely
     *
     * @return boolean 
     */
    public function getBtlanTelepengedely()
    {
        return $this->btlan_telepengedely;
    }

    /**
     * Set btlan_uzletvez_elarusito
     *
     * @param boolean $btlanUzletvezElarusito
     */
    public function setBtlanUzletvezElarusito($btlanUzletvezElarusito)
    {
        $this->btlan_uzletvez_elarusito = $btlanUzletvezElarusito;
    }

    /**
     * Get btlan_uzletvez_elarusito
     *
     * @return boolean 
     */
    public function getBtlanUzletvezElarusito()
    {
        return $this->btlan_uzletvez_elarusito;
    }

    /**
     * Set btlan_modositas_valtozas_beszuntetes
     *
     * @param boolean $btlanModositasValtozasBeszuntetes
     */
    public function setBtlanModositasValtozasBeszuntetes($btlanModositasValtozasBeszuntetes)
    {
        $this->btlan_modositas_valtozas_beszuntetes = $btlanModositasValtozasBeszuntetes;
    }

    /**
     * Get btlan_modositas_valtozas_beszuntetes
     *
     * @return boolean 
     */
    public function getBtlanModositasValtozasBeszuntetes()
    {
        return $this->btlan_modositas_valtozas_beszuntetes;
    }

    /**
     * Set btlan_mod_hivatkozasa
     *
     * @param boolean $btlanModHivatkozasa
     */
    public function setBtlanModHivatkozasa($btlanModHivatkozasa)
    {
        $this->btlan_mod_hivatkozasa = $btlanModHivatkozasa;
    }

    /**
     * Get btlan_mod_hivatkozasa
     *
     * @return boolean 
     */
    public function getBtlanModHivatkozasa()
    {
        return $this->btlan_mod_hivatkozasa;
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
     * @param string $telep_haz_neve
     */
    public function setTelepHazNeve($telep_haz_neve)
    {
        $this->telep_haz_neve = $telep_haz_neve;
    }

    /**
     * @return string
     */
    public function getTelepHazNeve()
    {
        return $this->telep_haz_neve;
    }

    /**
     * @param string $telep_hazszam
     */
    public function setTelepHazszam($telep_hazszam)
    {
        $this->telep_hazszam = $telep_hazszam;
    }

    /**
     * @return string
     */
    public function getTelepHazszam()
    {
        return $this->telep_hazszam;
    }

    /**
     * @param boolean $btlan_telep_hazszam
     */
    public function setBtlanTelepHazszam($btlan_telep_hazszam)
    {
        $this->btlan_telep_hazszam = $btlan_telep_hazszam;
    }

    /**
     * @return boolean
     */
    public function getBtlanTelepHazszam()
    {
        return $this->btlan_telep_hazszam;
    }

    /**
     * Get typed characters count
     *
     * @return int
     */
    public function getCharactersCount()
    {
        $count = 0;
        $count += mb_strlen($this->getFoglalkVallalkIrva(), 'utf8');
        $count += mb_strlen($this->getFoglalkVallalkNeve(), 'utf8');
        $count += mb_strlen($this->getFoglalkVallalkSzab(), 'utf8');
        $count += mb_strlen($this->getForrashelyKot(), 'utf8');
        $count += mb_strlen($this->getForrashelyOld(), 'utf8');
        $count += mb_strlen($this->getHivatkEngSz(), 'utf8');
        $count += mb_strlen($this->getIpIgKelte(), 'utf8');
        $count += mb_strlen($this->getIpIgSzama(), 'utf8');
        $count += mb_strlen($this->getJelzetEv(), 'utf8');
        $count += mb_strlen($this->getJelzetOsztaly(), 'utf8');
        $count += mb_strlen($this->getJelzetSsz(), 'utf8');
        $count += mb_strlen($this->getMegjegyzesek(), 'utf8');
        $count += mb_strlen($this->getModHivatkozasa(), 'utf8');
        $count += mb_strlen($this->getModositasValtozasBeszuntetes(), 'utf8');
        $count += mb_strlen($this->getTelepCimhelyeIrva(), 'utf8');
        $count += mb_strlen($this->getTelepCimhelyeSzab(), 'utf8');
        $count += mb_strlen($this->getTelepengedely(), 'utf8');
        $count += mb_strlen($this->getTelepHazNeve(), 'utf8');
        $count += mb_strlen($this->getTelepHazszam(), 'utf8');
        $count += mb_strlen($this->getTovabbiEgykoruAdat(), 'utf8');
        $count += mb_strlen($this->getUzlettarsNeveIrva(), 'utf8');
        $count += mb_strlen($this->getUzlettarsNeveSzab(), 'utf8');
        $count += mb_strlen($this->getUzlettarsSzemAdatai(), 'utf8');
        $count += mb_strlen($this->getUzletvezElarusito(), 'utf8');
        $count += mb_strlen($this->getVallalkozoNeveIrva(), 'utf8');
        $count += mb_strlen($this->getVallalkozoNeveSzab(), 'utf8');
        $count += mb_strlen($this->getVallalkozoSzemAdatai(), 'utf8');

        return $count;
    }
}