<?php

namespace W3Development\Theme\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper;
use TYPO3\CMS\Core\Utility\GeneralUtility;
/**
* 
*/
class ImageViewHelper extends AbstractTagBasedViewHelper
{
	
  protected $tagName = 'img';
  protected $tagNameAmp = 'amp-img';
  protected $ampURL = "amp";

  public function initializeArguments() {
      parent::initializeArguments();
      $this->registerUniversalTagAttributes();
      $this->registerTagAttribute('src','string','Image source',true);
      $this->registerTagAttribute('width','int','Image width attribute');
      $this->registerTagAttribute('height','int','Image height attribute');
      $this->registerTagAttribute('alt','string','Image alt attribute');
      $this->registerTagAttribute('layout','string','Image layout attribute');
      //$this->registerTagAttribute('style','string','Image style attribute');
  }

  public function render() {     
    
    if ( (int)GeneralUtility::_GP($this->ampURL) > 0) {
        $this->tag->setTagName($tagNameAmp);
      }else{
        $this->tag->setTagName($tagName);
    }

    return $this->tag->render();
  }

}

?>