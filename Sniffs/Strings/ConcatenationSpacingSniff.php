<?php

/**
 * drupalcs_Sniffs_Strings_ConcatenationSpacingSniff.
 *
 * Always use a space between the dot and the concatenated parts to improve readability.
 *
 * @link http://drupal.org/coding-standards#concat
 */
class drupalcs_Sniffs_Strings_ConcatenationSpacingSniff implements PHP_CodeSniffer_Sniff {
    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
  public function register() {
    return array(T_STRING_CONCAT);
  }

  /**
   * Processes this test, when one of its tokens is encountered.
   */
  public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();
    if ($tokens[($stackPtr - 1)]['code'] !== T_WHITESPACE || $tokens[($stackPtr + 1)]['code'] !== T_WHITESPACE) {
      $message = 'Concat operator must be surrounded by spaces';
      $phpcsFile->addError($message, $stackPtr, 'Missing');
    }
  }
}

?>