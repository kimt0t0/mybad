<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Field
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $name;

    /**
     * @[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'field')]
     */

    private Reservation $reservations;

    /**
     * @[ORM\OneToMany(targetEntity: Timeslot::class, mappedBy: 'field')]
     */

    private $timeslots;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getReservations(): ?Reservation
    {
        return $this->reservations;
    }

    public function getTimeslots(): ?Reservation
    {
        return $this->timeslots;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setReservations(Reservation $reservations): self
    {
        $this->reservations = $reservations;

        return $this;
    }

    public function setTimeslots(Reservation $timeslots): self
    {
        $this->timeslots = $timeslots;

        return $this;
    }
}
