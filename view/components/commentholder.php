<a href="<?=$di->get("url")->create("comment/new") ?>" class="btn btn-success">Lägg till kommentar</a>
<hr>

<h2>Kommentarer</h2>
<?php foreach ($comments as $comment) : ?>
    <?php $user = $di->get("umodel")->getUser($comment->user); ?>
    <div class="comment">
        <?= $di->get("umodel")->getUserImg($user->mail, "pull-left margin-right")?>
        <span class="text-muted"><?=$user->mail ?> </span>

        <?php if ($comment->user == $this->di->get("umodel")->getLoggedInUserId()): ?>
            <a href="<?=$this->di->get("url")->create("comment/edit/" . $comment->id) ?>"><span class="glyphicon glyphicon-pencil pull-right margin-right"></span></a>
            <a href="<?=$this->di->get("url")->create("comment/delete/" . $comment->id) ?>"><span class="glyphicon glyphicon-remove pull-right margin-right"></span></a>
        <?php endif;?>

        <h4><?= $comment->heading ?></h4>
        <p><?=$this->di->get("textfilter")->markdown($comment->msg) ?></p>
        <!-- <p>liked: <?=$comment->liked ?></p>
        <p>created: <?=$comment->postDate ?></p> -->
    </div>
<?php endforeach; ?>
