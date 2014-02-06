<?php

//require_once "facebook.php";

class FacebookCredentials extends Page {
  static $db = array (
    'BulkTitle' => 'Varchar',
    'BulkCaption' => 'Varchar',
    'BulkCopyright' => 'Varchar',
    'BulkLicense' => 'Varchar',
    'FacebookAlbumID' => 'Varchar'
  );

  // facebook information

  // the id of the facebook application
  protected static $facebook_application_id = null;

  // the secret of the facebook application
  protected static $facebook_application_secret = null;

  // user id to search
  protected static $facebook_user_id = null;


 
  static $has_many = array (
    'AttachedFiles' => 'ImageFile'
  );

  static $has_one = array(
      'CoverPhoto' => 'Image',
   );

  //Uncle Cheese hack from http://silverstripe.org/data-model-questions/show/6805 << to detect multiple calls to on after write or on before write
  static $has_written = false;


  function CanUseFacebook() {
    $result = (self::$facebook_application_id != null);
    $result = $result && (self::$facebook_application_secret != null);
    $result = $result && (self::$facebook_user_id != null);
    return $result;
  }

  static function setFacebookApplicationID($new_app_id) {
    return self::$facebook_application_id = $new_app_id;
  }
  
  static function setFacebookApplicationSecret($new_sec) {
    return self::$facebook_application_secret = $new_sec;
  }

  static function setFacebookUserID($new_user_id) {
    return self::$facebook_user_id = $new_user_id;
  }


  static function getFacebookApplicationID() {
       $config = SiteConfig::current_site_config();
        return $config->getOGApplicationID();
  }

   static function getFacebookApplicationSecret() {
    return self::$facebook_application_secret;
  }
  
   static function getFacebookUserID() {
    $config = SiteConfig::current_site_config();
    return $config->getOGAdminID();
  }

}




?>