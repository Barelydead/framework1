<?php

return [
    "routes" => [
        [
            "info" => "test DB connection",
            "requestMethod" => null,
            "path" => "user",
            "callable" => ["ucontrol", "dbTest"]
        ],
    ]
];
