<?php
/**
 * Created by PhpStorm.
 * User: arsob
 * Date: 01/01/17
 * Time: 20:11
 */

namespace Tickets\Domain;


use DateTimeImmutable;
use DateTimeInterface;
use Ramsey\Uuid\UuidInterface;

class TicketEvent
{
    /**
     * @var UuidInterface
     */
    private $uuid;
    /**
     * @var UuidInterface
     */
    private $ticketUuid;
    /**
     * @var int
     */
    private $status;
    /**
     * @var string
     */
    private $content;

    /**
     * @var DateTimeInterface
     */
    private $createdAt;
    /**
     * @var array
     */
    private $files;

    /**
     * TicketResponse constructor.
     * @param UuidInterface $uuid
     * @param UuidInterface $ticketUuid
     * @param int $status
     * @param string $content
     * @param array $files
     */
    public function __construct(
        UuidInterface $uuid,
        UuidInterface $ticketUuid,
        int $status,
        string $content,
        array $files
    )
    {

        $this->uuid = $uuid;
        $this->ticketUuid = $ticketUuid;
        $this->status = $status;
        $this->content = $content;
        $this->createdAt = new DateTimeImmutable();
        $this->files = $files;
    }

    /**
     * @return array
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @return UuidInterface
     */
    public function getUuid(): UuidInterface
    {
        return $this->uuid;
    }

    /**
     * @return UuidInterface
     */
    public function getTicketUuid(): UuidInterface
    {
        return $this->ticketUuid;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param UuidInterface $ticketUuid
     */
    public function setTicketUuid(UuidInterface $ticketUuid)
    {
        $this->ticketUuid = $ticketUuid;
    }

}