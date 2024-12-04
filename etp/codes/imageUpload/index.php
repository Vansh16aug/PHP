<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $allowed = ['image/jpeg', 'image/png', 'image/gif'];
    $fileType = $_FILES['image']['type'];
    $fileSize = $_FILES['image']['size'];

    if (in_array($fileType, $allowed) && $fileSize <= 3 * 1024 * 1024) {
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $_FILES['image']['name']);
        echo "Uploaded!";
    }
}

$images = glob("uploads/*");
foreach ($images as $img) {
    echo "<img src='$img' width='300'>";
}
?>


<form method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <button>Upload</button>
</form>
