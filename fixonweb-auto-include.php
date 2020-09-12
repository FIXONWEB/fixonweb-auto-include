<?php
/**
 * Plugin Name:     fixonweb-auto-include
 * Plugin URI:      https://fixonweb.com.br/plugin/Carrega os arquivos .php postados no diretorio add-in.
 * Description:     Carrega os arquivos .php postados no diretorio add-in.
 * Author:          FIXONWEB
 * Author URI:      https://fixonweb.com.br
 * Text Domain:     fixonweb-auto-include
 * Domain Path:     /languages
 * Version:         0.1.2
 *
 * @package         Fixonweb_Auto_Include
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

require 'plugin-update-checker.php';
$url_159839 	= 'https://github.com/fixonweb/fixonweb-auto-include';
$slug_159839 	= 'fixonweb-auto-include/fixonweb-auto-include';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker($url_159839,__FILE__,$slug_159839);

function fix1599916789_load_modules($directory, $recursive = true, $listDirs = false, $listFiles = true, $exclude = '') {
    $arrayItems = array();
    $skipByExclude = false;
    $handle = opendir($directory);
    if ($handle) {
        while (false !== ($file = readdir($handle))) {
        preg_match("/(^(([\.]){1,2})$|(\.(svn|git|md))|(Thumbs\.db|\.DS_STORE))$/iu", $file, $skip);
        if($exclude){
            preg_match($exclude, $file, $skipByExclude);
        }
        if (!$skip && !$skipByExclude) {
            if (is_dir($directory. DIRECTORY_SEPARATOR . $file)) {
                if($recursive) {
                    $arrayItems = array_merge($arrayItems, fix1599916789_load_modules($directory. DIRECTORY_SEPARATOR . $file, $recursive, $listDirs, $listFiles, $exclude));
                }
                if($listDirs){
                    $file = $directory . DIRECTORY_SEPARATOR . $file;
                    $arrayItems[] = $file;
                }
            } else {
                if($listFiles){
                    $file = $directory . DIRECTORY_SEPARATOR . $file;
                    $arrayItems[] = $file;
                }
            }
        }
    }
    closedir($handle);
    }
    return $arrayItems;
}


$path_modules = plugin_dir_path( __FILE__ )."add-in";
$dire = fix1599916789_load_modules($path_modules);
sort($dire);
foreach ($dire as $key => $value) {
	$extensao = substr($value, -4) ;
	if($extensao=='.php') require_once($value);;
}

//== WP-MU ==============================
$url = substr(get_bloginfo("url"), 32) ;
$path_modules_wpmu = plugin_dir_path( __FILE__ )."add-in-mu/".$url;
$dire = fix1599916789_load_modules($path_modules_wpmu);
sort($dire);
foreach ($dire as $key => $value) {
    $extensao = substr($value, -4) ;
    if($extensao=='.php') require_once($value);;
}
