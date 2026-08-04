<?php
$zipFile = __DIR__ . '/assets/images.zip';
$extractPath = __DIR__ . '/assets/images/';

echo "Zip file path: " . $zipFile . "<br>";
echo "Zip file exists: " . (file_exists($zipFile) ? "YES" : "NO") . "<br>";

if (file_exists($zipFile)) {
    $zip = new ZipArchive;
    $res = $zip->open($zipFile);
    if ($res === TRUE) {
        $zip->extractTo($extractPath);
        $zip->close();
        echo "SUCCESS: Extracted images.zip completely into assets/images/!";
    } else {
        echo "ERROR: ZipArchive open failed with code: " . $res;
    }
} else {
    echo "ERROR: File assets/images.zip not found.";
}
