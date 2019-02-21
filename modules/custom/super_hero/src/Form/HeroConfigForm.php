<?php

namespace Drupal\super_hero\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class HeroConfigForm extends ConfigFormBase{
    public function getFormId(){
        return 'super_hero_confighero';
    }
    public function buildForm(array $form, FormStateInterface $form_state){
        $config = $this->config('super_hero.settings');
        
        $form['hero_list_title'] = [
            "#type" => 'textfield',
            '#title' => $this->t('Here is List title'),
            '#default_value' => $config->get('hero_list_title')
        ];
        return parent::buildForm($form, $form_state);
    }
    protected function getEditableConfigNames(){
        return [
            'super_hero.settings',
        ];
    }
    public function submitForm(array &$form, FormStateInterface $form_state){
        $config = $this->ConfigFactory()->getEditable('super_hero.settings');
        $config->set('hero_list_title', $form_state->getValue('hero_list_title'))
            ->save();
        parent::submitForm($form, $form_state);
    }
}