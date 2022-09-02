<?php declare(strict_types=1);

namespace App\Entity;

use DateTime;

class User
{
    private int $id = 0;
    private string $username = '';
    private string $password = '';
    private string $email = '';
    private DateTime $registrationDate;
    private DateTime $lastAction;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRegistrationDate(): DateTime
    {
        return $this->registrationDate;
    }

    public function setRegistrationDate(DateTime $registrationDate): self
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    public function getLastAction(): DateTime
    {
        return $this->lastAction;
    }

    public function setLastAction(DateTime $lastAction): self
    {
        $this->lastAction = $lastAction;

        return $this;
    }
}
