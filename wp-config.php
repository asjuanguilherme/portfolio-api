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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_webportfolio' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'mysql' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '2{ieFjGbQ`$0+@^B3j4.c!g2I&&bLg5mfaC/pt9w50B:yK7f{_I^~!n,>8!=bEWE' );
define( 'SECURE_AUTH_KEY',  'A8f)1JBWxoGO;{A*4n,gn1Zt`17a7L:rA0G>u2ILyhOL$cmr/cfQm]8;2!/uz[oM' );
define( 'LOGGED_IN_KEY',    'Qap!tN((%1(qw=4T5BpdUdC9eU|~#*P` 6TOs;$m%!-N?4@v/Wr^x+c959!t}N<m' );
define( 'NONCE_KEY',        'Y4:cQh9 E>jSwWmm%: BkgO~t)1}DikRiv(`tWC5X$]R%E9)S@=fhNqPDYuey>pz' );
define( 'AUTH_SALT',        '< 4m(Ys83m*k~|I`))(/$G?CPl`hmWdb!Y}iBP=4Ryiq2JMS^gCDTnR:BeTIE7QB' );
define( 'SECURE_AUTH_SALT', 'I$x0ah/3a`e,O4Uzoq)wBunYl_{Z.6`Vt$I_t^y Qoqxyuwl6y#8&&8sx~Jd)/Uj' );
define( 'LOGGED_IN_SALT',   'ded)2aBjgIRy.WL&#`i&U%ioI|sndlt<Y>k Hob,34RS4R#L/+9]d_{,45zOlOdW' );
define( 'NONCE_SALT',       'Ynj$HBO.$c? y?mHU-L RpjbY0O/$2K@zR+cdd7!wz.Um?Z.jdA#Q0|k.24bQPBr' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
