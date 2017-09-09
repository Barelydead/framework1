<?php

?>


<?php foreach ($comments as $comment) : ?>
    <hr>
    <div class="comment">
        <img src="https://www.gravatar.com/avatar/<?= md5($comment["mail"]) ?>" class="pull-left comment-img">
        <h4 class="text-success"><?= $comment["mail"] ?></h4>
        <p><?= $app->textfilter->markdown($comment["msg"]) ?></p>
        <div class="comment-actions">
            <a href="<?= $app->url->create('comment/delete') . "/" . $comment["index"] ?>"><span class="comment-action">remove</span></a>
            <a href="<?= $app->url->create('comment/edit') . "/" . $comment["index"] ?>"><span class="comment-action">edit</span></a>
        </div>
    </div>
<?php endforeach; ?>
