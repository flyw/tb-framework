<?php
set_include_path(get_include_path() . PATH_SEPARATOR .'Controllers' . PATH_SEPARATOR .'Models');
spl_autoload_extensions('.php');
spl_autoload_register();
$projectPath = preg_replace('/\//' , '\\\\/' , substr( $_SERVER['PHP_SELF'] , 0 , -9));
$requestPath = preg_replace("/^$projectPath/" , '' , $_SERVER['REQUEST_URI']);
$operations = preg_split('/\//' , $requestPath);
$controllerClass = (ucfirst($operations[0].'Controller')=='Controller')?'DashboardController':ucfirst($operations[0].'Controller');
$action = isset($operations[1])?$operations[1].'Action':'indexAction';

if(false == class_exists($controllerClass)) { die ('Class '.$controllerClass .' not exist.'); }
$ctl = new $controllerClass();
if(false == method_exists( $ctl , $action)) { die ('Method '.$action .' not exist on '.$controllerClass.'.');}
$ctl->calledAction = $action;
echo $ctl->$action();
exit();
