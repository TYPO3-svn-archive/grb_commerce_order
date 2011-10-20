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
class Tx_GrbCommerceOrder_Controller_OrderController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * orderRepository
	 *
	 * @var Tx_GrbCommerceOrder_Domain_Repository_OrderRepository
	 */
	protected $orderRepository;
	
	/**
	 * orderArticleRepository
	 *
	 * @var Tx_GrbCommerceOrder_Domain_Repository_OrderArticlesRepository
	 */
	protected $orderArticleRepository;	
	
	/**
	 * pageRepository
	 *
	 * @var Tx_GrbCommerceOrder_Domain_Repository_PageRepository
	 */
	protected $pageRepository;		

	/**
	 * injectOrderRepository
	 *
	 * @param Tx_GrbCommerceOrder_Domain_Repository_OrderRepository $orderRepository
	 * @return void
	 */
	public function injectOrderRepository(Tx_GrbCommerceOrder_Domain_Repository_OrderRepository $orderRepository) {
		$this->orderRepository = $orderRepository;
	}
	
	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->pageRepository 			= t3lib_div::makeInstance('Tx_GrbCommerceOrder_Domain_Repository_PageRepository');
		$this->orderArticleRepository 	= t3lib_div::makeInstance('Tx_GrbCommerceOrder_Domain_Repository_OrderArticlesRepository');
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		
		// Orders
		$orders = $this->orderRepository->findAllByPid($_GET['id']);
		$this->view->assign('orders', $orders);
		
		// Params for Invoice
		if($_SERVER['HTTPS']=='on'){
			$invoiceUri = 'https://'.$_SERVER['SERVER_NAME'].'/';
		}else{
			$invoiceUri = 'http://'.$_SERVER['SERVER_NAME'].'/';
		}
		$this->view->assign('invoiceUri', 	$invoiceUri);
		$this->view->assign('invoicePid', 	$this->settings['invoicePid']);
		$this->view->assign('typePdf', 		$this->settings['typePdf']);
		
		// Move Orders
		$this->view->assign('orderPages', $this->pageRepository->findCommerceOrderPages($this->settings['orderPid']));
	}

	/**
	 * action show
	 *
	 * @param $order
	 * @return void
	 */
	public function showAction(Tx_GrbCommerceOrder_Domain_Model_Order $order) {
		$this->view->assign('order', $order);
	}
	
	/**
	 * action update
	 *
	 * @param $orderMod 
	 * @return void
	 */
	public function updateAction(Tx_GrbCommerceOrder_Domain_Model_Order $orderMod) {
		$this->orderRepository->update($orderMod);
		
		// Move orderArticles to the same folder
		$articles = $this->orderArticleRepository->findByOrderUid($orderMod);
		foreach ($articles as $article){
			$article->setPid($orderMod->getPid());
			$this->orderArticleRepository->update($article);
		}

		$orderWasMovedToPage = $this->pageRepository->findByUid($orderMod->getPid());
		$this->flashMessageContainer->add('Order-ID '.$orderMod->getOrderId().' was moved to Page "'.$orderWasMovedToPage->getTitle().'" [uid:'.$orderWasMovedToPage->getUid().' ]');
		$this->redirect('list');
	}	

}
?>