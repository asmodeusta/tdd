<?php


namespace Tdd;


interface UserInterface
{

    public function getData() : array;

    public function getId(): int;

    public function getName(): string;

    public function checkPassword(string $password): bool;

}