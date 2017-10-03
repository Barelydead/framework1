<h2>Ny användare</h2>

<a href="<?=$di->get("url")->create("user/create")?>" class="btn btn-default col-md-12">Lägg till ny</a>
<br><br>

<h2>Befintliga användare</h2>
<ul class="nav">
<?php foreach ($users as $user) : ?>
<li><div class="comment">
<?= $di->get("umodel")->getUserImg($user->mail, "pull-left margin-right", 50)?>
<p><?= $user->mail ?></p>
<a href="<?=$di->get("url")->create("user/admin/edit/" . $user->id)?>"><span class="glyphicon glyphicon-pencil pull-right margin-right"></span></a>
<a href="<?=$di->get("url")->create("user/admin/delete/" . $user->id)?>"><span class="glyphicon glyphicon-remove pull-right margin-right"></span></a>
</div></li>
<?php endforeach; ?>

</ul>
