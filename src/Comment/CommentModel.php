<?php

namespace CJ\Comment;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

class CommentModel implements InjectionAwareInterface
{
    use InjectionAwareTrait;


    /**
     * Gets all comments from session
     */
    public function getComments()
    {
        $comments = $this->di->get("session")->get("comment");
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
        foreach ($comments as $comment) {
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



        $this->di->get("session")->set("comment", $comments);
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

        $this->di->get("session")->set("comment", $comments);
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

        $this->di->get("session")->set("comment", $comments);
    }
}
