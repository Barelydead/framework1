<?php

namespace CJ\User\HTMLForm;

use \Anax\HTMLForm\FormModel;
use \Anax\DI\DIInterface;
use \CJ\User\User;

/**
 * Form to create an item.
 */
class AdminUserForm extends FormModel
{
    /**
     * Constructor injects with DI container.
     *
     * @param Anax\DI\DIInterface $di a service container
     */
    public function __construct(DIInterface $di, $id)
    {
        parent::__construct($di);
        $this->id = $id;

        $user = $this->getUserDetails($id);
        $this->form->create(
            [
                "id" => __CLASS__,
            ],
            [
                "mail" => [
                    "type" => "text",
                    "validation" => ["not_empty"],
                    "value" => $user->mail,
                    "class" => "form-control"
                ],
                "userType" => [
                    "type" => "text",
                    "value" => $user->userType,
                    "class" => "form-control"
                ],
                "password" => [
                    "type" => "password",
                    "value" => null,
                    "class" => "form-control"
                ],
                "updated" => [
                    "type" => "hidden",
                    "value" => date("Y-m-d H:i:s"),
                ],
                "submit" => [
                    "type" => "submit",
                    "value" => "Update",
                    "callback" => [$this, "callbackSubmit"],
                    "class" => "btn btn-default"
                ],
            ]
        );
    }

    public function getUserDetails($id)
    {
        $user = new User();
        $user->setDb($this->di->get("db"));
        $user->find("id", $id);

        return $user;
    }

    /**
     * Callback for submit-button which should return true if it could
     * carry out its work and false if something failed.
     *
     * @return boolean true if okey, false if something went wrong.
     */
    public function callbackSubmit()
    {
        $mail = $this->form->value("mail");
        $userType = $this->form->value("userType");
        $updated = $this->form->value("updated");
        $password = $this->form->value("password");

        $user = new User();
        $user->setDb($this->di->get("db"));
        $user->find("id", $this->id);
        $user->updated = $updated;
        $user->mail = $mail;
        $user->userType = $userType;

        if (isset($password)) {
            $user->setPassword($password);
        }
        $user->save();

        $this->form->addOutput("Uppdaterad");
        return true;
    }
}
