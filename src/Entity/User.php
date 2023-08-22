<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=160)
     */
    private $password;

    /**
     * @[ORM\OneToMany(targetEntity: Reservation::class, mappedBy: 'user')]
     */

    private Reservation $reservations;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getReservations(): ?Reservation
    {
        return $this->reservations;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function setReservations(Reservation $reservations): self
    {
        $this->reservations = $reservations;

        return $this;
    }
}
