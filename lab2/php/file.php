<html>
    <head>
    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fn"><br><br>
            <input type="submit" value="upload" name="upload">
        </form>
    </body>
    <?php
        $file=fopen("demo.php","w");
        fwrite($file,"hello nandhu!");
        fclose($file);
        echo "File written successfully.";
        $file=fopen("demo.php","r");
        echo fread($file,filesize("demo.php"));
        fclose($file);
        echo file_get_contents("demo.php"); 
        file_put_contents("demo.php","this is new file");  
        $lines=file("demo.php");
        print_r($lines);
        //File Information
        $file="demo.php";
        echo "Exists:".file_exists($file)."<br>";
        echo "Size:".filesize($file)."<br>";
        echo "Type:".filetype($file)."<br>";
        echo "Last Access:".date("Y-m-d H:i:s",fileatime($file))."<br>";
        echo "Last Modified: " . date("Y-m-d H:i:s", filemtime($file)) . "<br>";
        echo "Created: " . date("Y-m-d H:i:s", filectime($file)) . "<br>";
        echo "Permissions: " . fileperms($file) . "<br>";
        echo "Owner: " . fileowner($file) . "<br>";
        echo "Group: " . filegroup($file) . "<br>";
        echo "Inode: " . fileinode($file) . "<br>";
        //Directory Handling
        copy("demo.php", "copy.php");
        rename("copy.php", "newname.php");
        unlink("newname.php");
        mkdir("newfolder");
        rmdir("newfolder");
        echo is_file("demo.php");
        echo is_dir("uploads");
        $files=scandir("uploads");
        print_r($files);
        $dir=opendir("uploads");
        while(($file=readdir($dir))!==false){
            echo $file."<br>";
        }
        closedir($dir);
        echo "Current Directory:".getcwd();
        chdir("uploads");
        echo "<br>Changed Directory";
        getcwd();
        $file=fopen("demo.php","w");
        if(flock($file,LOCK_EX)){
            fwrite($file,"Locked writing");
            flock($file,LOCK_UN);

        }
        fclose($file);
        $file=fopen("demo.php","a+");
        fwrite($file,"Adding data\n");
        fclose($file);


    ?>
</html>