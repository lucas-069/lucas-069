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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'plusfit' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '<EQ+E}1y!9r9vK*miS[j,z/O)SFVLllW&WY~zR$1MHiK1>W6OMKOb~|NR`vQ>+YN' );
define( 'SECURE_AUTH_KEY',  ')br}XM0ndrj@ozM&_,G$p^m5@F3J5x3e?`Jz&o`F, 5GzN-{vJ& :ZYP*ozjn&K ' );
define( 'LOGGED_IN_KEY',    'W9>`9&6Jbe.UJ@hVKE}.uS-CrFk(gh=%uSs y^%|MOE&Ed^LsAWgdpc5:d!OE}EH' );
define( 'NONCE_KEY',        'd*2?#`?G6u7K>3Qp]Qzd@ic6va}@1#HW2M#x3*Wct:MHK+h9y88z6)c0L`nf6;dp' );
define( 'AUTH_SALT',        'dU&-5x%dCB;~9IH@qYrpM+|WRHrK+/_9H4}>4!r=O1IN<dY7<KH)KfU8|$p*a>T8' );
define( 'SECURE_AUTH_SALT', '+sY*i+N fs$@fuZ>W(|A`sy)MvGB3|4>W!pzzTd<n!ht>3Q,n$Cdh!MC)rS;.+)|' );
define( 'LOGGED_IN_SALT',   'cpk5J@ystF%rzfUtaHN+~fWp0hyV%4dL3N>MQTn b&LNSz] rM_ChM*ru3[!p E)' );
define( 'NONCE_SALT',       'k:^oN2rDykl}xbDsAJk:2puJLX*E~c!{5B7xTak@zh%JxH`TF_B?5~Q:#=;5tb :' );
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
