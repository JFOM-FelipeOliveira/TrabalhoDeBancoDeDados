<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the sessivon
session_destroy();

header('Location: index.php');

?>

</body>
</html>