<?php
    $path = "upgambar/";
    if (isset($_POST["uploadFile"])){
        if($_FILES["FlGAMBAR"]["error"]==0){
            $flname = $path . basename($_FILES["FlGAMBAR"]["name"]);
            move_uploaded_file($_FILES["FlGAMBAR"]["tmp_name"], $flname); 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
<?php
    if(isset($_POST["uploadFile"])){
        echo "<img src='".$flname."'>";
    }
?>
    <form action="latihan03.php" method="post" enctype="multipart/form-data">
        <div>
            Upload Gambar
            <input type="file" name="FlGAMBAR"> 
        </div>

        <div>
            <input type="hidden" name="uploadFile" value="OK">
            <button type="submit">Upload Gambar</button>
        </div>
    </form>
</body>
</html>