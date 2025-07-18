<?php 

class MessageController {

     /**
     * Affiche toutes les conversations d'un utilisateur. 
     * @return void
     */
    public function showAllConversationsByUser(): void
    {
        $userId = 1;
        $conversationManager = new ConversationManager(); 
        $conversations = $conversationManager->getAllConversationsByUser($userId);

        $conversationsData = [];

        foreach($conversations as $conversation) {
            $message = $this->getLastMessageFromConversation($conversation->getId()); 

            $otherConversationParticipant = $this->getConversationParticipantById($message->getRecipientId() === $userId ? $message->getSenderId() : $message->getRecipientId());

            $conversationData = [$message, $otherConversationParticipant];
            $conversationsData[] = $conversationData;
        }

        $view = new View("Messagerie");
        $view->render("messages", ['conversations' => $conversationsData]);
    }

    private function getConversationParticipantById(int $id) 
    {
        $userManager = new UserManager(); 
        $user = $userManager->getUserById($id); 
        return $user;
    }

    private function getLastMessageFromConversation(int $id) 
    {
        $messageManager = new MessageManager();
        $message = $messageManager->getLastMessageByConversation($id);
        return $message;
    }

    public function showConversationByUsers() : void
    {
        //
    }
}