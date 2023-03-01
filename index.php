<?php
 
   if(isset($_POST["submit"])){
       $file_url = $_POST["url"];
       $file_name= basename($file_url);

       header("Cache-Control: public"); 
       header("Content-Description: File Transfer");
       header("Content-Disposition: attachment; filename=$file_name");
       header("Content-Type: application/zip");
       header("Content-Transfer-Encoding: binary");

       readfile($file_url);

   }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>PHP File downloader </title>
</head>
<body>
        <div class="container">
             <h2>Simple file downloader</h2>
             <form action="" class="form" method="post">
                <div>
                    <label for="">URL</label><br/>
                    <input name="url" class="form-control" placeholder="Enter your url" required/>
                </div>
                  <button name="submit" type="submit">Download</button>
             </form>
        </div>
</body>
</html>