<?php
// Include utility files
require_once 'include/config.php';
require_once BUSINESS_DIR . 'error_handler.php';

// Set the error handler
ErrorHandler::SetHandler();

// Load the application page template
require_once PRESENTATION_DIR . 'application.php';

// передать template файл Smarty  
$application = new Application();
// вывести на экран
$application->display('store_front.tpl');

// Try to load inexistent file
require_once 'inexistent_file.php';
?>