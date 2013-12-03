<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A username is required'
			),
		),
		'password' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A password is required'
			),
		),
		'role' => array(
			'valid' => array(
				'rule' => array('inList', array('admin', 'author')),
				'message' => 'Please enter a valid role',
				'allowEmpty' => false
			),
		),
	);

/**
 * beforeSave, overide from Model.php
 *
 * @var array
 * 
 * Hash the password before save by using SimplePasswordHasher()
 * 
 */
        public function beforeSave($options = array()) {
            //todo not sure that I need this line or not
            //parent::beforeSave($options);
            
            if (isset($this->data[$this->alias]['password'])) {
                $passwordHasher = new SimplePasswordHasher();
                $this->data[$this->alias]['password'] = $passwordHasher
                        ->hash($this->data[$this->alias]['password']);
            }
            
            return true;
        }
}
