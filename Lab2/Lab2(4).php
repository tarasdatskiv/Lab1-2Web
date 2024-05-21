<?php
function deleteDirectory($path) {
    if (!is_dir($path)) {
        return false;
    }
    
    $files = array_diff(scandir($path), array('.', '..'));
    
    foreach ($files as $file) {
        $filePath = $path . '/' . $file;
        
        if (is_dir($filePath)) {
            deleteDirectory($filePath);
        } else {
            unlink($filePath);
        }
    }
    
    return rmdir($path);
}

// Приклад використання:
$path = 'C:\Users\taras\OneDrive\Desktop\2424';
if (deleteDirectory($path)) {
    echo "Каталог та його вміст успішно видалено.";
} else {
    echo "Помилка видалення каталогу або вмісту.";
}

?>