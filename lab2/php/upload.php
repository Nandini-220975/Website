<?php
if (isset($_POST['upload'])) {

    $name = $_FILES['fn']['name'];
    $tmpName  = $_FILES['fn']['tmp_name'];

    $folder = "uploads/".$name;

    if (move_uploaded_file($tmpName, $folder)) {
        echo "File uploaded successfully!<br><br>";
        echo "<a href='download.php?file=$name'>Download File</a>";
    } else {
        echo "Upload failed";
    }
}
?>