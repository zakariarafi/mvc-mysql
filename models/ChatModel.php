<?php
require_once 'config/Database.php';

class ChatModel
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function saveMessage($username, $message)
    {
        $query = "INSERT INTO messages (username, message, time) VALUES (?, ?, NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $message);
        return $stmt->execute();
    }

    public function getAllMessages()
    {
        $query = "SELECT * FROM messages ORDER BY time ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}