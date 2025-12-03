<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'wordpress_user' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wordpress_user' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '1234567888KateB' );

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
define( 'AUTH_KEY',         'HU4U21/#&Kdeq_*XJ;i^*O.S;6K?t5rv*_NW)sV7(GmlH?C%@Kgu,})fLzQXnE]y' );
define( 'SECURE_AUTH_KEY',  '1)F 3X:R-hPG{<vVjfRy:vFy43c=[tjCTL)X@*2A8mc%g/zS)#T5DDfpg|{kWEUP' );
define( 'LOGGED_IN_KEY',    '@:V27c R07%([%pOGt%]_hW$PE<IjCsyN_4H!Cv#U>b`Z$A{K)Un?L[gCQhQ6hr7' );
define( 'NONCE_KEY',        '1R%eSCw<7rH@h`O910H}#T?!rJk{p_XsYNo=zUgjJ4T$[.wk[LTyJlv?>,:;5VUv' );
define( 'AUTH_SALT',        '{# ,nNj6h|>Q)8xgJ`^oktd.it#d8#&8&?w&Q_r^#c42f&*IEd(q2QK~a78iX!im' );
define( 'SECURE_AUTH_SALT', '%&SCpgx&zMcLHVO[T7f<;{wZMizVe<38LA|]Hi6srattWW.c2deha;o5r; ^]#,9' );
define( 'LOGGED_IN_SALT',   '|:NmWe).ttw_j:blNi~)&/~K4#J/n`5L7_OAF7ubk5ff_TV|cneL)XqDx&-.t,dP' );
define( 'NONCE_SALT',       'Jl_`>`=!CkegwmK93?P31pzk5L;~g`$/j*)~0!0G5^3G{(%HK-8BQ-QF=0XZy8@?' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
