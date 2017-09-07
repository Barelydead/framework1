<?php

namespace CJ\Comment;

use \Anax\Common\AppInjectableInterface;
use \Anax\Common\AppInjectableTrait;

class CommentModel implements AppInjectableInterface
{
    use AppInjectableTrait;

    /**
     * Start session
     */
    public function init()
    {
        $this->app->session->start();
    }

    /**
     * Gets all comments from session
     */
    public function getComments()
    {
        $comments = $this->app->session->get("comment");
        $comments = is_array($comments) ? $comments : [];

        return $comments;
    }

    /**
     * Gets all comments from session
     */
    public function getComment($index)
    {
        $post = [];
        $comments = $this->getComments();
        foreach ($comments as $key => $comment) {
            if ($comment["index"] == $index) {
                $post = $comment;
            }
        }

        return $post;
    }

    /**
     *
     */
    public function addComment($commentArray)
    {
        $comments = $this->getComments();
        array_push($comments, $commentArray);

        $this->app->session->set("comment", $comments);
    }

    /**
     *
     */
    public function removeComment($index)
    {
        $comments = $this->getComments();

        foreach ($comments as $key => $post) {
            if ($post["index"] == $index) {
                unset($comments[$key]);
            }
        }

        $this->app->session->set("comment", $comments);
    }

    /**
     *
     */
    public function updateComment($data)
    {
        $comments = $this->getComments();

        foreach ($comments as $key => $post) {
            if ($post["index"] == $data["index"]) {
                $comments[$key] = $data;
            }
        }

        $this->app->session->set("comment", $comments);
    }
}
