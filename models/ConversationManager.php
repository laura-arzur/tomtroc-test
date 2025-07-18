<?php 

/**
 * Classe qui gère les conversations.
 */
class ConversationManager extends AbstractEntityManager {

     /**
     * Crée une conversation.
     * @param int $senderId : le 1er participant.
     * @param int $recipientId : le 2ème participant.
     * @return void
     */
    public function createConversation(int $senderId, int $recipientId) : void
    {
        $sql = "INSERT INTO conversation (participant_one_id, participant_two_id) VALUES (:participant_one_id, :participant_two_id)";
        $this->db->query($sql, [
            'participant_one_id' => $senderId,
            'participant_two_id' => $recipientId
        ]);
    } 

    /**
     * Récupère une conversation par ses participants.
     * @param int $senderId 
     * @param int $recipientId
     * @return Conversation|null
     */
    public function getConversationByUsers(int $senderId, int $recipientId) : ?Conversation 
    {
        $sql = "SELECT * FROM conversation WHERE (user_one_id = :sender_id AND user_two_id = :recipient_id) OR (user_one_id = :recipient_id AND user_two_id = :sender_id)";
        $result = $this->db->query($sql, [
            'sender_id' => $senderId, 
            'recipient_id' => $recipientId
        ]);
        $conversation = $result->fetch();
        if ($conversation) {
            return new Conversation($conversation);
        }
        return null;
    } 

    /**
     * Récupère toutes les conversations d'un utilisateur 
     * @param int $id
     */
    public function getAllConversationsByUser(int $id) :array
    {
        $sql = "SELECT * FROM conversation WHERE participant_one_id = :user_id OR participant_two_id = :user_id"; 
        $result = $this->db->query($sql, [
            'user_id' => $id
        ]);
        $conversations = []; 

        while($conversation = $result->fetch()) {
            $conversations[] = new Conversation($conversation); 
        }

        return $conversations;
    }
}