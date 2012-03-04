<?php

namespace Veml\TorzslapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class Torzslap2Type extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('forrashely_felek')
            ->add('forrashely_akv_neme')
            ->add('forrashely_pd')
            ->add('hiv_szekhely')
            ->add('jelzet_ev')
            ->add('jelzet_folyoszam')
            ->add('halal_ideje_ev')
            ->add('halal_ideje_ho')
            ->add('halal_ideje_nap')
            ->add('szul_hely_szab')
            ->add('szul_hely_irva')
            ->add('lakhely_utca_szab')
            ->add('lakhely_utca_irva')
            ->add('lakhely_hazszam')
            ->add('megholt_neve_szab')
            ->add('megholt_neve_irva')
            ->add('neme_ffi')
            ->add('neme_no')
            ->add('megholt_fogl_szab')
            ->add('allap_fogl_viszony_irva')
            ->add('cs_all_notlen_hajadon')
            ->add('cs_all_hazas')
            ->add('cs_all_ozvegy')
            ->add('cs_all_elvalt')
            ->add('kora_ev')
            ->add('kora_ho')
            ->add('kora_het')
            ->add('kora_nap')
            ->add('kora_ora')
            ->add('halva_szuletett')
            ->add('halal_oka_szab')
            ->add('halal_oka_irva')
            ->add('tovabbi_egykoru_adat')
            ->add('megjegyzesek')
        ;
    }

    public function getName()
    {
        return 'veml_torzslapbundle_torzslap2type';
    }
}
