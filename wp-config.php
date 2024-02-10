<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6u{$b&cC{Q42{KJe.(F2ltY<sg*<;J>#`KzZg |cWbrN3{)]:0_3X1}1wG|&NS{S' );
define( 'SECURE_AUTH_KEY',  'Qv?0BS~T&#Q%`NJzWW?fUXcG6[Z8%Vavcpn6jqhBRNrnCdF:Rx3{F`  5l^N}BkZ' );
define( 'LOGGED_IN_KEY',    ':Nswu*4Uo.!~oHk_?>9+`74J^ _8X)Y[<A+o`5=qmh`Wk HJ|]Dg#_cc#y}qwZj@' );
define( 'NONCE_KEY',        '{%fdQ} e{]]F?R[ge7)LRVtBne5KFke]NGB)?J|N-nP~k0!JFm.AL!t@<SvVh?,0' );
define( 'AUTH_SALT',        '&grR8UV}*a-L>bE,Si`&P&Y=&rm0k#S5KgdrwuyxPWpS=h)eVl,&J6+nautJOdZU' );
define( 'SECURE_AUTH_SALT', '9pvn5#Z(0jgA~#GIeijKJgh6%6|14>p.U#a8V{8;=mS[-C7?P}V,w+O1@ZW$8JZ4' );
define( 'LOGGED_IN_SALT',   'L[qSi&id&k#%EBrKoc_Z1Wq}~zQLim}s5jfENzlrm8Wq^sN5sl:Vcdrs<K{C#C/P' );
define( 'NONCE_SALT',       't/}lF0jB^PUw,^.KR$7%|4n/ScOq2OQ@(h8t)6=OyI/Er_3/+d&|sK=eH6CGY_B+' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
