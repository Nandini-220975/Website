<?php
if (isset($_GET['fn'])) {

    $file="uploads/".$_GET['fn'];
    if(file_exists($file)){
        header('Content-Type:application/octet-stream');
        header('Content-Disposition:attachment;filename="'.basename($file).'"');
        header('Content-Length:'.filesize($file));
        exit;
    }
    else{
        echo "File not found";
    }
}
?>