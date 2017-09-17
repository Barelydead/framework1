<?php

namespace CJ\User;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * A controller user
 */
class UserController implements InjectionAwareInterface
{
    use InjectionAwareTrait;

    /**
     * render comment view
     */
    public function dbTest()
    {
        $data = ["title" => "testDB"];

        $this->di->get("view")->add("components/db", [], "main");
        $this->di->get("pageRender")->renderPage($data);
    }
}
