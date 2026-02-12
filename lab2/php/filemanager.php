<?php
$folder = "uploads/";

// Delete File
if(isset($_GET['delete'])) {
    unlink($folder . $_GET['delete']);
}

// Upload
if(isset($_POST['upload'])) {
    move_uploaded_file($_FILES['file']['tmp_name'],
    $folder . $_FILES['file']['name']);
}
?>

<h2>Mini File Manager - Nandhu</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" name="upload" value="Upload">
</form>

<hr>

<h3>Files:</h3>

<?php
$files = scandir($folder);

foreach($files as $file) {
    if($file != "." && $file != "..") {
        echo $file . " | Size: " . filesize($folder.$file);
        echo " | Modified: " . date("Y-m-d H:i:s", filemtime($folder.$file));
        echo " | <a href='download.php?file=$file'>Download</a>";
        echo " | <a href='?delete=$file'>Delete</a><br>";
    }
}
?>