<?php
namespace DUK\Arrangementer\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Stefan Kreisberg <stefan@shufflebee.dk>, ShuffleBee
 *           Michael Høier Clausen <michael@duk.dk>, DUK
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Sted
 */
class Sted extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * navn
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $navn = '';

	/**
	 * gadenavnOgNummer
	 *
	 * @var string
	 */
	protected $gadenavnOgNummer = '';

	/**
	 * postNummer
	 *
	 * @var string
	 */
	protected $postNummer = '';

	/**
	 * By
	 *
	 * @var string
	 */
	protected $bynavn = '';

	/**
	 * url
	 *
	 * @var string
	 */
	protected $url = '';

	/**
	 * Returns the navn
	 *
	 * @return string $navn
	 */
	public function getNavn() {
		return $this->navn;
	}

	/**
	 * Sets the navn
	 *
	 * @param string $navn
	 * @return void
	 */
	public function setNavn($navn) {
		$this->navn = $navn;
	}

	/**
	 * Returns the gadenavnOgNummer
	 *
	 * @return string $gadenavnOgNummer
	 */
	public function getGadenavnOgNummer() {
		return $this->gadenavnOgNummer;
	}

	/**
	 * Sets the gadenavnOgNummer
	 *
	 * @param string $gadenavnOgNummer
	 * @return void
	 */
	public function setGadenavnOgNummer($gadenavnOgNummer) {
		$this->gadenavnOgNummer = $gadenavnOgNummer;
	}

	/**
	 * Returns the postNummer
	 *
	 * @return string $postNummer
	 */
	public function getPostNummer() {
		return $this->postNummer;
	}

	/**
	 * Sets the postNummer
	 *
	 * @param string $postNummer
	 * @return void
	 */
	public function setPostNummer($postNummer) {
		$this->postNummer = $postNummer;
	}

	/**
	 * Returns the bynavn
	 *
	 * @return string $bynavn
	 */
	public function getBynavn() {
		return $this->bynavn;
	}

	/**
	 * Sets the bynavn
	 *
	 * @param string $bynavn
	 * @return void
	 */
	public function setBynavn($bynavn) {
		$this->bynavn = $bynavn;
	}

	/**
	 * Returns the url
	 *
	 * @return string $url
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets the url
	 *
	 * @param string $url
	 * @return void
	 */
	public function setUrl($url) {
		$this->url = $url;
	}

}