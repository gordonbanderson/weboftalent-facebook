<?php
  
class FacebookMetadataSiteConfig extends DataObjectDecorator {
     
    function extraStatics() {
        return array(
            'db' => array(
                'SkipToMainContentAccessKey' => 'VarChar(1)'
            ),
            'has_one' => array(
                'FacebookLogo' => 'Image'
            )
        );
    }
  
    public function updateCMSFields(FieldSet &$fields) {         
	    $tf2 = new TextField('SkipToMainContentAccessKey');
	    $tf2->setMaxLength(1);
	    $fields->addFieldToTab('Root.FacebookMetadata', $tf2);
	    $fields->renameField("SkipToMainContentAccessKey", _t('AccessKey.SKIP_TO_MAIN_CONTENT_ACCESS_KEY'));

        $fields->addFieldToTab("Root.FacebookMetadata", new ImageField("FacebookLogo", _t('Facebook.METADATA_LOGO', 'Image that will show in facebook when linking to this site. The image should be a square')));
        

	}

 
}
?>