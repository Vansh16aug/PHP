<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $file = $_FILES['image'];
        $allowed = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($file['type'], $allowed) && $file['size'] <= 3 * 1024 * 1024) {
            $target = "uploads/" . basename($file['name']);
            move_uploaded_file($file['tmp_name'], $target);
            echo "Image uploaded successfully.";
        } else {
            echo "Invalid file type or size.";
        }
    }
    $images = glob("uploads/*");
?>
<form method="post" enctype="multipart/form-data">
    Upload Image: <input type="file" name="image">
    <input type="submit" value="Upload">
</form>
<h3>Gallery:</h3>
<div>
    <?php foreach ($images as $image): ?>
        <img src="<?php echo $image; ?>" width="100">
    <?php endforeach; ?>
</div>