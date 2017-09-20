<?php

namespace CJ\User;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;
use \CJ\User\HTMLForm\LoginForm;
use \CJ\User\HTMLForm\CreateUserForm;
use \CJ\User\HTMLForm\UpdateUserForm;
use \CJ\User\HTMLForm\UpdatePasswordForm;
use \CJ\User\User;


/**
 * A controller user
 */
class UserController implements InjectionAwareInterface
{
    use InjectionAwareTrait;

    /**
     * Login User
     */
    public function renderLogin()
    {
        $title      = "User Login";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new LoginForm($this->di);

        $form->check();

        $data = [
            "form" => $form->getHTML(),
        ];

        $view->add("user/login", $data);
        $pageRender->renderPage(["title" => $title]);
    }

    /**
     * Create User
     */
    public function createUser()
    {
        $title      = "Create user";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new CreateUserForm($this->di);

        $form->check();

        $data = [
            "form" => $form->getHTML(),
        ];

        $view->add("user/createUser", $data, "main");
        $pageRender->renderPage(["title" => $title]);
    }

    /**
     * userProfile page
     */
    public function userProfile()
    {
        $title      = "Profile";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $session    = $this->di->get("session");

        if (!$session->has("user")) {
            $this->di->get("response")->redirect("user/login");
        }

        $user = new User();
        $user->setDb($this->di->get("db"));
        $user->find("id", $session->get("user"));

        $data = ["user" => $user];

        $view->add("user/profile", $data, "main");
        $pageRender->renderPage(["title" => $title]);
    }

    /**
     * userProfile page
     */
    public function editUser()
    {
        $title      = "Profile";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $session    = $this->di->get("session");

        if (!$session->has("user")) {
            $this->di->get("response")->redirect("user/login");
        }

        $form       = new UpdateUserForm($this->di, $session->get("user"));

        $form->check();

        $data = ["form" => $form->getHTML()];

        $view->add("user/update", $data, "main");
        $pageRender->renderPage(["title" => $title]);
    }

    /**
     * userProfile page
     */
    public function editPassword()
    {
        $title      = "Profile";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $session    = $this->di->get("session");

        if (!$session->has("user")) {
            $this->di->get("response")->redirect("user/login");
        }

        $form       = new UpdatePasswordForm($this->di, $session->get("user"));

        $form->check();

        $data = ["form" => $form->getHTML()];

        $view->add("user/update", $data, "main");
        $pageRender->renderPage(["title" => $title]);
    }

    /**
     * logout User
     */
    public function logout()
    {
        $session = $this->di->get("session");

        $session->destroy("user");

        if (!$session->has("user")) {
            $this->di->get("response")->redirect("user/login");
        }
    }
}
