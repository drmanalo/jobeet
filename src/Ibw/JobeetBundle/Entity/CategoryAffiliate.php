<?php

namespace Ibw\JobeetBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryAffiliate
 */
class CategoryAffiliate {
	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var \Ibw\JobeetBundle\Entity\Category
	 */
	private $category;

	/**
	 * @var \Ibw\JobeetBundle\Entity\Affiliate
	 */
	private $affiliate;

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set category
	 *
	 * @param \Ibw\JobeetBundle\Entity\Category $category
	 * @return CategoryAffiliate
	 */
	public function setCategory(
			\Ibw\JobeetBundle\Entity\Category $category = null) {
		$this->category = $category;

		return $this;
	}

	/**
	 * Get category
	 *
	 * @return \Ibw\JobeetBundle\Entity\Category 
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Set affiliate
	 *
	 * @param \Ibw\JobeetBundle\Entity\Affiliate $affiliate
	 * @return CategoryAffiliate
	 */
	public function setAffiliate(
			\Ibw\JobeetBundle\Entity\Affiliate $affiliate = null) {
		$this->affiliate = $affiliate;

		return $this;
	}

	/**
	 * Get affiliate
	 *
	 * @return \Ibw\JobeetBundle\Entity\Affiliate 
	 */
	public function getAffiliate() {
		return $this->affiliate;
	}
}