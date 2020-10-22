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
define( 'WP_HOME', 'http://otkritiymir.ru/'); //101
define( 'WP_SITEURL', 'http://otkritiymir.ru/');
define( 'DB_NAME', 'otkritymir_wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'otkritymir_wp' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'H&ags8H0' );

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
define( 'AUTH_KEY',         'YyV:Yvr.KX!=if4u7hKLv T~W4]@H7cbs} ^@-%Rfm]4_(Zz=}9Q4K!HRx)PY[De' );
define( 'SECURE_AUTH_KEY',  '9] QVT71Iq:%9V~2#$HC+9Ie..t^aZO4TyBy,rn)^T)odB vC,@?luqgP5fPY{_g' );
define( 'LOGGED_IN_KEY',    'I}>}MQ<0Ty/GfrG]2R?pY:01<Rmra_tQ1(s8ha;XggGT[&Kl^!vpC9bK-%3G%IBl' );
define( 'NONCE_KEY',        'o|bZN?3,QXW86Lx,7.p2$.m0p !!A!)#zu)# H#TF!Ocs]GCd?-p-1V+xnkF%N0X' );
define( 'AUTH_SALT',        'PSf/A(?0HyE)~alCnJBo^u{Kd|oZm}v3sODUblGawoKIN.M!r%l`u+4.@%;1KR4I' );
define( 'SECURE_AUTH_SALT', '`yinT-%FBs,IT{:*wf2~ViFc?L]R-0I?RDVzPVnj Mfx<L|[!@0kuFiQy@iFvj~j' );
define( 'LOGGED_IN_SALT',   '@[UHv:%cNu8xvF6kV(+48D~JRFc`y@wq6k<wfLr@(-Q@1NyC$t0yS+%q=^e RLV8' );
define( 'NONCE_SALT',       '.$^(|SMy,HOsK.cVwS7IC.$8UAK?Vd4$&%oP]7`wi-~4j I7oet7bHw~%Bz]hyc}' );

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
