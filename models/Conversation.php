<?php 

/**
 * Entité représentant une conversation définie par les champs
 * id, participant_one_id, participant_two_id
 */
class Conversation extends AbstractEntity {
    private int $participantOneId;
    private int $participantTwoId;

    /**
     * Setter pour l'id du 1er participant à la conversation. 
     * @param int $participantOneId
     */
    public function setParticipantOneId(int $participantOneId): void
    {
        $this->participantOneId = $participantOneId;
    }

    /**
     * Getter pour l'id du 1er participant à la conversation.
     * @return int
     */
    public function getParticipantOneId(): int
    {
        return $this->participantOneId;
    }

    /**
     * Setter pour l'id du 2ème participant à la conversation. 
     * @param int $participantTwoId
     */
    public function setParticipantTwoId(int $participantTwoId): void
    {
        $this->participantTwoId = $participantTwoId;
    }

    /**
     * Getter pour l'id du 2ème participant à la conversation.
     * @return int
     */
    public function getParticipantTwoId(): int
    {
        return $this->participantTwoId;
    }
}