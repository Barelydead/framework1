<?php

return [
    "routes" => [
        [
            "info" => "form for loggin in user",
            "requestMethod" => "get|post",
            "path" => "login",
            "callable" => ["ucontrol", "renderLogin"]
        ],
        [
            "info" => "create user form",
            "requestMethod" => "get|post",
            "path" => "create",
            "callable" => ["ucontrol", "createUser"]
        ],
        [
            "info" => "user profile",
            "requestMethod" => "get",
            "path" => "profile",
            "callable" => ["ucontrol", "userProfile"]
        ],
        [
            "info" => "edit user",
            "requestMethod" => "get|post",
            "path" => "editUser",
            "callable" => ["ucontrol", "editUser"]
        ],
        [
            "info" => "Admin page to edit all users",
            "requestMethod" => "get|post",
            "path" => "adminEditUser",
            "callable" => ["ucontrol", "adminViewUsers"]
        ],
        [
            "info" => "Delete a user",
            "requestMethod" => "get|post",
            "path" => "admin/delete/{id}",
            "callable" => ["ucontrol", "adminDeleteUser"]
        ],
        [
            "info" => "edit password",
            "requestMethod" => "get|post",
            "path" => "admin/edit/{id}",
            "callable" => ["ucontrol", "adminEditUser"]
        ],
        [
            "info" => "edit password",
            "requestMethod" => "get|post",
            "path" => "editPassword",
            "callable" => ["ucontrol", "editPassword"]
        ],
        [
            "info" => "logout",
            "requestMethod" => "get|post",
            "path" => "logout",
            "callable" => ["ucontrol", "logout"]
        ],
    ]
];
