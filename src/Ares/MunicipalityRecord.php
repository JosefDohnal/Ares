<?php
/**
 * Created by PhpStorm.
 * User: pepa
 * Date: 03.04.2017
 * Time: 18:10
 */

namespace Defr\Ares;


class MunicipalityRecord
{
	/** @var string */
	private $id;
	/** @var string */
	private $name;
	/** @var string */
	private $zip;

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getZip()
	{
		return $this->zip;
	}

	/**
	 * @param string $zip
	 */
	public function setZip($zip)
	{
		$this->zip = $zip;
	}

}
