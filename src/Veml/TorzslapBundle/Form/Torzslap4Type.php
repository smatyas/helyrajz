<?php

namespace Veml\TorzslapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class Torzslap4Type extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('forrashely_kot')
            ->add('forrashely_old')
            ->add('jelzet_osztaly')
            ->add('jelzet_ssz')
            ->add('jelzet_ev')
            ->add('vallalkozo_neve_szab')
            ->add('vallalkozo_neve_irva')
            ->add('vallalkozo_szem_adatai')
            ->add('uzlettars_neve_szab')
            ->add('uzlettars_neve_irva')
            ->add('uzlettars_szem_adatai')
            ->add('foglalk_vallalk_szab')
            ->add('foglalk_vallalk_irva')
            ->add('foglalk_vallalk_neve')
            ->add('telep_cimhelye_szab')
            ->add('telep_cimhelye_irva')
            ->add('ip_ig_szama')
            ->add('ip_ig_kelte')
            ->add('hivatk_eng_sz')
            ->add('telepengedely')
            ->add('uzletvez_elarusito')
            ->add('modositas_valtozas_beszuntetes')
            ->add('mod_hivatkozasa')
            ->add('tovabbi_egykoru_adat')
            ->add('megjegyzesek')
            ->add('btlan_forrashely')
            ->add('btlan_jelzet')
            ->add('btlan_vallalkozo_neve_szab')
            ->add('btlan_vallalkozo_neve_irva')
            ->add('btlan_vallalkozo_szem_adatai')
            ->add('btlan_uzlettars_neve_szab')
            ->add('btlan_uzlettars_neve_irva')
            ->add('btlan_uzlettars_szem_adatai')
            ->add('btlan_foglalk_vallalk_szab')
            ->add('btlan_foglalk_vallalk_irva')
            ->add('btlan_foglalk_vallalk_neve')
            ->add('btlan_telep_cimhelye_szab')
            ->add('btlan_telep_cimhelye_irva')
            ->add('btlan_ip_ig_szama')
            ->add('btlan_hivatk_eng_sz')
            ->add('btlan_telepengedely')
            ->add('btlan_uzletvez_elarusito')
            ->add('btlan_modositas_valtozas_beszuntetes')
            ->add('btlan_mod_hivatkozasa')
            ->add('btlan_tovabbi_egykoru_adat')
        ;
    }

    public function getName()
    {
        return 'veml_torzslapbundle_torzslap4type';
    }
}
