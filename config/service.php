<?php
/**
 * Add and configure services and return the $app object.
 */

// Add all resources to $app
$app = new \Anax\App\App();
$app->request    = new \Anax\Request\Request();
$app->response   = new \Anax\Response\Response();
$app->url        = new \Anax\Url\Url();
$app->router     = new \Anax\Route\RouterInjectable();
$app->view       = new \Anax\View\ViewContainer();
$app->textfilter = new \Anax\TextFilter\TextFilter();
$app->session    = new \Anax\Session\SessionConfigurable();
$app->ccontrol   = new \CJ\Comment\CommentController();
$app->cmodel        = new \CJ\Comment\CommentModel();
$app->rem           = new \Anax\RemServer\RemServer();
$app->remController = new \Anax\RemServer\RemServerController();

// Init REM Server
$app->rem->configure("remserver.php");
$app->rem->inject(["session" => $app->session]);

// Init controller for the REM Server
$app->remController->setApp($app);

// Configure request
$app->request->init();

// Configure router
$app->router->setApp($app);

// Configure router
$app->ccontrol->setApp($app);
$app->cmodel->setApp($app);



// Configure session
$app->session->configure("session.php");

// Configure url
$app->url->setSiteUrl($app->request->getSiteUrl());
$app->url->setBaseUrl($app->request->getBaseUrl());
$app->url->setStaticSiteUrl($app->request->getSiteUrl());
$app->url->setStaticBaseUrl($app->request->getBaseUrl());
$app->url->setScriptName($app->request->getScriptName());
$app->url->configure("url.php");
$app->url->setDefaultsFromConfiguration();


// Configure view
$app->view->setApp($app);
$app->view->configure("view.php");

$app->image = $app->url->asset("image/");


// Return the populated $app
return $app;
