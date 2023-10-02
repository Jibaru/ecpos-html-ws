<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['html'])) {
    $html = $_POST['html'];
    
    $html .= file_get_contents('print-content.html');

    file_put_contents('print-content.html', str_replace("javascript:window.print()", "", $html));
    
    http_response_code(200);
    echo "HTML actualizado correctamente.";
} else {
    $html = file_get_contents('print-content.html');

    header("Content-Type: text/html");
    echo $html;
}
