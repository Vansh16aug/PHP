<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Example</title>
</head>
<body>

<!-- HTML Form to Upload a File -->
<form action=" " method="post" enctype="multipart/form-data">
<!--The enctype attribute specifies how the form-data should be encoded when submitting it to the server. This value is necessary if the user will upload a file through the form-->
    <label for="fileUpload">Select file to upload:</label>
    <input type="file" name="fileUpload" id="fileUpload">
    <input type="submit" value="Upload File" name="submit">
</form>
<?php

// Check if the form was submitted
if (isset($_POST["submit"])) {
//Use isset() method in PHP to test the form is submitted successfully or not
    // Check if the file was uploaded without errors
    if (isset($_FILES["fileUpload"]) && $_FILES["fileUpload"]["error"] == 0) {
        $fileName = $_FILES["fileUpload"]["name"];
        $fileTmpName = $_FILES["fileUpload"]["tmp_name"];
        $fileSize = $_FILES["fileUpload"]["size"];
        $fileType = $_FILES["fileUpload"]["type"];
        $fileError = $_FILES["fileUpload"]["error"];

        // Set a directory to upload the file to
        $uploadDirectory = "uploads/";
        
        // Ensure the directory exists
        if (!is_dir($uploadDirectory)) {
            mkdir($uploadDirectory, 0755);
        }

        // Set the target file path
        $targetFilePath = $uploadDirectory . basename($fileName);
//The basename() function returns the filename from a path.
        // Allow only certain file types (for example, only images)
        $allowedFileTypes = array("jpg", "jpeg", "png", "gif");
        $fileExtension = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
//The pathinfo() function returns information about a file path.
        // Check if the file type is allowed
        if (in_array($fileExtension, $allowedFileTypes)) {
            // Check file size (limit to 5MB)  2 * 1024 * 1024 Bytes. 
            if ($fileSize < 5000000) {
                // Move the file from the temporary directory to the target directory
                if (move_uploaded_file($fileTmpName, $targetFilePath)) {
                    echo "The file " . basename($fileName) . " has been uploaded successfully!";
                } else {
                    echo "Error: There was an error uploading your file.";
                }
            } else {
                echo "Error: File size is too large. Maximum allowed size is 5MB.";
            }
        } else {
            echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "Error: " . $_FILES["fileUpload"]["error"];
    }
}
?>
</body>
</html>

