<?php
namespace Drupal\super_hero\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;

class AjaxHeroForm extends FormBase {

	public function getFormId() {
		return 'super_hero_heroajaxform';
	}

	public function buildForm( array $form, FormStateInterface $form_state ) {
		$form ['message'] = [
			'#type'   => 'markup',
			'#markup' => '<div class="result_message"></div>',
		];
		$form ['rival_1'] = [
			'#type'  => 'textfield',
			'#title' => $this->t( 'Rival One' ),
		];
		$form ['rival_2'] = [
			'#type'  => 'textfield',
			'#title' => $this->t( 'Rival Two' ),
		];

		$form['submit'] = [
			'#type'  => 'button',
			'#value' => 'Who will win ?',
			'#ajax'  => [
				'callback' => '::setMeassage',
			],
		];
		return $form;
	}
	public function setMeassage( array &$form, FormStateInterface $form_state ) {
		$winner   = rand( 1, 2 );
		$response = new AjaxResponse();
		$response->addCommand(
			new HtmlCommand(
				'.result_message',
				'Winner is ' . $form_state->getValue( 'rival_' . $winner )
			)
		);
		return $response;
	}
	public function submitForm( array &$form, FormStateInterface $form_state ) {

	}

}
