<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'proloco');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '`ig,}Q.j/^7%IU,.]qj|rWsOZ6uz9j^.-YvtDC:x6*iv OSjl)##eR[!a3)+s4ak');
define('SECURE_AUTH_KEY',  '<qT0+S<{a9([T;?sx28=w9X!:`Yf?!dxZ!3dR2m>A-|tYBCNUk<z9psFGSZ}[Cx+');
define('LOGGED_IN_KEY',    '1*|,4<y5FJ_u{&+jW&LrzU?=O[@cFT`htBp3bJr`Mmoj<d_)Jn<HiF_Rd~,?z7kN');
define('NONCE_KEY',        'Krk@@:L{532qwxCY1|5i[JYLJ/5S5+t7y!wNYU,u[uOu6% 5sT&;ck@6Oz8i&n$$');
define('AUTH_SALT',        'Kj;%H5-.2:~L_+[D2NH!P?LB;M},`wDQ~7Ra,Yq:*Eo!+u`p*E3NO%xz98Kgl&;k');
define('SECURE_AUTH_SALT', '49S9rY3C80OilDiQZ@Odf[:Ij#!{/7^<XSb0=X46^B!q*yix>J4kFTa`lmk0VkUD');
define('LOGGED_IN_SALT',   'wMk[PSM>iv)x%sr($31P}0L/joywv?+.&9bp0x8:5[_XMAq*M-a-Q3tG9iKZUjY6');
define('NONCE_SALT',       'p`[zWz0`>u&A5Qoohn*-DP =nj@.#-`cu0#Ah=Fws$#c@>K*py{CrJVmQ`6Yf(J6');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');