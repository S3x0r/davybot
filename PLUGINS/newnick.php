<?php
if(PHP_SAPI !== 'cli') { die('This script can\'t be run from a web browser. Use CLI to run it.'); }

 $plugin_description = 'Changes nickname: !newnick <new_nick>';

function plugin_newnick()
{
 fputs($GLOBALS['socket'],'NICK '.$GLOBALS['args']."\n");

 MSG('!newnick on: '.$GLOBALS['C_CNANNEL'].', new nick: '.$GLOBALS['args']);
}

?>