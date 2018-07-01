<?php
class Aguaverde_Chatbot_Model_Options
{
	/**
	 * Provide available options as a value/label array
	 *
	 * @return array
	 */
	public function toOptionArray()
	{
		return array(
//			array('value'=>0, 'label'=>'Start'),
			array('value'=>1, 'label'=>'List Categories'),
			array('value'=>2, 'label'=>'Search For Product'),
			array('value'=>3, 'label'=>'Login'),
			array('value'=>4, 'label'=>'List Orders'),
			array('value'=>5, 'label'=>'Reorder'),
			array('value'=>6, 'label'=>'Add Product to Cart'),
			array('value'=>7, 'label'=>'Checkout on Website'),
			array('value'=>8, 'label'=>'Clear Cart'),
			array('value'=>9, 'label'=>'Track Order Status'),
			array('value'=>10, 'label'=>'Talk to Support'),
			array('value'=>11, 'label'=>'Send Email'),
			array('value'=>12, 'label'=>'Cancel'),
			array('value'=>13, 'label'=>'Help'),
			array('value'=>14, 'label'=>'About'),
			array('value'=>15, 'label'=>'Logout'),
			array('value'=>16, 'label'=>'Register')
		);
	}
}