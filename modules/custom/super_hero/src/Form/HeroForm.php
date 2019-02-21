<?php
namespace Drupal\super_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class HeroForm extends FormBase {

	public function getFormId() {
		return 'super_hero_heroform';
	}

	public function buildForm( array $form, FormStateInterface $form_state ) {
		$form ['rival_1'] = [
			'#type'  => 'textfield',
			'#title' => $this->t( 'Rival One' ),
		];
		$form ['rival_2'] = [
			'#type'  => 'textfield',
			'#title' => $this->t( 'Rival Two' ),
		];
        $form['msg'] = array(
            '#type' => 'textarea',
            '#title' => $this
              ->t('Message'),
          );
        $form['copy'] = array(
            '#type' => 'checkbox',
            '#title' => $this
              ->t('Send me a copy'),
          );
		
        $form['settings']['active'] = array(
            '#type' => 'radios',
            '#title' => $this
              ->t('Poll status'),
            '#default_value' => 1,
            '#options' => array(
              0 => $this
                ->t('Closed'),
              1 => $this
                ->t('Active'),
            ),
          );
          $form['example_select'] = [
            '#type' => 'select',
            '#title' => $this
              ->t('Select element'),
            '#options' => [
              '1' => $this
                ->t('One'),
              '2' => [
                '2.1' => $this
                  ->t('Two point one'),
                '2.2' => $this
                  ->t('Two point two'),
              ],
              '3' => $this
                ->t('Three'),
            ],
          ];
          $form ['submit']  = [
			'#type'  => 'submit',
			'#value' => $this->t( 'Who will win?' ),
		];
        return $form;
	}
	public function submitForm( array &$form, FormStateInterface $form_state ) {
		$winner = rand( 1, 2 );
		drupal_set_message(
			'Winner between ' . $form_state->getValue( 'rival_1' ) . ' And ' . $form_state->getValue( 'rival_2' ) . ' is :' . $form_state->getValue( 'rival_'. $winner)
		);

	}
    public function validateForm( array &$form, FormStateInterface $form_state ) {
		if( empty($form_state->getValue( 'rival_1' )) ){
            $form_state->setErrorByName('rival_1', 'Please enter some values for Rival first');
        }
        if( empty($form_state->getValue( 'rival_2' )) ){
            $form_state->setErrorByName('rival_2', 'Please enter some values for Rival second');
        }
	}
}
