<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni database
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'BorgottiWebSite' );

/** Nome utente del database */
define( 'DB_USER', 'admin' );

/** Password del database */
define( 'DB_PASSWORD', 'admin' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_.;YwfF]mAEEBnjq<}0s~~U:xJ a.La})UIBmE%)@o[0}(v<H-ZPZ/X8mW]}>T:P' );
define( 'SECURE_AUTH_KEY',  '48(H{]POpYEi;D+cje!fDv4HXI9WIUsN8Yoqw:fWr@~AE>6Vd(CY{($B*Cl:C!N4' );
define( 'LOGGED_IN_KEY',    'Ns?8pa9rQfy)8$:.B}0|lk`V5iO7SIoLK`zP(9/@;lUC2ZJw9I`OL/I)EMpAWOYR' );
define( 'NONCE_KEY',        '8fMh]c(Xgy),L0_F_uM}vmS5p1y3y14&tyS(G@*wMQ2a ix=:@bNFIZwSb5UL~,r' );
define( 'AUTH_SALT',        ';~O})BtrOP>/y@&7a_HWmV7@3C}vyolHCE_8JW1{;YBBtPMl1|JF_4=Gp>;aZ?bh' );
define( 'SECURE_AUTH_SALT', '4Nf]G5[`HIrtH4fs&-Erz]TZ rnCt~,zTCn4C]L)wI.|s1|5,+7Bn?fBdGT;2F3Y' );
define( 'LOGGED_IN_SALT',   'q:TOxhh w7.=~u(1ty=v &C&3N}0%FCO,hGEVmRD86gcvhHJy$+K z}[4AUg@5ak' );
define( 'NONCE_SALT',       '#qt/^<A[/Q~NB:N+~=.85dJyp)&quXn#=d84hBu U`-RS!& G_RO:gCJJfW4d~A?' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
