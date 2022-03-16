<div>
    
    <?php
session_start();

$pageID = $_POST["pageID"];

$_SESSION[$pageID] = $_POST;

echo '<pre>';
print_r($_SESSION);
echo '<pre>';
?>

</div>