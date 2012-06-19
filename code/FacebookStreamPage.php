<?php
/**
* Defines the FAQ page type - initial code created by ss generator
*/
class FacebookStreamPage extends Page {

	static $db = array(
    	'FacebookURL' => 'Text',
    	'PageWidth' => 'Int'
  	);


  function getCMSFields() {
	$fields = parent::getCMSFields();

	$fields->addFieldToTab( 'Root.Content.Facebook', new TextField('FacebookURL'));
	$fields->addFieldToTab( 'Root.Content.Facebook', new NumericField('PageWidth', 'Width of stream in pixels'));

    return $fields;
  }

}

class FacebookStreamPage_Controller extends Page_Controller {

}

?>