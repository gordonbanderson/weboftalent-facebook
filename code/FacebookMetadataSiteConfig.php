<?php
  
class FacebookMetadataSiteConfig extends DataExtension {

    static $db = array(
        'SkipToMainContentAccessKey' => 'VarChar(1)'
    );

    static $has_one = array(
        'FacebookLogo' => 'Image'
    );
     
  
    public function updateCMSFields(FieldList $fields) {         
	 
	    $fields->renameField("SkipToMainContentAccessKey", _t('AccessKey.SKIP_TO_MAIN_CONTENT_ACCESS_KEY'));
        $fields->addFieldToTab("Root.FacebookMetadata", new UploadField("FacebookLogo", _t('Facebook.METADATA_LOGO',
            'Image that will show in facebook when linking to this site. The image should be a square of minimum size 200px')));
	}

 
}
?>