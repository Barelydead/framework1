<?php

namespace CJ\Comment;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;


/**
 * A controller for the comment section
 */
class CommentController implements AppInjectableInterface
{
    use AppInjectableTrait;


    /**
     * start session
     */
    public function startSession()
    {
        $this->app->cstorage->init();
    }

    /**
     * process incomming POST
     */
    public function newComment()
    {
        $commentArray = $this->app->request->getPost();

        $this->app->cstorage->addComment($commentArray);

        $this->app->redirect("comment");
    }

    /**
     * remove all comments
     */
    public function removeAllComments()
    {
        $this->app->session->destroy();

        $this->app->redirect("comment");
    }

    /**
     * remove one comment
     */
    public function removeComment($index)
    {
        $this->app->cstorage->removeComment($index);

        $this->app->redirect("comment");
    }

    /**
     * load edit page
     */
    public function loadEdit($index)
    {
        $post = $this->app->cstorage->getComment($index);
        $data = ["title" => "guestbook - edit"];

        $this->app->view->add("components/editform", ["comment" => $post], "main");
        $this->app->renderPage($data);
    }

    /**
     * edit comment
     */
    public function editComment()
    {
        $data = $this->app->request->getPost();

        $this->app->cstorage->updateComment($data);
        $this->app->redirect("comment");
    }


    /**
     * render comment view
     */
    public function renderComments()
    {
        $data = ["title" => "guestbook"];

        $this->app->view->add("components/commentform", [], "main");
        $this->app->view->add("components/commentholder", [], "main");
        $this->app->renderPage($data);
    }


}