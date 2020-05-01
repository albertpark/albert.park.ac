<?

if (!defined('DS'))
    define('DS', DIRECTORY_SEPARATOR);

define('__ROOT__', dirname(dirname(__FILE__)) . DS);
define('__DOCUMENT__', dirname(__FILE__). DS);
define('__SERVER__', dirname(__FILE__) . DS);

define('__BIBLIOTHECA__', __ROOT__ . 'library' . DS);
define('__BIBCLASS__', __BIBLIOTHECA__ . 'class' . DS);

define('__CONFIG__', __DOCUMENT__ . 'config' . DS);

define('__LIBRARY__', __DOCUMENT__ . 'library' . DS);
define('__LIBCLASS__', __LIBRARY__ . 'class' . DS);

define('__APP__', __DOCUMENT__ . 'application' . DS);
define('__CONTROLLER__', __APP__ . 'controllers' . DS);
define('__MODEL__', __APP__ . 'models' . DS);
define('__VIEW__', __APP__ . 'views' . DS);

define('__PUBLIC__', __SERVER__ . 'public' . DS);
define('__CSS__', __PUBLIC__ . 'css' . DS);
define('__DATA__', __PUBLIC__ . 'data' . DS);
define('__IMG__', __PUBLIC__ . 'img' . DS);
define('__JS__', __PUBLIC__ . 'js' . DS);
define('__MINIFY__', __PUBLIC__ . 'min' . DS);

// print in bibliotheca

?>
