<?php

/**
 * drupalcs_Sniffs_WhiteSpace_DisallowTabIndentSniff.
 *
 * Throws errors if tabs are used for indentation.
 *
 */
class drupalcs_Sniffs_WhiteSpace_DisallowTabIndentSniff extends Generic_Sniffs_WhiteSpace_DisallowTabIndentSniff
{

    /**
     * A list of tokenizers this sniff supports.
     *
     * @var array
     */
    public $supportedTokenizers = array(
                                   'PHP',
                                  );

}

?>
