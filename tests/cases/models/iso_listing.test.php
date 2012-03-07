<?php
/* IsoListing Test cases generated on: 2012-03-02 14:47:35 : 1330717655*/
App::import('Model', 'isos.IsoListing');
App::import('Core', 'ConnectionManager');

class IsoListingTestCase extends CakeTestCase {
	public $IsoListing = null;
	public $plugin = 'isos';
	public $fixtures = array(
		'app.social_page', 'app.business', 'app.address',
		'app.city', 'app.state', 'app.country', 'app.region',
		'app.ip_location', 'app.listing', 'app.website',
		'app.account', 'app.lead', 'app.consumer', 'app.business_owner',
		'app.call_center', 'app.time_zone', 'app.user', 'app.affiliate',
		'app.lead_limit', 'app.client', 'app.client_lead',
		'app.lead_type', 'app.lead_tier', 'app.leads_lead_type',
		'app.affiliates_lead_type', 'app.transaction', 'app.transaction_type',
		'app.transaction_relationship', 'app.email', 'app.lead_disposition',
		'app.disposition', 'app.tp_account', 'app.note',
		'app.lead_property', 'app.audio_verification', 'app.pending_transaction',
		'app.billing_type', 'app.account_cancellation_reason',
		'app.image', 'app.page', 'app.listing_stat', 'app.listing_unique',
		'app.category', 'app.businesses_category', 'app.categories_listing',
		'app.school_zipcode', 'app.school_campus', 'app.school',
		'app.seo_property', 'app.school_program', 'app.career_program',
		'app.career', 'app.source', 'app.review', 'app.ocn_suppression',
		'plugin.isos.iso_listing', 'plugin.isos.iso', 'plugin.isos.iso_user',
		'plugin.isos.iso_category', 'plugin.tags.tag', 'plugin.tags.tagged'
	);

	public function startTest() {
		$this->IsoListing = ClassRegistry::init('IsoListing');
	}

	public function endTest() {
		unset($this->IsoListing);
		ClassRegistry::flush();
	}
	public function testFind() {
		$listings = $this->IsoListing->find('all');
//		debug($listings);
	}
	public function testGetCities() {
//		$id = 1;
//		$results = $this->IsoListing->getCities();
//		$this->assertFalse($results);
//		
//		$results = $this->IsoListing->getCities($id);
	}
	public function testProcessListing() {
		$listing = array(
			'IsoListing' => array(
				'iso_id' => '4f562714-a178-4efb-8f76-59a9c0a80564',
				'name' => 'New Listing',
				'url' => 'http://www.think-knot.com/',
				'phone' => '9545551212',
				'fax' => '9545551213',
				'short_description' => 'Thinking Knot',
				'long_description' => 'Knot thinking at all.',
				'business_hours' => '8am to 5pm M-F',
				'tags' => 'knot, thinking, ever',
				'active' => 1,
				),
			'Address' => array(
				'country_id' => 76,
				'address1' => '123 Main St.',
				'address2' => 'Suite 103',
				'state_id' => '308',
				'city_id' => '55496',
				'zipcode' => 'w1h 8gn',
			),
		);
		$results = $this->IsoListing->processListing();
		$this->assertFalse($results);
		
		$results = $this->IsoListing->processListing($listing);
		$this->assertTrue($results);
		
		$listing['Address']['zipcode'] = 'EC1A 1BB';
		$results = $this->IsoListing->processListing($listing);
		$this->assertTrue($results);
		
		$listing['Address']['zipcode'] = '33304';
		$listing['Address']['country_id'] = 230;
		$this->assertTrue($results);
		
		
	}
}
?>