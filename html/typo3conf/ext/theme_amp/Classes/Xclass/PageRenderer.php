<?php
namespace W3Development\Theme\Xclass;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;

class PageRenderer extends \TYPO3\CMS\Core\Page\PageRenderer {

  protected $ampURL = "amp";
  /**
   * @param string $templateFile Declare the used template file. Omit this parameter will use default template
   */
  public function __construct($templateFile = '')
  {
      $this->reset();
      $this->locales = GeneralUtility::makeInstance(\TYPO3\CMS\Core\Localization\Locales::class);
      if ($templateFile !== '') {
          $this->templateFile = $templateFile;
      }
      $this->inlineJavascriptWrap = [
          '<script type="text/javascript">' . LF . '/*<![CDATA[*/' . LF,
          '/*]]>*/' . LF . '</script>' . LF
      ];

      if ( (int)GeneralUtility::_GP($this->ampURL) > 0) {
          $this->inlineCssWrap = [
            // Modify here for style amp-custom
              '<style amp-custom>' . LF . '/*<![CDATA[*/' . LF . '' . LF,
              '' . LF . '/*]]>*/' . LF . '</style>' . LF
          ];
      } else {
        $this->inlineCssWrap = [
          // Modify here for style amp-custom
            '<style type="text/css">' . LF . '/*<![CDATA[*/' . LF . '' . LF,
            '' . LF . '/*]]>*/' . LF . '</style>' . LF
        ];
      }

      $this->metaTagRegistry = GeneralUtility::makeInstance(MetaTagManagerRegistry::class);
      // $this->setMetaTag('name', 'generator', 'TYPO3 CMS');
  }

}


?>
