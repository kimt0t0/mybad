<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Reservation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'reservations')]
     */
    private User $user;

    /**
     * @[ORM\ManyToOne(targetEntity: Field::class, inversedBy: 'reservations')]
     */
    private Field $field;

    /**
     * One Reservation has One Timeslot.
     * @OneToOne(targetEntity="Timeslot", inversedBy="reservation")
     * @JoinColumn(name="timeslot_id", referencedColumnName="id")
     */
    private Timeslot $timeslot;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function getField(): ?Field
    {
        return $this->field;
    }

    public function getTimeslot(): ?Timeslot
    {
        return $this->timeslot;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function setField(Field $field): self
    {
        $this->field = $field;

        return $this;
    }

    public function setTimeslot(Timeslot $timeslot): self
    {
        $this->timeslot = $timeslot;

        return $this;
    }
}
