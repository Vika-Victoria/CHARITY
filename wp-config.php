<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'CHARITY');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Elsac?y+!Szn zrSxLLVZ<y_dv+TO{!j^=!^2Rv^CJOvrm:|.t.+]k6.AUn*BGp{');
define('SECURE_AUTH_KEY',  'ezpJN}]Za(.lcwyJ#k~lR#V0_5%B *K,a_uR#`oWbt$c1_Leaedt1TpJ.&H[W1^#');
define('LOGGED_IN_KEY',    'cIPp[+#!-7d6J7qh*Cjz!`^BP#H4Sk*w78Cpg-ZNvpWgh:o]q?E{ClT4Rv4tk9 ]');
define('NONCE_KEY',        'otu_nq+2@>GYzipB,>{Jj^XNHW%=R$3?8x=#%62WFl[k}%y S}mb_6EQ=tBE j8j');
define('AUTH_SALT',        '^A:4 * Z*XR,Q<>:,;5, .}!^p^mL1nu@ac# WU> jD~jCfn_9{qB^>/A~G<zlID');
define('SECURE_AUTH_SALT', '?$s+b$8E?=!;t)Yb~7%llWAy91cOvcb?G4 G _:ff3PZ6:]lZUxv(!9N2oD-($n3');
define('LOGGED_IN_SALT',   '[#k6vrIYF514n&t4[Xht&HdSIYCMM&Oze~mAh$dlBo;4<nxU~v2,}f,;P38kk#y$');
define('NONCE_SALT',       'O7l$fN[JQV!4u O$+cF9WV>;q)ovRQ+mae8Z+_ioO[EX-HM{cpQME{054@iB4q+#');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
