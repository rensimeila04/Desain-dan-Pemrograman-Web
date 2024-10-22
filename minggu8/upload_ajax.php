<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png");

    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    if (!in_array($file_ext, $allowed_extensions)) {
        $errors[] = "$file_name - Ekstensi file yang diizinkan adalah JPG, JPEG, atau PNG.";
    }

    if ($file_size > 2097152) {
        $errors[] = "$file_name - Ukuran file tidak boleh lebih dari 2 MB.";
    }

    if (empty($errors)) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "$file_name berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }
}
?>
