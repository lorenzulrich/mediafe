<?php
namespace TYPO3\MediaFe\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Lorenz Ulrich <lorenz.ulrich@visol.ch>
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
 *
 *
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class MediaFrontendController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * mediaRepository
	 *
	 * @var \TYPO3\CMS\Media\Domain\Repository\MediaRepository
	 * @inject
	 */
	protected $mediaRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {

		$medias =$this->mediaRepository->findAll();

		\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($medias);

		$this->view->assign('medias', $medias);
	}

}
?>