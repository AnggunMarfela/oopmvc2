<?php
require_once 'core/Database.php';
require_once 'controller/SkpController.php';

// Create a new instance of the Database class
$database = new Database();
// Call the getConnection method to get the database connection
$db = $database->openDbConnection();

// Create a new instance of the SkpController class
$controller = new SkpController($db);

// Determine the page to display
$page = isset($_GET['page']) ? $_GET['page'] : 'index';

// Display the appropriate page based on the query parameter
switch ($page) {
    case 'create':
        $controller->create();
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
?>
