<?php
App::import('Model', 'Listing');
class IsoListing extends Listing {
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		$this->validate = array();
		$this->belongsTo = array(
			'Address' => array('className' => 'Address'),
			'State' => array('className' => 'State'),
			'City' => array('className' => 'City'),
		);
		$this->hasOne = array(
			'Image' => array('className' => 'Image'),
		);
	}
}