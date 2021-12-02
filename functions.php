<?php
function onSave() {
    //print_r($_POST["note"]);
    saveToFile($_POST['note']);
}

function saveToFile($note) {
    $notesArray = getFromFile();
    $notesArray[] = $note;
    $jsonNotes = json_encode($notesArray);

    file_put_contents("./notes.json", $jsonNotes);
}

function getFromFile() {
    $jsonNotes = file_get_contents("./notes.json");
    $notesArray = json_decode($jsonNotes, true);
    return $notesArray;
}

function deleteItem($index) {
    $notesArray = getFromFile();
    unset($notesArray[$index]);

    $jsonNotes = json_encode($notesArray);

    file_put_contents("./notes.json", $jsonNotes);
    header("Location: index.php");
}
?>