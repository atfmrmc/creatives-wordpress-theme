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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'creativesdb');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'creativesAdmin');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'creativesAdmin');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'ah{V3.is;C2:?JIO>_er^t=eH Jf[)Lz^Kxm&X95o=-Q)bsDB>HARD(WN3Dz90)G');
define('SECURE_AUTH_KEY', 'E;cRf_#jx)kWn*gJ{^kWs2HFe;3alm!@^yuLZJt/ftkzMfM`<n/TQTfG,Dr:E&0B');
define('LOGGED_IN_KEY', 'L[P4U(_/MMB]*p{xzS63^K%}#z3.l+]$!$IHCb#{A}~Dw?E~-D9*7L|4T6X|7s,!');
define('NONCE_KEY', '[[n0YO~:+w@JQO3pVD4.,h[<Sku@rX8~X*@xwN%FPH[2F*Zpq.a!<{=XjiE1(4s=');
define('AUTH_SALT', 'zy3s`(tI`2kXL,K9>BYo9ibtR,Ws,p`ft#{J*@=w^rK>A.l2d]ux_aV$Z;OQhO)2');
define('SECURE_AUTH_SALT', 'WB6MLo9fj%Tz<k7P9Wi%ai1$&CN3~tk~Q.x(k>0KybAQY9z;U0x$=Aq+AxsD@#V5');
define('LOGGED_IN_SALT', '-TJSL+/jc /*e},M3zi584D2TmuB*/w-GUh.X=*c(b%D|Q!?4x$0n6bn&G-Uw1W;');
define('NONCE_SALT', '@Fo&2{q1yP_A9_ruCY,I%N6j6cJ%r+A.g{TnVUiYNFh+v-jsS|f:VvQ`~eM}PnMv');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'crtv_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
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
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');