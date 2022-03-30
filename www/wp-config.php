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
 * * Настройки MySQL
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
define( 'DB_NAME', 'Noosa' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ip>|N7WAv#w:<,(M ,`_+A@BZA[/V>D>,C#FOZAC0b;1`44Su?FLI:U6`;6r?6++' );
define( 'SECURE_AUTH_KEY',  'Ow.:N9qA&y99;MLNh1{@p`e&V@LI_8vbF3&ITXN7r3^RmTV:~^w)N9<edkHd,5V<' );
define( 'LOGGED_IN_KEY',    '.iq@mN8tWP,0-m>8yl0uz84ox2E Su3)B&)^+}+XVQW;dP/&AShSUKK^?lBb^Efg' );
define( 'NONCE_KEY',        'W^E-(T*ruqZKb05U/v/6/lqnF)1:+f3o&,3c7qA46>s|W+8_aPoKp>DqK!UH=|`J' );
define( 'AUTH_SALT',        'jk>e~-%NOo&za>!}?S===V.Xzlj`<]6Apb2DPl6C*91}F5W&ij4Nso%6W+!D~mC:' );
define( 'SECURE_AUTH_SALT', 'T,y]ET3t8#i!_NsDwY0GLyh%v%3} BVBW|/iH{tmR?0&L?mzHEF|@*-D#$YUfhbi' );
define( 'LOGGED_IN_SALT',   '%L[W&)bBjw!Ki1w9)2 ;3$yiF-g3e^}HWpfwEF6@</Y*/l<72*]}@@C7s/2%x1At' );
define( 'NONCE_SALT',       't4 }2K5JqUG#xA&WwCC_J`R)haiLN0T|uFWJ@<0g^:%Jcg:h`uxa+HFz|$f~w8j<' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_noosa';

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
