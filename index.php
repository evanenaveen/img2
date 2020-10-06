<?php
//include form submission script
include 'upload.php';
?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="./CSS/style.css">
        
    </head>
   
<body>
  
<h1>hi i m naveen (simpleclixxx)</h1>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <label>Select Image File:</label>
    <input type="file" name="image">
    <input type="submit" name="submit" value="Upload">
</form>
<p><strong>Note:</strong> please chck twice before uploading.</p>

</body>
</html>

