<?php

class Contact extends AppModel {

	public $name = 'Contact';
	public $types = [1 => 'Residencial', 2 => 'Celular'];
	public $operators = ['Oi', 'Vivo', 'Claro', 'Tim', 'Nextel'];

	public $validate = array(
        'name' => array(
            'rule' => 'notBlank'
        ),
        'phone' => array(
            'rule' => 'notBlank'
        )
    );

}

?>