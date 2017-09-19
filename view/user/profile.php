<div class="container">
    <div class="page-header">
        <h2>Din profil</h2>
    </div>
    <div class="row">
        <div class="col-md-9">
            <img src="https://www.gravatar.com/avatar/<?= md5($user->mail) ?>?s=200&default=mm" class="pull-left margin-right">
            <p>Mail: <?= $user->mail ?></P>
            <p>Kontot skapades: <?= $user->created ?></P>
            <p>Kontot uppdaterades: <?= $user->updated ?></P>
        </div>
        <div class="col-md-3">
            <ul class="nav">
                <li><a href="<?= $this->di->get("url")->create("user/editUser")?>">Uppdatera information</a></li>
                <li><a href="<?= $this->di->get("url")->create("user/editPassword")?>">Byt lösenord</a></li>
            </ul>
        </div>
    </div>
</div>
