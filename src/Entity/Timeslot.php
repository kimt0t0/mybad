<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Timeslot
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $time_start;

    /**
     * @ORM\Column(type="datetime")
     */
    private $time_end;

    /**
     * #[ORM\ManyToOne(targetEntity: Field::class, inversedBy: 'timeslots')]
     */
    private Field $field;

    /**
     * One Reservation has One Timeslot.
     * @OneToOne(targetEntity="Reservation", mappedBy="timeslot")
     */
    private Reservation $reservation;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $blocked;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStart(): ?DateTime
    {
        return $this->time_start;
    }

    public function getEnd(): ?DateTime
    {
        return $this->time_end;
    }

    public function getField(): ?Field
    {
        return $this->field;
    }

    public function getReservation(): ?Reservation
    {
        return $this->reservation;
    }

    public function getBlocked(): ?bool
    {
        return $this->blocked;
    }

    public function setStart(DateTime $time_start): self
    {
        $this->time_start = $time_start;

        return $this;
    }

    public function setEnd(DateTime $time_end): self
    {
        $this->time_start = $time_end;

        return $this;
    }

    public function setField(Field $field): self
    {
        $this->field = $field;

        return $this;
    }

    public function setReservation(Reservation $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }

    public function setBlocked(bool $blocked): self
    {
        $this->blocked = $blocked;

        return $this;
    }
}
