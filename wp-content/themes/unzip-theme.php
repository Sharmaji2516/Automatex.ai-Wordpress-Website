<?php
$zipFile = __DIR__ . '/automatex-theme.zip';
$extractPath = __DIR__ . '/';

if (file_exists($zipFile)) {
    $zip = new ZipArchive;
    if ($zip->open($zipFile) === TRUE) {
        $zip->extractTo($extractPath);
        $zip->close();
        echo "THEME_UNZIP_SUCCESS: Extracted theme successfully!";
    } else {
        echo "THEME_UNZIP_ERROR: Could not open zip.";
    }
} else {
    echo "THEME_UNZIP_ERROR: automatex-theme.zip missing.";
}
