<?php

namespace CJ\Comment;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * A controller for the comment section
 */
class CommentController implements InjectionAwareInterface
{
    use InjectionAwareTrait;


    /**
     * start session
     */
    public function startSession()
    {
        $this->di->get("cmodel")->init();
    }

    /**
     * process incomming POST
     */
    public function newComment()
    {
        $commentArray = $this->di->get("request")->getPost();

        $this->di->get("cmodel")->addComment($commentArray);

        $this->di->get("response")->redirect($this->di->get("url")->create("comment"));
    }

    /**
     * remove all comments
     */
    public function removeAllComments()
    {
        $this->app->session->destroy();

        $this->di->get("response")->redirect($this->di->get("url")->create("comment"));
    }

    /**
     * remove one comment
     */
    public function removeComment($index)
    {
        $this->di->get("cmodel")->removeComment($index);

        $this->di->get("response")->redirect($this->di->get("url")->create("comment"));
    }

    /**
     * load edit page
     */
    public function loadEdit($index)
    {
        $post = $this->di->get("cmodel")->getComment($index);
        $data = ["title" => "guestbook - edit"];

        $this->di->get("view")->add("components/editform", ["comment" => $post], "main");
        $this->di->get("pageRender")->renderPage($data);
    }

    /**
     * edit comment
     */
    public function editComment()
    {
        $data = $this->di->get("request")->getPost();

        $this->di->get("cmodel")->updateComment($data);
        $this->di->get("response")->redirect($this->di->get("url")->create("comment"));
    }


    /**
     * render comment view
     */
    public function renderComments()
    {
        $data = ["title" => "guestbook"];
        $comments = $this->di->get("cmodel")->getComments();
        $comments = array_reverse($comments);

        $this->di->get("view")->add("components/commentform", [], "main");
        $this->di->get("view")->add("components/commentholder", ["comments" => $comments], "main");
        $this->di->get("pageRender")->renderPage($data);
    }
}
