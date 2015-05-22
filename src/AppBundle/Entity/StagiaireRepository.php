<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * StagiaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class StagiaireRepository extends EntityRepository
{
	public function findAllWithEntreprise()
	{
		$query= $this->getEntityManager()
			->createQuery(
				'SELECT s, e FROM AppBundle:Stagiaire s
				JOIN s.entreprise e');

		return $query->getResult();
	}
}
