<?php

use Phalcon\Mvc\Model;

class Signups extends Model
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $role;
    public $token;
}