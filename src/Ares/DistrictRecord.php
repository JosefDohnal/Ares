<?php

namespace Defr\Ares;


class DistrictRecord
{

	/** @var  string */
	private $district;

	/** @var  string */
	private $abbreviation;

	/** @var  string */
	private $region;

	/**
	 * @return string
	 */
	public function getDistrict()
	{
		return $this->district;
	}

	/**
	 * @param string $district
	 */
	public function setDistrict($district)
	{
		$this->district = $district;
	}

	/**
	 * @return string
	 */
	public function getAbbreviation()
	{
		return $this->abbreviation;
	}

	/**
	 * @param string $abbreviation
	 */
	public function setAbbreviation($abbreviation)
	{
		$this->abbreviation = $abbreviation;
	}

	/**
	 * @return string
	 */
	public function getRegion()
	{
		return $this->region;
	}

	/**
	 * @param string $region
	 */
	public function setRegion($region)
	{
		$this->region = $region;
	}

}
