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
 * Test case for class \DUK\Arrangementer\Domain\Model\Sted.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Stefan Kreisberg <stefan@shufflebee.dk>
 * @author Michael Høier Clausen <michael@duk.dk>
 */
class StedTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \DUK\Arrangementer\Domain\Model\Sted
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \DUK\Arrangementer\Domain\Model\Sted();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNavnReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNavn()
		);
	}

	/**
	 * @test
	 */
	public function setNavnForStringSetsNavn() {
		$this->subject->setNavn('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'navn',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGadenavnOgNummerReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getGadenavnOgNummer()
		);
	}

	/**
	 * @test
	 */
	public function setGadenavnOgNummerForStringSetsGadenavnOgNummer() {
		$this->subject->setGadenavnOgNummer('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'gadenavnOgNummer',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPostNummerReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPostNummer()
		);
	}

	/**
	 * @test
	 */
	public function setPostNummerForStringSetsPostNummer() {
		$this->subject->setPostNummer('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'postNummer',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBynavnReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBynavn()
		);
	}

	/**
	 * @test
	 */
	public function setBynavnForStringSetsBynavn() {
		$this->subject->setBynavn('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'bynavn',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUrlReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getUrl()
		);
	}

	/**
	 * @test
	 */
	public function setUrlForStringSetsUrl() {
		$this->subject->setUrl('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'url',
			$this->subject
		);
	}
}
