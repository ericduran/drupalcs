<?php
/**
 * Generic_Sniffs_PHP_LowerCaseConstantSniff.
 *
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class drupalcs_Sniffs_PHP_UpperCaseConstantSniff extends Generic_Sniffs_PHP_LowerCaseConstantSniff {

  /**
   * A list of tokenizers this sniff supports.
   *
   * @var array
   */
  public $supportedTokenizers = array('PHP');

  /**
   * Processes this sniff, when one of its tokens is encountered.
   */
  public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();

    $keyword = $tokens[$stackPtr]['content'];
    if (strtoupper($keyword) !== $keyword) {
      $error = 'TRUE, FALSE and NULL must be uppercase; expected "%s" but found "%s"';
      $data  = array(strtoupper($keyword), $keyword);
      $phpcsFile->addError($error, $stackPtr, 'Found', $data);
    }
  }
}

?>
