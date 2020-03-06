<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */


/*     michaelduff      (qUl4c0QAo7hCx!xS4bBiP4z                  */


// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'travail' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i3.1J9##b(DL#Uwk]wr4bX9cS)TtpIA#;Z~=$UH?fM$gG(W6q{7u.mCq/3@0<T9]' );
define( 'SECURE_AUTH_KEY',  'O@I _;H*g^s1CA]sD2*H0a=TKA=]=3,lr|1.Zs*K/(S>P!0L??1WcxK)D=&x=6 f' );
define( 'LOGGED_IN_KEY',    '|E,O>+G#O~:!$)4))fcR|F 01*zHZgify<Txo%cc=!1pFEVz)w^6]Db~e1Pzval,' );
define( 'NONCE_KEY',        'eJQc;^!QVaGN&s$|!v4n,5jSm&HbC `W?yC<LzKvYZ}qzP0~?X]^9QG4d PEpyn$' );
define( 'AUTH_SALT',        'QD8^x?)rh&+ X%kO|<u*5L x;/;_Vpyk2:fDA^pyqm &5=sztWncuP$cmLnK$)lv' );
define( 'SECURE_AUTH_SALT', 'OUUbhJ9]x)~X_xH5:`VMZD8eXQfs74ZAkr.QucFl>n>V=5=a*Bm<Azag/qm{t$Ut' );
define( 'LOGGED_IN_SALT',   ' CYXNc3fMmzX{koG}&8p}hJgD$J,Jz0[/4q&`*{M5Ub@)~)E//%^7XE4vyvffTJk' );
define( 'NONCE_SALT',       '>qK8h>}wd`9`FrsLb~Y;bOQ1+z!bcX!xrVc!g}S&NSN Yo3b{CtP)TYSQzJj$Z|3' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
