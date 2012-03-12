<?php
class IsoListing extends IsosAppModel {
	public $name = 'IsoListing';
/* */
	public $validate = array(
		'iso_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'The listing requires a name.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'phone' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'The listing requires a phone.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
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
		),
		'Address' => array(
			'className' => 'Address',
			'foreignKey' => 'address_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Category'
	);
//	public $hasMany = array(
//		'IsoCategory' => array(
//			'className' => 'Isos.IsoCategory',
//			'foreignKey' => 'iso_listing_id',
//		),
//	);
	public $actsAs = array(
		'Utils.Sluggable' => array(
			'label' => 'name',
			'method' => 'multibyteSlug',
		),
		'Tags.Taggable',
	);
	public function afterSave($created) {
//		if ($created) {
//			debug($this->data);
//			$this->data['IsoCategory']['category_id'] = $this->data['IsoListing']['categories'];
//			$this->data['IsoCategory']['iso_listing_id'] = $this->id;
//			$this->IsoCategory->create();
//			$this->IsoCategory->save($this->data);
//		}
	}
/**
 * Returns states associated with an ISO country
 *
 * @param type $countryId
 * @return boolean|array
 */
	public function getStates($countryId = null) {
		if ($countryId) {
			$states = $this->Address->State->find('list', array(
				'conditions' => array(
					'State.country_id' => $countryId,
				),
			));
			return $states;
		}
		return false;
	}
/**
 * Returns cities located in the same region as the state
 *
 * @param type $id
 * @return boolean|array
 */
	public function getCities($id = null) {
		if ($id) {
			$state = $this->Address->State->find('first', array(
				'conditions' => array(
					'State.id' => $id,
				),
				'contain' => array(),
				'fields' => array('region_id'),
			));
			$cities = $this->Address->City->find('list', array(
				'conditions' => array(
					'City.region_id' => $state['State']['region_id'],
				)
			));
			$rtn['Cities'] = $cities;
			return $rtn;
		}
		return false;
	}

	public function processListing($listing = array()) {
		if (!empty($listing)) {
			if ($this->saveAll($listing)) {
				return $this->id;
			}
			debug($this->invalidFields());
		}
		return false;
	}
}
?>