<?php
namespace DUK\Arrangementer\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Stefan Kreisberg <stefan@shufflebee.dk>, ShuffleBee
 *  			Michael Høier Clausen <michael@duk.dk>, DUK
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
 * Test case for class DUK\Arrangementer\Controller\StedController.
 *
 * @author Stefan Kreisberg <stefan@shufflebee.dk>
 * @author Michael Høier Clausen <michael@duk.dk>
 */
class StedControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \DUK\Arrangementer\Controller\StedController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('DUK\\Arrangementer\\Controller\\StedController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllStedsFromRepositoryAndAssignsThemToView() {

		$allSteds = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$stedRepository = $this->getMock('', array('findAll'), array(), '', FALSE);
		$stedRepository->expects($this->once())->method('findAll')->will($this->returnValue($allSteds));
		$this->inject($this->subject, 'stedRepository', $stedRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('steds', $allSteds);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenStedToView() {
		$sted = new \DUK\Arrangementer\Domain\Model\Sted();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('sted', $sted);

		$this->subject->showAction($sted);
	}
}
