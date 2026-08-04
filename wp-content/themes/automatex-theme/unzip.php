<?php
$zipFile = __DIR__ . '/assets/images.zip';
$extractPath = __DIR__ . '/assets/images/';

if (file_exists($zipFile)) {
    $zip = new ZipArchive;
    if ($zip->open($zipFile) === TRUE) {
        $zip->extractTo($extractPath);
        $zip->close();
        echo "UNZIP_SUCCESS: Images extracted successfully to " . $extractPath;
    } else {
        echo "UNZIP_ERROR: Failed to open zip file.";
    }
} else {
    echo "UNZIP_ERROR: images.zip file not found at " . $zipFile;
}
