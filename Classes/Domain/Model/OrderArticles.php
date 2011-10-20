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


/**
 *
 *
 * @package grb_commerce_order
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 *
 */
class Tx_GrbCommerceOrder_Domain_Model_OrderArticles extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * orderId
	 *
	 * @var string
	 */
	protected $orderId;

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title;

	/**
	 * priceNet
	 *
	 * @var integer
	 */
	protected $priceNet;

	/**
	 * priceGross
	 *
	 * @var integer
	 */
	protected $priceGross;

	/**
	 * amount
	 *
	 * @var integer
	 */
	protected $amount;

	/**
	 * articleTypeUid
	 *
	 * @var integer
	 */
	protected $articleTypeUid;

	/**
	 * articleNumber
	 *
	 * @var string
	 */
	protected $articleNumber;

	/**
	 * subtitle
	 *
	 * @var string
	 */
	protected $subtitle;

	/**
	 * tax
	 *
	 * @var float
	 */
	protected $tax;

	/**
	 * orderUid
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_GrbCommerceOrder_Domain_Model_Order>
	 */
	protected $orderUid;

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
		$this->orderUid = new Tx_Extbase_Persistence_ObjectStorage();
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
	 * Adds a Order
	 *
	 * @param Tx_GrbCommerceOrder_Domain_Model_Order $orderUid
	 * @return void
	 */
	public function addOrderUid(Tx_GrbCommerceOrder_Domain_Model_Order $orderUid) {
		$this->orderUid->attach($orderUid);
	}

	/**
	 * Removes a Order
	 *
	 * @param Tx_GrbCommerceOrder_Domain_Model_Order $orderUidToRemove The Order to be removed
	 * @return void
	 */
	public function removeOrderUid(Tx_GrbCommerceOrder_Domain_Model_Order $orderUidToRemove) {
		$this->orderUid->detach($orderUidToRemove);
	}

	/**
	 * Returns the orderUid
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_GrbCommerceOrder_Domain_Model_Order> $orderUid
	 */
	public function getOrderUid() {
		return $this->orderUid;
	}

	/**
	 * Sets the orderUid
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_GrbCommerceOrder_Domain_Model_Order> $orderUid
	 * @return void
	 */
	public function setOrderUid(Tx_Extbase_Persistence_ObjectStorage $orderUid) {
		$this->orderUid = $orderUid;
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
	 * Returns the priceNet
	 *
	 * @return integer $priceNet
	 */
	public function getPriceNet() {
		return $this->priceNet/100;
	}

	/**
	 * Sets the priceNet
	 *
	 * @param integer $priceNet
	 * @return void
	 */
	public function setPriceNet($priceNet) {
		$this->priceNet = $priceNet;
	}

	/**
	 * Returns the priceGross
	 *
	 * @return integer $priceGross
	 */
	public function getPriceGross() {
		return $this->priceGross/100;
	}

	/**
	 * Sets the priceGross
	 *
	 * @param integer $priceGross
	 * @return void
	 */
	public function setPriceGross($priceGross) {
		$this->priceGross = $priceGross;
	}

	/**
	 * Returns the amount
	 *
	 * @return integer $amount
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * Sets the amount
	 *
	 * @param integer $amount
	 * @return void
	 */
	public function setAmount($amount) {
		$this->amount = $amount;
	}

	/**
	 * Returns the articleTypeUid
	 *
	 * @return integer $articleTypeUid
	 */
	public function getArticleTypeUid() {
		return $this->articleTypeUid;
	}

	/**
	 * Sets the articleTypeUid
	 *
	 * @param integer $articleTypeUid
	 * @return void
	 */
	public function setArticleTypeUid($articleTypeUid) {
		$this->articleTypeUid = $articleTypeUid;
	}

	/**
	 * Returns the articleNumber
	 *
	 * @return string $articleNumber
	 */
	public function getArticleNumber() {
		return $this->articleNumber;
	}

	/**
	 * Sets the articleNumber
	 *
	 * @param string $articleNumber
	 * @return void
	 */
	public function setArticleNumber($articleNumber) {
		$this->articleNumber = $articleNumber;
	}

	/**
	 * Returns the subtitle
	 *
	 * @return string $subtitle
	 */
	public function getSubtitle() {
		return $this->subtitle;
	}

	/**
	 * Sets the subtitle
	 *
	 * @param string $subtitle
	 * @return void
	 */
	public function setSubtitle($subtitle) {
		$this->subtitle = $subtitle;
	}

	/**
	 * Returns the tax
	 *
	 * @return float $tax
	 */
	public function getTax() {
		return $this->tax;
	}

	/**
	 * Sets the tax
	 *
	 * @param float $tax
	 * @return void
	 */
	public function setTax($tax) {
		$this->tax = $tax;
	}

}
?>