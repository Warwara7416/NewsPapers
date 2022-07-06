<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'db-wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OAS/v[lr[%tWp(x8/<-(-Wbs,P]j(MpZVkRG_&uNQ#}D|x]B1[OPuW`-~kM.{/cM' );
define( 'SECURE_AUTH_KEY',  '%uP_Yj8?pA!EI&v7K}@T.X`W]?BR:@LXx/ZAU=8BEeiR{[%*7$8X@=2^v^EN0Cg<' );
define( 'LOGGED_IN_KEY',    'q-TN=Qg{=M,ttq}JS$6}Phq8d.?ie,gp&*%2dIe!r.>Y/T :v}StJ#:=~,lTNsP[' );
define( 'NONCE_KEY',        '8v,biPbM/iEo;aBKTs=/Rq^8zIS{>/xtK0?0^3:L~wEsqa$c5@/}YI(C{bk<S;#g' );
define( 'AUTH_SALT',        'QzFK#=HSw<,pO<.0F-j!Y(|TWrc(:5QOgy[1b8Fak7D^=SWFtwxv{scFLDB>8-ry' );
define( 'SECURE_AUTH_SALT', '`8Tf9?koqPdkU9<4,:<rDL#by)obT{8X6Wk9CP~MW+~,9e.jq2#SIt>w~ghL8Vy)' );
define( 'LOGGED_IN_SALT',   '$A$GgFbg?gR;I}EQ%i@^chKj~PII^}78l+GeCdni,zn./ QyVKh{QE69Uy*}`8c@' );
define( 'NONCE_SALT',       '/8Gje.Q}WPQR7ZvW&Y}3%q0zjCe3{eHh#h+%7*7$j(o4?Djic/g+<Z7%3];c`|hX' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
