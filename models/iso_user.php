<?php
class IsoUser extends IsosAppModel {
	public $name = 'IsoUser';
/* */
	public $validate = array(
		'iso_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				'message' => 'not uuid',
			),
		),
		'username' => array(
			'notempty' => array(
				'rule' => 'notEmpty',
				'message' => 'Your custom message here',
			),
		),
		'email' => array(
			'isValid' => array(
				'rule' => 'email',
				'required' => true,
				'message' => 'Please enter a valid email address.',
			),
			'isUnique' => array(
				'rule' => array('isUnique','email'),
				'message' => 'This email is already in use.',
			),
		),
		'passwd' => array(
			'too_short' => array(
				'rule' => array('minLength', '6'),
				'message' => 'The password must have at least 6 characters',
			),
			'required' => array(
				'rule' => 'notEmpty',
				'message' => 'A password is required',
			),
		),
		'temppassword' => array(
			'rule' => 'confirmPassword',
			'message' => 'The passwords do not match. Please try again.',
		),

	);
/* */
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
