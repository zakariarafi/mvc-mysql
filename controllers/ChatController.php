<?php
require_once 'models/ChatModel.php';

class ChatController
{
    private $chatModel;

    public function __construct()
    {
        $this->chatModel = new ChatModel();
    }

    public function sendMessage($username, $message)
    {
        return $this->chatModel->saveMessage($username, $message);
    }

    public function getMessages()
    {
        return $this->chatModel->getAllMessages();
    }
}