<?php

class drupalcs_Sniffs_ControlStructures_ElseIfDeclarationSniff implements PHP_CodeSniffer_Sniff {
  /**
   * Returns an array of tokens this test wants to listen for.
   *
   * @return array
   */
  public function register() {
    return array(T_ELSE, T_ELSEIF, T_IF);
  }

  /**
   * Processes this test, when one of its tokens is encountered.
   *
   * @param PHP_CodeSniffer_File $phpcsFile The file being scanned.
   * @param int                  $stackPtr  The position of the current token in the
   *                                        stack passed in $tokens.
   *
   * @return void
   */
  public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr) {
    $tokens = $phpcsFile->getTokens();
    if ($tokens[$stackPtr]['code'] == T_ELSE && $tokens[$stackPtr +1]['code'] == T_WHITESPACE 
      && $tokens[$stackPtr +2]['code'] == T_IF) {
      $error = 'Usage of ELSE IF not allowed; use ELSEIF instead';
      $phpcsFile->addError($error, $stackPtr, 'NotAllowed');
    }
  }
}

?>