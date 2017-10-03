<?php

/** Config comment routes */
return [
    "routes" => [
        [
            "info" => "redirct and render Comment page",
            "requestMethod" => null,
            "path" => "comment",
            "callable" => ["commentController", "renderComments"]
        ],
        [
            "info" => "add new post to session",
            "requestMethod" => "get|post",
            "path" => "comment/new",
            "callable" => ["commentController", "newComment"]
        ],
        [
            "info" => "remove all comments",
            "requestMethod" => "get",
            "path" => "comment/delete",
            "callable" => ["commentController", "removeAllComments"]
        ],
        [
            "info" => "remove comment with a specific ID",
            "requestMethod" => "get",
            "path" => "comment/delete/{index:digit}",
            "callable" => ["commentController", "removeComment"]
        ],
        [
            "info" => "redirect to edit page",
            "requestMethod" => "get|post",
            "path" => "comment/edit/{index}",
            "callable" => ["commentController", "editComment"]
        ],
        [
            "info" => "redirect to edit page",
            "requestMethod" => "get",
            "path" => "comment/edit",
            "callable" => ["commentController", "editComment"]
        ],
    ]
];
