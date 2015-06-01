<?php

namespace DUK\Arrangementer\Tests\Unit\Domain\Model;

/***************************************************************
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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \DUK\Arrangementer\Domain\Model\Arrangement.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Stefan Kreisberg <stefan@shufflebee.dk>
 * @author Michael Høier Clausen <michael@duk.dk>
 */
class ArrangementTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \DUK\Arrangementer\Domain\Model\Arrangement
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \DUK\Arrangementer\Domain\Model\Arrangement();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitelReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitel()
		);
	}

	/**
	 * @test
	 */
	public function setTitelForStringSetsTitel() {
		$this->subject->setTitel('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'titel',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBeskrivelseReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBeskrivelse()
		);
	}

	/**
	 * @test
	 */
	public function setBeskrivelseForStringSetsBeskrivelse() {
		$this->subject->setBeskrivelse('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'beskrivelse',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStartDatoReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getStartDato()
		);
	}

	/**
	 * @test
	 */
	public function setStartDatoForDateTimeSetsStartDato() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setStartDato($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'startDato',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSlutDatoReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getSlutDato()
		);
	}

	/**
	 * @test
	 */
	public function setSlutDatoForDateTimeSetsSlutDato() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setSlutDato($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'slutDato',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPrisReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPris()
		);
	}

	/**
	 * @test
	 */
	public function setPrisForStringSetsPris() {
		$this->subject->setPris('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'pris',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOpenForParticipantsReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getOpenForParticipants()
		);
	}

	/**
	 * @test
	 */
	public function setOpenForParticipantsForBooleanSetsOpenForParticipants() {
		$this->subject->setOpenForParticipants(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'openForParticipants',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTilmeldingstekstReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTilmeldingstekst()
		);
	}

	/**
	 * @test
	 */
	public function setTilmeldingstekstForStringSetsTilmeldingstekst() {
		$this->subject->setTilmeldingstekst('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'tilmeldingstekst',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMaalgruppeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMaalgruppe()
		);
	}

	/**
	 * @test
	 */
	public function setMaalgruppeForStringSetsMaalgruppe() {
		$this->subject->setMaalgruppe('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'maalgruppe',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRegistreringsDatoReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getRegistreringsDato()
		);
	}

	/**
	 * @test
	 */
	public function setRegistreringsDatoForDateTimeSetsRegistreringsDato() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setRegistreringsDato($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'registreringsDato',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStedReturnsInitialValueForSted() {
		$this->assertEquals(
			NULL,
			$this->subject->getSted()
		);
	}

	/**
	 * @test
	 */
	public function setStedForStedSetsSted() {
		$stedFixture = new \DUK\Arrangementer\Domain\Model\Sted();
		$this->subject->setSted($stedFixture);

		$this->assertAttributeEquals(
			$stedFixture,
			'sted',
			$this->subject
		);
	}
}
