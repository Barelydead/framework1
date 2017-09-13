<?php
//
// /** test render page */
//
// $app->router->add("comment/**", [$app->ccontrol, "startSession"]);
//
// $app->router->add("comment", [$app->ccontrol, "renderComments"]);
//
// $app->router->post("comment/new", [$app->ccontrol, "newComment"]);
//
// $app->router->get("comment/delete", [$app->ccontrol, "removeAllComments"]);
//
// $app->router->get("comment/delete/{index:digit}", [$app->ccontrol, "removeComment"]);
//
// $app->router->add("comment/edit/{index}", [$app->ccontrol, "loadEdit"]);
//
// $app->router->post("comment/edit", [$app->ccontrol, "editComment"]);


return [
    "routes" => [
        [
            "info" => "Start the session",
            "requestMethod" => null,
            "path" => "comment/**",
            "callable" => ["ccontrol", "startSession"]
        ],
        [
            "info" => "redirct and render Comment page",
            "requestMethod" => null,
            "path" => "comment",
            "callable" => ["ccontrol", "renderComments"]
        ],
        [
            "info" => "add new post to session",
            "requestMethod" => "post",
            "path" => "comment/new",
            "callable" => ["ccontrol", "newComment"]
        ],
        [
            "info" => "remove all comments",
            "requestMethod" => "get",
            "path" => "comment/delete",
            "callable" => ["ccontrol", "removeAllComments"]
        ],
        [
            "info" => "remove comment with a specific ID",
            "requestMethod" => "get",
            "path" => "comment/delete/{index:digit}",
            "callable" => ["ccontrol", "removeComment"]
        ],
        [
            "info" => "redirect to edit page",
            "requestMethod" => "get",
            "path" => "comment/edit/{index}",
            "callable" => ["ccontrol", "loadEdit"]
        ],
        [
            "info" => "redirect to edit page",
            "requestMethod" => "get",
            "path" => "comment/edit",
            "callable" => ["ccontrol", "editComment"]
        ],
    ]
];
