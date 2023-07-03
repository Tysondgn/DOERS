<?php
session_start();
session_unset();
session_destroy();
if(isset($_SESSION['f_name'])) {
    header('Location: '.$BackToMyPage);
} else {
    header('Location: index.php'); // default page
}
exit();
?>