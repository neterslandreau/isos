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
		'plugin.isos.iso_category'
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
		debug($listings);
	}
}
?>