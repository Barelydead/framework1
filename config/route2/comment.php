<?php

/** Config comment routes */
return [
    "routes" => [
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
