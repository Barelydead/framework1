<?php

namespace CJ\User\HTMLForm;

use \Anax\HTMLForm\FormModel;
use \Anax\DI\DIInterface;
use \CJ\User\User;

/**
 * Form to create an item.
 */
class CreateUserForm extends FormModel
{
    /**
     * Constructor injects with DI container.
     *
     * @param Anax\DI\DIInterface $di a service container
     */
    public function __construct(DIInterface $di)
    {
        parent::__construct($di);
        $this->form->create(
            [
                "id" => __CLASS__,
            ],
            [
                "mail" => [
                    "type" => "text",
                    "validation" => ["not_empty"],
                    "class" => "form-control"
                ],

                "password" => [
                    "type" => "password",
                    "validation" => ["not_empty"],
                    "class" => "form-control"
                ],
                "re-password" => [
                    "type" => "password",
                    "validation" => [
                        "not_empty",
                        "match" => "password"
                    ],
                    "class" => "form-control"
                ],
                "submit" => [
                    "type" => "submit",
                    "value" => "Create",
                    "callback" => [$this, "callbackSubmit"],
                    "class" => "btn btn-default"
                ],
            ]
        );
    }



    /**
     * Callback for submit-button which should return true if it could
     * carry out its work and false if something failed.
     *
     * @return boolean true if okey, false if something went wrong.
     */
    public function callbackSubmit()
    {
        $mail       = $this->form->value("mail");
        $password   = $this->form->value("password");
        $rePassword = $this->form->value("re-password");

        // Check password matches
        if ($password !== $rePassword) {
            $this->form->addOutput("Password did not match.");
            return false;
        }


        $user = new User();
        $user->setDb($this->di->get("db"));
        $user->mail = $mail;
        $user->created = date("Y-m-d H:i:s");
        $user->setPassword($password);
        $user->save();

        $this->form->addOutput("User was created.");
        return true;
    }
}
