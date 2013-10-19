<?php
use Ibw\JobeetBundle\Utils\Jobeet as Jobeet;

class Job {
	
	public function getCompanySlug() {
		return Jobeet::slugify($this->getCompany());
	}

	public function getPositionSlug() {
		return Jobeet::slugify($this->getPosition());
	}

	public function getLocationSlug() {
		return Jobeet::slugify($this->getLocation());
	}
	
}
