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
define( 'DB_NAME', 'innovate' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+d:H/d*dh`7T|~FZx20D:}nm/n7:;:sHNA1Kb/| D62j5&s<`Dmy1u0 K)YD{$H=' );
define( 'SECURE_AUTH_KEY',  '_}Z&/0-(>XWEAnQWSRS%%^cI{Y+29)u)_7%`*fP&cWP>|Me+)PeB_V50owb5E7-N' );
define( 'LOGGED_IN_KEY',    '<TYO$0Xns2q81hvn9A*>#o;`(+H,%ls`mjkn0+M+c.m+){^c:}MiAvu-a4Q,G0DB' );
define( 'NONCE_KEY',        '=h<(`1TD5SEN:SP[Ge{%`{UgK^q#*123yhlYX 2C}.TG0oO8%@U<*kvDF4a@un>B' );
define( 'AUTH_SALT',        '!l)(kEe6{(Pf#xT${&xio=D#s|[$!j&28xHiAt%F~2Oyt7Igk0prq s|rZw,K.LT' );
define( 'SECURE_AUTH_SALT', '`Jv2Mg}lce^Z1Kj|%7wa^vMElSb8P<~RiC{A9/.#8twX_.Coe0!X2p47,qdF,W2_' );
define( 'LOGGED_IN_SALT',   '8;(IMScU*sN;9|JD9xIvkK^,@Pka;2:|_vW!$n.wbjSiP&26,r1LwX<:}7uNl61:' );
define( 'NONCE_SALT',       'p/.{uNos7-Y[k?Ax`ypZHe$`@{j*=B^59bLPljwV)r[uX1 +pF;K:l97U:_iH<~c' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
