<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'id687340_opasaquei');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'id687340_opasaquei');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'empresafera');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm,F=&30||yoiAQN,YY+->X=`+}SN6tgoHymo9<Q&0]:` d@ m<(B+V?uZBV#d-OP');
define('SECURE_AUTH_KEY',  'W[.$vN^5%`L%:Rf%U3!S=H|t|= e7[fLq7~0/i([<[WPx}dlRDOm /|aJf~,2v,8');
define('LOGGED_IN_KEY',    'En7|A|PBql}eoiAG?aFE6&xcdZfq0;<,|Hm0(42?n1rK.8D>c&sQzIh Th4tsu$U');
define('NONCE_KEY',        's^padNB$8r$`WJuN7zdEJBS$WE+B|#]Gu$e.8fmiEr%E-$=jT`N9jRROX)Jyfi$4');
define('AUTH_SALT',        '8x#S6rc~1IFtsM^Fngh}eU0MJ&FY#>9Ev/c$UHWn7s>0J2Pq9^l>Jg5]h[b!,uav');
define('SECURE_AUTH_SALT', '!aj[@6iu<@-36AYFh_zw`LF%)Jt1dtl `c_P/:BI0~<,OGBz=hH!)ZW%wJ@w]>o7');
define('LOGGED_IN_SALT',   '5Q}mIa:EtX%gQAhw9QVNi.:Ro;Xq@oAA58iJ>xHS5L:z8!Hm:J;zWlK{go)x$Q]n');
define('NONCE_SALT',       'L+Ffh723rp/iY]-jkFMDdg8n&+{ttlKXXETi;rsHn9UM%rrIfP(rU5lcc4waY$L7');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'opasaquei_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
