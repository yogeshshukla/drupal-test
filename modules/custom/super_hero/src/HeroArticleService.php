<?php

namespace Drupal\super_hero;

use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\Core\Entity\EntityManager;

class HeroArticleService {
	private $queryQuery;
	private $entityManager;

	public function __construct( QueryFactory $queryQuery, EntityManager $entityManager ) {
		$this->queryQuery  = $queryQuery;
		$this->entityManager = $entityManager;

	}
	public function getHeroArticle() {
        $articleNods = $this->queryQuery->get('node')->condition('type', 'article')->execute();
        return $this->entityManager->getStorage('node')->loadMultiple($articleNods);
	}
}
