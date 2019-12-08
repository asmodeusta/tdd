<?php

namespace Tdd;

abstract class AbstractUser implements UserInterface
{

    protected $id;
    protected $name;
    protected $password;

    public function getData() : array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'password' => str_repeat('*', strlen($this->password)),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function checkPassword(string $password): bool
    {
        return $password === $this->password;
    }

}