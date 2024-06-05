<?php
require_once 'controllers/ChatController.php';

$chatController = new ChatController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'sendMessage') {
    $username = $_POST['username'];
    $message = $_POST['message'];

    if ($chatController->sendMessage($username, $message)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'failed']);
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'getMessages') {
    $messages = $chatController->getMessages();
    foreach ($messages as $message) {
        $username = htmlspecialchars($message['username']);
        $messageText = htmlspecialchars($message['message']);
        $messageClass = ($username === 'You') ? 'message-bubble' : 'message-bubble other';
        echo "<div class='$messageClass'><p><strong>$username:</strong> $messageText</p></div>";
    }
    exit;
}

include 'views/chat.php';
