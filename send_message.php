<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['act']) && $_POST['act'] === 'order') {
    $botToken = "6835847460:AAHOg2n6_7GFM8vz_qjr81OWKXsbk39Xv14";
    $chatId = '-2160777255'; 
    $message = "Новая заявка на обмен";

    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $data = [
        'chat_id' => $chatId,
        'text' => $message
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ],
    ];
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        echo "Ошибка при отправке сообщения";
    } else {
        echo "Сообщение отправлено успешно";
    }
}
?>
