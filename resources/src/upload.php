<?php
session_start();
$statusMsg = '';

//file upload path
$targetDir = dirname(__FILE__, 3) . "/public/images/partners/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
//&& !empty($_FILES['file']['name']))
if (isset($_SESSION['moderator']) && !empty($_FILES["file"]["name"])) {
    //allow certain file formats
//    echo "" . $targetFilePath;
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $allowTypes)) {
        //upload file to server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            $statusMsg = "Il file " . $fileName . " è stato caricato.";
        } else {
            $statusMsg = "C'è stato un'errore durante l'upload dell'immagine.";
        }
    } else {
        $statusMsg = 'Solo i tipi JPG, JPEG, PNG, GIF, e PDF possono essere caricati.';
    }
} else {
    $statusMsg = 'Attenzione, seleziona un file da caricare.';
}

//display status message
echo $statusMsg;