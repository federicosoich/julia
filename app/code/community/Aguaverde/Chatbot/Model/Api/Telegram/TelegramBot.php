<?php
	// class that handles all Telegram requests.
	require_once("Telegram.php");
	//$api_path = Mage::getModuleDir('', 'Aguaverde_Chatbot') . DS . "Model" . DS . "Api" . DS . "witAI" . DS;
	//require_once($giutapi_path . "witAI.php");

// class Aguaverde_Chatbot_Model_Api_Telegram_TelegramBot extends Aguaverde_Chatbot_Model_Api_Telegram_Telegram
	class TelegramBot extends Telegram
	{
		public $_text;
		public $_chatId;
		public $_messageId;
		public $_audioPath;

		public function postMessage($chatId, $message)
		{
			return $this->sendMessage(array('chat_id' => $chatId, 'text' => $message));
		}
	}
