<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cine' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'cine' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'cine' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9lcc@0|$Sd&(g[jLRJpai[TaG3O:uZeBl*OsWtrSA..+zqOZ_9n7,) &efm4G&kh' );
define( 'SECURE_AUTH_KEY',  'TLNHm`5_yvFOV%/P[F#:tFVH[Rq 4W]/@E{K.dWl`=Fnmc$fLjoOaL8RDRDE,7CZ' );
define( 'LOGGED_IN_KEY',    'oj[XIJ1j;[o=dvvO_q0+&v Z>^%/8UIIs07x@9 <W?b`Zc^I%VhQ#&mCR^z=LMRU' );
define( 'NONCE_KEY',        '31M@_a8]kTK)N;=%6dHJeJ^ap_$0f}@Hi0tIWVMv i<JV!(aPT*^#,2TS~a[xwk.' );
define( 'AUTH_SALT',        '&{vo`xC74bG&CGj)!cqCu21WVo|`tW[/K&tYY&xA:xdu9bm16}Q_8b@K@KK>qrlD' );
define( 'SECURE_AUTH_SALT', '~h_9LjTSH?+f($OaYV7QS9kphbP%|_S_ Cn7@>?u4VP9B|ux91L_^{b~O`Y !eoc' );
define( 'LOGGED_IN_SALT',   'D~7<%+7:W>}4)[9$6{oxGMV2B4&68l+qGei+{2yJBF?VHlb>dS2Vv?8q4~mEb%d*' );
define( 'NONCE_SALT',       '7u8{L!izf`KqdC/uLt<&.,j[6^#4iw9m2r8{pj&qsTH5i]T*4r-aSJb5tN`sLIQ9' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_cine';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
