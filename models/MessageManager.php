<?php

/**
 * Classe qui gère les messages.
 */
class MessageManager extends AbstractEntityManager {

    /**
     * Envoi un message 
     * @param Message $message 
     * @return void 
     */
    public function sendMessage(Message $message) : void 
    {
        $sql = "INSERT INTO message (content, created_at, seen, sender_id, recipient_id, conversation_id) VALUES (:content, NOW(), 0, :sender_id, :recipient_id, :conversation_id)";
        $this->db->query($sql, [
            'content' => $message->getContent(),
            'sender_id' => $message->getSenderId(),
            'recipient_id' => $message->getRecipientId(),
            'conversation_id' => $message->getConversationId()
        ]);
    }

    /**
     * Récupère le dernier message de chaque conversation d'un utilisateur 
     * @param int $id 
     * @return Message|null
     */
    public function getLastMessageByConversation(int $id) : ?Message
    {
        
        $sql = "SELECT * FROM message WHERE conversation_id = :conversation_id ORDER BY created_at DESC LIMIT 1"; 
        $result = $this->db->query($sql, [
            'conversation_id' => $id
        ]);
        $message = $result->fetch();
        if ($message) {
            return new Message($message);
        }
        return null;
    }

    /**
     * Récupère tous les messages d'une conversation entre 2 utilisateurs
     * @param int $id 
     * @return array : un tableau d'objets Message
     */
    public function getAllMessagesByConversation(int $id) : array
    {
        $sql = "SELECT * FROM message WHERE conversation_id = :conversation_id ORDER BY created_at ASC"; 
        $result = $this->db->query($sql, [
            'conversation_id' => $id
        ]);
        $messages = []; 

        while($message = $result->fetch()) {
            $messages[] = new Message($message); 
        }

        return $messages;
    }

    /**
     * Récupère le nombre de messages non lus d'un utilisateur
     * @param int $id
     * @return int 
     */
    public function getNumberOfUnseenMessagesByUser(int $id) : int
    {
        $sql = "SELECT COUNT(id) AS count FROM message WHERE seen = 0 AND recipient_id  = :recipient_id";
        $result = $this->db->query($sql, [
            'recipient_id' => $id
        ]); 
        $notificationsNumber = $result->fetch(); 

        return (int) $notificationsNumber['count'];
    }
}