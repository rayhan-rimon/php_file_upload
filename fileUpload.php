<?php
if(isset($_POST['submit'])){
    $uploadFile = $_FILES['uploadFile']['name'];
    $uploadLocation = $_FILES['uploadFile']['tmp_name']; // File Uploaded Tem Location
    $moveLocation = 'img/'; // User Define Location

    if(!empty($uploadFile)){

        // File Moved Tem Location to user Define Location
        move_uploaded_file($uploadLocation, $moveLocation.$uploadFile); 

        echo "File was Uploaded";
    }
    else{
        echo "Please Choose Your File";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Upload With Security</title>

    <!-- === === BOOTSTRAP CSS === === -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container bg-primary mt-3">
        <div class="row d-flex justify-content-center">
            <h2 class="text-center text-light p-4">File Upload With Security</h2>
            <form class="p-3 col-md-9" action="fileUpload.php" method="POST" enctype="multipart/form-data">
                
                <div class="mb-3">
                    <input class="form-control" name="uploadFile" type="file" id="uploadFile">
                </div>

                <input type="submit" value="Submit" name="submit" class="btn btn-dark">
                
                <!-- <button type="submit" class="btn btn-dark mb-3">Submit</button> -->
            </form>
        </div>
    </div>
</body>
</html>