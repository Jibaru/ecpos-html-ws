<?php

$HTML_FILENAME = 'print-content.html';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['html'])) {
    $html = $_POST['html'];
    
    $html .= file_get_contents($HTML_FILENAME);

    $html = str_replace("javascript:window.print()", "", $html);
    $html = str_replace("<body", '<body style="display: flex; flex-direction: column; align-items: center;" ', $html);
    $html = str_replace('class="esc-receipt"', 'class="esc-receipt" style="border-bottom: 3px solid red;" ', $html);

    file_put_contents($HTML_FILENAME, $html);
    
    http_response_code(200);
    echo "HTML actualizado correctamente.";
} else {
    $html = '';

    if (isset($_GET['clear'])) {
        file_put_contents($HTML_FILENAME, '');
    } else {
        $html = file_get_contents($HTML_FILENAME);
    }

    header("Content-Type: text/html");
    echo $html;
}
