<?php
$newArray = [];
foreach ($_POST as $key => $data) {
    $newArray[$key][] = $data;
}
$uploads_dir = 'files';
foreach ($_FILES as $file) {
    if ($_FILES['error'] !== 0) {
        echo 'error';
        $filename = $file['name'];
        $tmp_name = $file['tmp_name'];
    }
}
if (!is_dir($uploads_dir)) {
    mkdir($uploads_dir, 0700);
    move_uploaded_file($tmp_name, "$uploads_dir/$filename");
} else {
    move_uploaded_file($tmp_name, "$uploads_dir/$filename");
}
echo "<pre>";
print_r($newArray);
echo "<pre>";




