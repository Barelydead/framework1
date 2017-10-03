<?php

namespace Anax\Page;

use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;

/**
 * A default page rendering class.
 */
class PageRender implements PageRenderInterface, InjectionAwareInterface
{
    use InjectionAwareTrait;



    /**
     * Render a standard web page using a specific layout.
     *
     * @param array   $data   variables to expose to layout view.
     * @param integer $status code to use when delivering the result.
     *
     * @return void
     */
    public function renderPage($data, $status = 200)
    {
        $data["stylesheets"] = ["css/style.css"];
        $view = $this->di->get("view");

        $layout = isset($data["layout"]) ? $data["layout"] : "layout";


        // Add common header, navbar and footer
        $view->add("custom/header", [], "header");
        $view->add("custom/sidebar", [], "sidebar");
        $view->add("custom/navbar", [], "navbar");
        $view->add("custom/footer", [], "footer");

        // Add layout, render it, add to response and send.
        $view->add($layout, $data, "layout");
        $body = $view->renderBuffered("layout");
        $this->di->get("response")->setBody($body)
                                  ->send($status);
        exit;
    }
}
