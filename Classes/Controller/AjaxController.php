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
class Tx_GrbCommerceOrder_Controller_AjaxController extends Tx_Extbase_MVC_Controller_ActionController {


	/**
	 * orderArticlesRepository
	 *
	 * @var Tx_GrbCommerceOrder_Domain_Repository_OrderArticlesRepository
	 */
	protected $orderArticlesRepository;	
	
	/**
	 * customer (fe_user)
	 *
	 * @var Tx_GrbCommerceOrder_Domain_Repository_FrontendUserRepository
	 */
	protected $customerRepository;		

	
	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->orderArticlesRepository 		= t3lib_div::makeInstance('Tx_GrbCommerceOrder_Domain_Repository_OrderArticlesRepository');
		$this->customerRepository 			= t3lib_div::makeInstance('Tx_GrbCommerceOrder_Domain_Repository_FrontendUserRepository');
	}

	/**
	 * showArticlesAction
	 *
	 * @return void
	 * @param order integer
	 */
	public function showArticlesAction($order) {
		$articles = $this->orderArticlesRepository->findByOrderUid($order);
		$this->view->assign('articles', 	$articles);
		$this->view->assign('order', 		$order);
	}
	
	/**
	 * showCustomerDetails
	 *
	 * @return 	void
	 * @param 	custFeUser integer
	 */
	public function showCustomerDetailsAction($custFeUser) {
		$customerFrontendUser = $this->customerRepository->findByUid($custFeUser);
		$this->view->assign('customerFrontendUser', 	$customerFrontendUser);
	}
	
}
?>