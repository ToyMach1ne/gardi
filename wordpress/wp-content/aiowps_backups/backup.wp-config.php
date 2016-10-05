<?php


define('DISABLE_WP_CRON', true);
define('FS_METHOD', 'direct');

define('DB_NAME', 'p284179_sadlopa');
define('DB_USER', 'p284179_sadlopa');
define('DB_PASSWORD', 'nJ4Xz8T89R');

define('DB_HOST', 'p284179.mysql.ihc.ru');

/** Кодировка базы данных при создании таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');


define('AUTH_KEY', 'впишите сюда уникальную фразу');
define('SECURE_AUTH_KEY', 'впишите сюда уникальную фразу');
define('LOGGED_IN_KEY', 'впишите сюда уникальную фразу');
define('NONCE_KEY', 'впишите сюда уникальную фразу');
/**#@-*/

$table_prefix  = 'zcuyv_';

define ('WPLANG', 'ru_RU');

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);