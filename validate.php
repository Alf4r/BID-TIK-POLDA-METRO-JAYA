<?php

function validate_input($data) {
    $data = trim($data); // Menghilangkan whitespace di awal dan akhir string
    $data = stripslashes($data); // Menghilangkan backslashes
    $data = htmlspecialchars($data); // Mengkonversi karakter khusus menjadi entitas HTML
    return $data;
}

?>
