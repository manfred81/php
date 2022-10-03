<?php
class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private string $User;
    private array $comments = [];

    public function  __construct(User $user, string $description, int $priority = 1)
    {
        $this->user = $user;
        $this->description = $description;
        $this->$priority = $priority;
        $this->setDateCreated(new DateTime());
    }
    public function markAsDone(): void
    {
        $this->setDateUpdated(new DateTime);
        $this->setDateDone(new DateTime);
        $this->setIsDone();
    }

    /**
     * Get the value of dateCreated
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set the value of dateCreated
     *
     * @return  self
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of dateUpdated
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set the value of dateUpdated
     *
     * @return  self
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * Get the value of dateDone
     */
    public function getDateDone()
    {
        return $this->dateDone;
    }

    /**
     * Set the value of dateDone
     *
     * @return  self
     */
    public function setDateDone($dateDone)
    {
        $this->dateDone = $dateDone;

        return $this;
    }

    /**
     * Get the value of priority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set the value of priority
     *
     * @return  self
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get the value of User
     */
    public function getUser()
    {
        return $this->User;
    }

    /**
     * Set the value of User
     *
     * @return  self
     */
    public function setUser($User)
    {
        $this->User = $User;

        return $this;
    }

    /**
     * Get the value of comments
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * Set the value of comments
     *
     * @return  self
     */
    public function setComment(Comment $comment): void
    {
        $this->comments[] = $comment;
    }

    /**
     * Get the value of isDone
     */
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * Set the value of isDone
     *
     * @return  self
     */
    public function setIsDone(): bool
    {
        return $this->isDone;
    }
}
