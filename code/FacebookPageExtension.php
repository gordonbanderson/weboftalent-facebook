<?php

class FacebookPageExtension extends Extension {

  /*
  Removes entities from HTML converted to XML, for the purposes of rendering plain text, here in the meta description

  */
  public function RemoveEntities($text) {
    return preg_replace("/&#?[a-z0-9]{2,8};/i","",$text);
  }


}