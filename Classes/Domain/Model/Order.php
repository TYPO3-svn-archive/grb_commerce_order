<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Juerg Langhard <langhard@greenbanana.ch>, GreenBanana GmbH
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

include t3lib_extMgm::extPath('pdf_generator2','class.tx_pdfgenerator2.php');

/**
 *
 *
 * @package grb_commerce_order
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_GrbCommerceOrder_Domain_Model_Order extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * pid
	 *
	 * @var string $pid
	 */
	protected $pid;	

	/**
	 * newPid
	 *
	 * @var string $newPid
	 */
	protected $newPid;	
		
	/**
	 * orderId
	 *
	 * @var string
	 */
	protected $orderId;

	/**
	 * sumPriceNet
	 *
	 * @var integer
	 */
	protected $sumPriceNet;

	/**
	 * sumPriceGross
	 *
	 * @var integer
	 */
	protected $sumPriceGross;

	/**
	 * custFeUser
	 *
	 * @var integer
	 */
	protected $custFeUser;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}
	
  	/**
	 * Getter for pid
	 *
	 * @return int pid
	 */
	public function getPid() {
		return $this->pid;
	}

	/**
	 * Setter for pid
	 *
	 * @param string $pid pid
	 * @return void
	 */
	public function setPid($pid) {
		$this->pid = $pid;
		$this->newPid = $pid;
	}	
		
	/**
	 * Returns the orderId
	 *
	 * @return string $orderId
	 */
	public function getOrderId() {
		return $this->orderId;
	}

	/**
	 * Sets the orderId
	 *
	 * @param string $orderId
	 * @return void
	 */
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
	}	

	/**
	 * Returns the sumPriceNet
	 *
	 * @return integer $sumPriceNet
	 */
	public function getSumPriceNet() {
		return $this->sumPriceNet/100;
	}

	/**
	 * Sets the sumPriceNet
	 *
	 * @param integer $sumPriceNet
	 * @return void
	 */
	public function setSumPriceNet($sumPriceNet) {
		$this->sumPriceNet = $sumPriceNet;
	}

	/**
	 * Returns the sumPriceGross
	 *
	 * @return integer $sumPriceGross
	 */
	public function getSumPriceGross() {
		return $this->sumPriceGross/100;
	}

	/**
	 * Sets the sumPriceGross
	 *
	 * @param integer $sumPriceGross
	 * @return void
	 */
	public function setSumPriceGross($sumPriceGross) {
		$this->sumPriceGross = $sumPriceGross;
	}

	/**
	 * Returns the custFeUser
	 *
	 * @return integer $custFeUser
	 */
	public function getCustFeUser() {
		return $this->custFeUser;
	}

	/**
	 * Sets the custFeUser
	 *
	 * @param integer $custFeUser
	 * @return void
	 */
	public function setCustFeUser($custFeUser) {
		$this->custFeUser = $custFeUser;
	}
	
	/**
	 * Generate PDF-Link
	 * @return integer
	 */
	public function getFeUserLanguage(){
		$customerRepository = t3lib_div::makeInstance('Tx_GrbCommerceOrder_Domain_Repository_FrontendUserRepository');
		$customer = $customerRepository->findByUid($this->getCustFeUser());	
		$language = $customer->getTxGrbfeusermanagerLanguage();	
		if($language == 'de'){
			return 0;
		}elseif ($language == 'fr'){
			return 1;
		}else{
			return 0;
		}
	}

}
?>