<?php
/**
* Smarty plugin for testing block plugins
* 
* @package Smarty
* @subpackage PHPunitPlugin
*/

/**
* Smarty {testblock}{/testblock} block plugin
* 
* @param string $content contents of the block
* @param object $smarty Smarty object
* @param boolean $ &$repeat repeat flag
* @param object $template template object
* @return string content re-formatted
*/
function smarty_block_testblock($params, $content, $smarty, &$repeat, $template)
{
    static $loop = 0;

    $loop++;
    if ($loop < 5) {
        $repeat = true;
    } else {
        $repeat = false;
    } 

    return $loop;
} 

?>
