<?php

namespace Veml\TorzslapBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class Torzslap3Type extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('forrashely_kot')
            ->add('forrashely_op')
            ->add('jelzet_tanev')
            ->add('jelzet_fsz')
            ->add('novendek_neve_szab')
            ->add('novendek_neve_irva')
            ->add('novendek_szul_helye_szab')
            ->add('novendek_szul_helye_irva')
            ->add('novendek_szul_ideje_ev')
            ->add('novendek_szul_ideje_ho')
            ->add('novendek_szul_ideje_nap')
            ->add('gondviselo_neve_szab')
            ->add('gondviselo_fogl_szab')
            ->add('gondviselo_allap_fogl_viszony_irva')
            ->add('lakhely_lakcim_utca_szab')
            ->add('lakhely_lakcim_utca_irva')
            ->add('hazszam')
            ->add('anyanyelve')
            ->add('vallasa_rk')
            ->add('vallasa_ref')
            ->add('vallasa_ev')
            ->add('vallasa_izr')
            ->add('vallasa_ao')
            ->add('vallasa_c')
            ->add('osztalya_1')
            ->add('osztalya_2')
            ->add('osztalya_3')
            ->add('osztalya_4')
            ->add('elotte')
            ->add('tovabbi_egykoru_adat')
            ->add('megjegyzesek')
        ;
    }

    public function getName()
    {
        return 'veml_torzslapbundle_torzslap3type';
    }
}
