<?php
class IsoUser extends IsosAppModel {
	public $name = 'IsoUser';
	public $validate = array(
		'iso_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'isValid' => array(
				'rule' => 'email',
				'required' => true,
				'message' => __('Please enter a valid email address.', true),
			),
			'isUnique' => array(
				'rule' => array('isUnique', 'email'),
				'message' => __('This email is already in use.', true),
			),
		),
		'passwd' => array(
			'too_short' => array(
				'rule' => array('minLength', '6'),
				'message' => __('The password must have at least 6 characters', true),
			),
			'required' => array(
				'rule' => 'notEmpty',
				'message' => __('', true),
			),
		),
		'temppassword' => array(
			'rule' => 'confirmPassword',
			'message' => __('The passwords do not match. Please try again.', true),
		),
	);

	public $belongsTo = array(
		'Iso' => array(
			'className' => 'Iso',
			'foreignKey' => 'iso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	public $actsAs = array(
		'Utils.Sluggable' => array(
			'label' => 'username',
			'method' => 'multibyteSlug'
		)
	);
/**
 * Custom validation method to ensure that the two entered passwords match
 *
 * @param string $password Password
 * @return boolean Success
 */
	public function confirmPassword($password = null) {
		if ((isset($this->data[$this->alias]['passwd']) && isset($password['temppassword']))
			&& !empty($password['temppassword'])
			&& ($this->data[$this->alias]['passwd'] === $password['temppassword'])) {
			return true;
		}
		return false;
	}
	
}
