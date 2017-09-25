<?php

namespace CJ\User;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;
use \CJ\User\HTMLForm\LoginForm;
use \CJ\User\HTMLForm\CreateUserForm;
use \CJ\User\HTMLForm\UpdateUserForm;
use \CJ\User\HTMLForm\UpdatePasswordForm;
use \CJ\User\HTMLForm\AdminUserForm;
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

    public function adminViewUsers()
    {
        $title      = "Admin edit users";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $allUsers = $this->di->get("umodel")->getAllUsers();

        if (!$this->di->get("umodel")->isUserAdmin()) {
            $this->di->get("response")->redirect("user/login");
        }

        $data = [ "users" => $allUsers ];

        $view->add("user/listUsers", $data, "main");
        $pageRender->renderPage(["title" => $title]);
    }

    public function adminDeleteUser($id)
    {
        if (!$this->di->get("umodel")->isUserAdmin()) {
            $this->di->get("response")->redirect("user/login");
        }

        $umodel = $this->di->get("umodel");
        $umodel->deleteUser($id);

        $this->di->get("response")->redirect("user/adminEditUser");
    }

    public function adminEditUser($id)
    {
        $title      = "Admin edit users";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $umodel = $this->di->get("umodel");

        if (!$umodel->isUserAdmin()) {
            $this->di->get("response")->redirect("user/login");
        }

        $form       = new AdminUserForm($this->di, $id);

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
