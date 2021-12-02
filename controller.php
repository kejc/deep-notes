<?php
if(isset($_POST["note"])) {
    onSave();
}

if(isset($_GET['i'])) {
    deleteItem($_GET['i']);
}
?>