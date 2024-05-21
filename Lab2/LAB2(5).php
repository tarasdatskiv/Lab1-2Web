<?php

// Функція для розбиття файлу на частини
function splitFile($filePath, $chunkSize) {
    $fileHandle = fopen($filePath, 'rb');
    $partNumber = 1;

    while (!feof($fileHandle)) {
        $chunk = fread($fileHandle, $chunkSize);
        $partFilePath = $filePath . '.part' . $partNumber;
        file_put_contents($partFilePath, $chunk);
        $partNumber++;
    }

    fclose($fileHandle);
}

// Функція для збирання частин файлу в один файл
function mergeFiles($partFiles, $outputFilePath) {
    $outputHandle = fopen($outputFilePath, 'wb');

    foreach ($partFiles as $partFile) {
        $partHandle = fopen($partFile, 'rb');
        while (!feof($partHandle)) {
            fwrite($outputHandle, fread($partHandle, 8192));
        }
        fclose($partHandle);
    }

    fclose($outputHandle);
}

// Приклад використання:

// Розбиття файлу на частини
$filePath = 'C:\Python\Lab2\task1.py';
$chunkSize = 1024 * 1024; // 1 MB
splitFile($filePath, $chunkSize);

// Збирання частин файлу в один файл
$partFiles = glob($filePath . '.part*');
$outputFilePath = 'C:\Python\Lab2\task1.py';
mergeFiles($partFiles, $outputFilePath);

// Очистка частинних файлів після збирання
foreach ($partFiles as $partFile) {
    unlink($partFile);
}

echo "Файл розбито та зібрано успішно.";
?>
