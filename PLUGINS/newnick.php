<?php
if(PHP_SAPI !== 'cli') { die('This script can\'t be run from a web browser. Use CLI to run it.'); }

 $plugin_description = 'Changes nickname: !newnick <new_nick>';
 $plugin_command = 'newnick';

function plugin_newnick()
{

  if(empty($GLOBALS['args'])) { CHANNEL_MSG('Usage: '.$GLOBALS['C_CMD_PREFIX'].'newnick <new_nick>'); } 
  
  else {
		 fputs($GLOBALS['socket'],'NICK '.$GLOBALS['args']."\n");

		 CLI_MSG('!newnick on: '.$GLOBALS['C_CNANNEL'].', new nick: '.$GLOBALS['args']);
	   }
}

?>