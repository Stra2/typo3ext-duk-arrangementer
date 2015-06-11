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
 * Arrangement
 */
class Arrangement extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * titel
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $titel = '';

	/**
	 * beskrivelse
	 *
	 * @var string
	 */
	protected $beskrivelse = '';

	/**
	 * Start dato
	 *
	 * @var \DateTime
	 */
	protected $startDato = NULL;

	/**
	 * Slut dato
	 *
	 * @var \DateTime
	 */
	protected $slutDato = NULL;

	/**
	 * pris
	 *
	 * @var string
	 */
	protected $pris = '';

	/**
	 * Åben for tilmelding
	 *
	 * @var boolean
	 */
	protected $openForParticipants = FALSE;

	/**
	 * tilmeldingstekst
	 *
	 * @var string
	 */
	protected $tilmeldingstekst = '';

	/**
	 * Målgruppe
	 *
	 * @var string
	 */
	protected $maalgruppe = '';

	/**
	 * Registrerings dato
	 *
	 * @var \DateTime
	 */
	protected $registreringsDato = NULL;

	/**
	 * sted
	 *
	 * @var \DUK\Arrangementer\Domain\Model\Sted
	 */
	protected $sted = NULL;

	/**
	 * Returns the titel
	 *
	 * @return string $titel
	 */
	public function getTitel() {
		return $this->titel;
	}

	/**
	 * Sets the titel
	 *
	 * @param string $titel
	 * @return void
	 */
	public function setTitel($titel) {
		$this->titel = $titel;
	}

	/**
	 * Returns the beskrivelse
	 *
	 * @return string $beskrivelse
	 */
	public function getBeskrivelse() {
		return $this->beskrivelse;
	}

	/**
	 * Sets the beskrivelse
	 *
	 * @param string $beskrivelse
	 * @return void
	 */
	public function setBeskrivelse($beskrivelse) {
		$this->beskrivelse = $beskrivelse;
	}

	/**
	 * Returns the startDato
	 *
	 * @return \DateTime $startDato
	 */
	public function getStartDato() {
		return $this->startDato;
	}

	/**
	 * Sets the startDato
	 *
	 * @param \DateTime $startDato
	 * @return void
	 */
	public function setStartDato(\DateTime $startDato) {
		$this->startDato = $startDato;
	}

	/**
	 * Returns the slutDato
	 *
	 * @return \DateTime $slutDato
	 */
	public function getSlutDato() {
		return $this->slutDato;
	}

	/**
	 * Sets the slutDato
	 *
	 * @param \DateTime $slutDato
	 * @return void
	 */
	public function setSlutDato(\DateTime $slutDato) {
		$this->slutDato = $slutDato;
	}

	/**
	 * Returns the pris
	 *
	 * @return string $pris
	 */
	public function getPris() {
		return $this->pris;
	}

	/**
	 * Sets the pris
	 *
	 * @param string $pris
	 * @return void
	 */
	public function setPris($pris) {
		$this->pris = $pris;
	}

	/**
	 * Returns the openForParticipants
     * If the registreringsdato is not set, or is set before today,
     * it is reflected in the return value of this function.
	 *
	 * @return boolean $openForParticipants
	 */
	public function getOpenForParticipants() {
        $today = new \DateTime('now');
        if($this->getRegistreringsDato() !== NULL) {
            if($this->getRegistreringsDato() < $today) {
                $this->setOpenForParticipants(false);
            }
        }
        return $this->openForParticipants;
	}

	/**
	 * Sets the openForParticipants
	 *
	 * @param boolean $openForParticipants
	 * @return void
	 */
	public function setOpenForParticipants($openForParticipants) {
		$this->openForParticipants = $openForParticipants;
	}

	/**
	 * Returns the boolean state of openForParticipants
	 *
	 * @return boolean
	 */
	public function isOpenForParticipants() {
		return $this->openForParticipants;
	}

	/**
	 * Returns the tilmeldingstekst
	 *
	 * @return string $tilmeldingstekst
	 */
	public function getTilmeldingstekst() {
		return $this->tilmeldingstekst;
	}

	/**
	 * Sets the tilmeldingstekst
	 *
	 * @param string $tilmeldingstekst
	 * @return void
	 */
	public function setTilmeldingstekst($tilmeldingstekst) {
		$this->tilmeldingstekst = $tilmeldingstekst;
	}

	/**
	 * Returns the maalgruppe
	 *
	 * @return string $maalgruppe
	 */
	public function getMaalgruppe() {
		return $this->maalgruppe;
	}

	/**
	 * Sets the maalgruppe
	 *
	 * @param string $maalgruppe
	 * @return void
	 */
	public function setMaalgruppe($maalgruppe) {
		$this->maalgruppe = $maalgruppe;
	}

	/**
	 * Returns the registreringsDato
	 *
	 * @return \DateTime $registreringsDato
	 */
	public function getRegistreringsDato() {
		return $this->registreringsDato;
	}

	/**
	 * Sets the registreringsDato
	 *
	 * @param \DateTime $registreringsDato
	 * @return void
	 */
	public function setRegistreringsDato(\DateTime $registreringsDato) {
		$this->registreringsDato = $registreringsDato;
	}

	/**
	 * Returns the sted
	 *
	 * @return \DUK\Arrangementer\Domain\Model\Sted $sted
	 */
	public function getSted() {
		return $this->sted;
	}

	/**
	 * Sets the sted
	 *
	 * @param \DUK\Arrangementer\Domain\Model\Sted $sted
	 * @return void
	 */
	public function setSted(\DUK\Arrangementer\Domain\Model\Sted $sted) {
		$this->sted = $sted;
	}

}