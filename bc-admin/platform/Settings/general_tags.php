<?php
/****** set language with INI file in LANG Directory (NO CHANGE IT PLEASE!!!)*******/
if(file_exists(dirname(__FILE__).'/lang/'.languageAdmin.'/'.languageAdmin.'.ini')){
 $parser_language = parse_ini_file(dirname(__FILE__).'/lang/'.languageAdmin.'/'.languageAdmin.'.ini',true);
 $lang_ = array_merge($lang_,$parser_language);
}
$page_title = $lang_['settings']['FLEX_MAIN_MENU_TITLE'];/*--> Page Title of this platform part */
$icon_menu = 'icon-wrench';/*--> Icon used for menu and table title */
$box_title = '<i class="icon icon-black '.$icon_menu.'"></i> '.$lang_['settings']['FLEX_TABLE_TITLE']; /*--> Table title */
$table_name = $table_prefix."settings"; /*--> the database table where you want work */
$menu_title = $lang_['settings']['FLEX_MAIN_MENU_TITLE']; /*--> Menu title for this section */
$breadcrumb = '<ul class="breadcrumb">
				<li>
				  <a href="'.abs_admin_path.'/index.php"><i class="icon icon-black icon-home"></i> Home</a> 
				  <span class="divider">/</span>
				</li>
				<li class="active">
				  <i class="icon icon-gray '.$icon_menu.'"></i> '.$lang_['settings']['FLEX_MAIN_MENU_TITLE'].'
				</li>
               </ul>';
?>