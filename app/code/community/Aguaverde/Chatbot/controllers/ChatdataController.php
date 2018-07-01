<?php
class Aguaverde_Chatbot_ChatdataController extends Mage_Core_Controller_Front_Action {
	public function indexAction()
	{
		$this->loadLayout();
		$this->getLayout()->getBlock('root')->setTemplate("aguaverde_chatbot_view.phtml"); // use root block to output pure values without html tags
		$this->renderLayout();
	}

	public function telegramAction()
	{
		$this->loadLayout();
		$this->getLayout()->getBlock('root')->setTemplate("aguaverde_chatbot_view.phtml"); // use root block to output pure values without html tags
		//$this->getLayout()->getBlock('root')->setTemplate("aguaverde_chatbot_view.phtml")->setTitle(Mage::helper('core')->__('Chatbot')); // use root block to output pure values without html tags
		//$this->getLayout()->getBlock('head')->setTitle(Mage::helper('core')->__('Chatbot'));
		//$this->getLayout()->getBlock('head')->setTitle($this->__('My Title')); // then this works
		//$this->getLayout()->unsetBlock('head');
		$this->renderLayout();
	}

	public function facebookAction()
	{
		$this->loadLayout();
		$this->getLayout()->getBlock('root')->setTemplate("aguaverde_chatbot_view.phtml"); // use root block to output pure values without html tags
		$this->renderLayout();
	}
}