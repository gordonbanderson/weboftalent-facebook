<?php
/**
* Defines the FAQ page type - initial code created by ss generator
*/
class FacebookLikeBoxPage extends Page {

	static $db = array(
    	'FacebookURL' => 'Text',
    	'PageWidth' => 'Int'
  	);


  function getCMSFields() {
	$fields = parent::getCMSFields();

	$fields->addFieldToTab( 'Root.Facebook', new TextField('FacebookURL'));
	$fields->addFieldToTab( 'Root.Facebook', new NumericField('PageWidth', 'Width of stream in pixels'));

    return $fields;
  }

}

class FacebookLikeBoxPage_Controller extends Page_Controller {

}

?>