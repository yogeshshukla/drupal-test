<?php

namespace Drupal\super_hero\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\super_hero\HeroArticleService;
use Drupal\Core\Config\ConfigFactory;

class SuperHeroController extends ControllerBase {
	private $heroArticleService;
	protected $configFactory;
	protected $currentUser;

	public static function create( ContainerInterface $container ) {
		return new static(
			$container->get( 'super_hero.hero_articles' ),
			$container->get( 'config.factory' ),
			$container->get( 'current_user' )
		);
	}
	public function __construct( HeroArticleService $heroArticleService, ConfigFactory $configFactory, $currentUser ) {
		$this->heroArticleService = $heroArticleService;
		$this->configFactory      = $configFactory;
		$this->currentUser        = $currentUser;
	}
	public function heroList() {
		$heroList = array();
		$heroes   = $this->heroArticleService->getHeroArticle();
		foreach ( $heroes as $hero ) {
			$heroList[] = array(
				'title' => $hero->get( 'title' )->getValue()[0]['value'],
				'body'  => $hero->get( 'body' )->getValue()[0]['value'],
			);
		}

		// $heroes = [
		// [ 'name' => 'abcdddddddddddddddddd' ],
		// [ 'name' => 'defffffffffffffffffffffff' ],
		// [ 'name' => 'geh' ],
		// [ 'name' => 'ijk' ],
		// [ 'name' => 'lmn' ],
		// [ 'name' => 'opq' ],
		// [ 'name' => 'rst' ],
		// ];
		if ( $this->currentUser->hasPermission( 'can see hero list' ) ) {
			return [
				'#theme' => 'hero_list',
				'#items' => $heroList,
				'#title' => $this->configFactory->get( 'super_hero.settings' )->get( 'hero_list_title' ),
			];
		} else {
			return [
				'#theme' => 'hero_list',
				'#items' => [],
				'#title' => $this->configFactory->get( 'super_hero.settings' )->get( 'hero_list_title' ),
			];
		}

	}
}
