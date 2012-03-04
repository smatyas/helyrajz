<?php

namespace Veml\TorzslapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class Torzslap1Type extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('sor_kot')
            ->add('lap')
            ->add('oldal')
            ->add('oszlop')
            ->add('hasab')
            ->add('ev')
            ->add('folyoszam')
            ->add('utca_telepules_szab')
            ->add('utca_telepules_irva')
            ->add('hazszam')
            ->add('haz_neve')
            ->add('megholt_neve_szab')
            ->add('megholt_neve_irva')
            ->add('neme_ffi')
            ->add('neme_no')
            ->add('vallasa_rk')
            ->add('vallasa_ref')
            ->add('vallasa_ev')
            ->add('vallasa_izr')
            ->add('kora_ev')
            ->add('kora_ho')
            ->add('kora_het')
            ->add('kora_nap')
            ->add('kora_ora')
            ->add('halva_szuletett')
            ->add('foglalkozasa_szab')
            ->add('allap_fogl_viszony_irva')
            ->add('cs_all_notlen_hajadon')
            ->add('cs_all_hazas')
            ->add('cs_all_ozvegy')
            ->add('cs_all_elvalt')
            ->add('maradt_kk_es_vagyon')
            ->add('halal_ideje_ev')
            ->add('halal_ideje_ho')
            ->add('halal_ideje_nap')
            ->add('halal_oka_szab')
            ->add('halal_oka_irva')
            ->add('tovabbi_egykoru_adat')
            ->add('megjegyzesek')
        ;
    }

    public function getName()
    {
        return 'veml_torzslapbundle_torzslap1type';
    }
}
