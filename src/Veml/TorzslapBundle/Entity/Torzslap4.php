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
     * @ORM\Column(name="foglalk_vallalk_szab", type="string", length=255, nullable=true)
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
}