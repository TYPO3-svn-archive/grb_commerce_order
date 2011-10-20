<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 
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
 * @package grb_domain_model_page
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_GrbCommerceOrder_Domain_Model_Page extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title;
	
	/**
	 * sorting
	 *
	 * @var int
	 */
	protected $sorting;	

	/**
	 * navigationTitle
	 *
	 * @var string
	 */
	protected $navigationTitle;

	/**
	 * parentPage
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbCommerceOrder_Domain_Model_Page>
	 */
	protected $parentPage;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}
	
	/**
	 * Returns the sorting
	 *
	 * @return string $sorting
	 */
	public function getSorting() {
		return $this->sorting;
	}

	/**
	 * Sets the sorting
	 *
	 * @param string $sorting
	 * @return void
	 */
	public function setSorting($sorting) {
		$this->sorting = $sorting;
	}	

	/**
	 * Returns the navigationTitle
	 *
	 * @return string $navigationTitle
	 */
	public function getNavigationTitle() {
		return $this->navigationTitle;
	}

	/**
	 * Sets the navigationTitle
	 *
	 * @param string $navigationTitle
	 * @return void
	 */
	public function setNavigationTitle($navigationTitle) {
		$this->navigationTitle = $navigationTitle;
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->parentPage = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Adds a Page
	 *
	 * @param Tx_GrbCommerceOrder_Domain_Model_Page $parentPage
	 * @return void
	 */
	public function addParentPage(Tx_GrbCommerceOrder_Domain_Model_Page $parentPage) {
		$this->parentPage->attach($parentPage);
	}

	/**
	 * Removes a Page
	 *
	 * @param Tx_GrbCommerceOrder_Domain_Model_Page $parentPageToRemove The Page to be removed
	 * @return void
	 */
	public function removeParentPage(Tx_GrbCommerceOrder_Domain_Model_Page $parentPageToRemove) {
		$this->parentPage->detach($parentPageToRemove);
	}

	/**
	 * Returns the parentPage
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_GrbCommerceOrder_Domain_Model_Page> $parentPage
	 */
	public function getParentPage() {
		return $this->parentPage;
	}

	/**
	 * Sets the parentPage
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_GrbCommerceOrder_Domain_Model_Page> $parentPage
	 * @return void
	 */
	public function setParentPage(Tx_Extbase_Persistence_ObjectStorage $parentPage) {
		$this->parentPage = $parentPage;
	}

}
?>