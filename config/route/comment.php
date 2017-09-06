<?php

/** test render page */

$app->router->add("comment/**", [$app->ccontrol, "startSession"]);

$app->router->add("comment", [$app->ccontrol, "renderComments"]);

$app->router->post("comment/new", [$app->ccontrol, "newComment"]);

$app->router->get("comment/delete", [$app->ccontrol, "removeAllComments"]);

$app->router->get("comment/delete/{index:digit}", [$app->ccontrol, "removeComment"]);

$app->router->add("comment/edit/{index}", [$app->ccontrol, "loadEdit"]);

$app->router->post("comment/edit", [$app->ccontrol, "editComment"]);
