<?php
App::uses('AppModel', 'Model');
/**
 *
 */
class Customer extends AppModel
{
  public $hasMany = array(
		'Contact' => array(
			'className' => 'Contact',
			'foreignKey' => 'customer_id'
		)
	);
}


?>
