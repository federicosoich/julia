<?php
class Aguaverde_Chatbot_Model_ReplyMode
{
	/**
	 * Provide available enable as a value/label array
	 *
	 * @return array
	 */
	public function toOptionArray()
	{
		return array(
			array('value'=>2, 'label'=>'No Reply'),
			array('value'=>0, 'label'=>'Text Only'),
			array('value'=>1, 'label'=>'Text and Command')
		);
	}
}