<?php
/**
 *
 * @package Support Toolkit - Resync Avatars
 * @copyright (c) 2009 phpBB-TW (心靈捕手) http://phpbb-tw.net/phpbb/
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'RESYNC_AVATARS'			=> '重新同步頭像',
	'RESYNC_AVATARS_CONFIRM'	=> '這個工具將確認所有論壇中使用的頭像，都真地存在伺服器中。一旦發現有檔案遺失，那麼將從會員個人資料移除其頭像。您確定要繼續嗎？',
	'RESYNC_AVATARS_FINISHED'	=> '頭像已成功地重新同步！',
	'RESYNC_AVATARS_NEXT_MODE'	=> '切換到群組頭像，請不要中斷這個過程！',
	'RESYNC_AVATARS_PROGRESS'	=> '正在進行重新同步附加檔案，請不要中斷這個過程！',
));

?>