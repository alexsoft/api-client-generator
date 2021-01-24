<?php declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace OpenApi\PetStoreClient\Schema;

use JsonSerializable;

class User implements SerializableInterface, JsonSerializable
{
    /** @var int|null */
    private $id;

    /** @var string|null */
    private $username;

    /** @var string|null */
    private $firstName;

    /** @var string|null */
    private $lastName;

    /** @var string|null */
    private $email;

    /** @var string|null */
    private $password;

    /** @var string|null */
    private $phone;

    /** @var int|null */
    private $userStatus;

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function setUserStatus(int $userStatus): self
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getUserStatus(): ?int
    {
        return $this->userStatus;
    }

    public function toArray(): array
    {
        $fields = [];
        if ($this->id !== null) {
            $fields['id'] = $this->id;
        }
        if ($this->username !== null) {
            $fields['username'] = $this->username;
        }
        if ($this->firstName !== null) {
            $fields['firstName'] = $this->firstName;
        }
        if ($this->lastName !== null) {
            $fields['lastName'] = $this->lastName;
        }
        if ($this->email !== null) {
            $fields['email'] = $this->email;
        }
        if ($this->password !== null) {
            $fields['password'] = $this->password;
        }
        if ($this->phone !== null) {
            $fields['phone'] = $this->phone;
        }
        if ($this->userStatus !== null) {
            $fields['userStatus'] = $this->userStatus;
        }

        return $fields;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}