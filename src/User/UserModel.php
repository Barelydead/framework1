<?php

namespace CJ\User;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;
use \CJ\User\User;

class UserModel implements InjectionAwareInterface
{
    use InjectionAwareTrait;

    protected $user;


    public function init()
    {
        $db = $this->di->get("db");

        $this->user = new User();
        $this->user->setDb($db);
    }


    /*
    * Get all users.
    */
    public function getAllUsers()
    {
        $this->init();
        return $this->user->findAll();
    }


    /*
    * Get a user based on ID
    */
    public function getUser($id)
    {
        $this->init();
        return $this->user->find("id", $id);
    }

    /*
    * Get a user based on ID
    */
    public function isLoggedIn()
    {
        $session = $this->di->get("session");

        return $session->has("user");
    }


    /*
    * Get a user based on ID
    */
    public function getLoggedInUserId()
    {
        $session = $this->di->get("session");

        return $session->get("user");
    }


    public function getUserImg($mail, $classes = "", $size = 125)
    {
        $hash = md5($mail);

        $html = "<img src='https://www.gravatar.com/avatar/$hash?s=$size&default=mm' class='$classes'>";
        return $html;
    }
}
