<?php

require_once __DIR__ . '../class/User.php';

class UserController
{
    private $user;

    public function __construct($pdo)
    {
        $this->user = new User(pdo: $pdo);
    }

    public function index()
    {
        return $this->user->read();
    }

    public function create($name, $email)
    {
        $this->user->create($name, $email);
    }

    public function update($id, $name, $email)
    {
        $this->user->update($id, $name, $email);
    }

    public function delete($id)
    {
        $this->user->delete($id);
    }
}