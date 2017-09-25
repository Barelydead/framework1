<div class="container">
    <div class="page-header">
        <h2>Din profil</h2>
    </div>
    <div class="row">
        <div class="col-md-9">
            <img src="https://www.gravatar.com/avatar/<?= md5($user->mail) ?>?s=200&default=mm" class="pull-left margin-right">
            <p>Mail: <?= $user->mail ?></P>
            <p>Behörighet: <?= $user->userType ?></P>
            <p>Kontot skapades: <?= $user->created ?></P>
            <p>Kontot uppdaterades: <?= $user->updated ?></P>
        </div>
        <div class="col-md-3">
            <ul class="nav">
                <li><a href="<?= $this->di->get("url")->create("user/editUser")?>">Uppdatera information</a></li>
                <li><a href="<?= $this->di->get("url")->create("user/editPassword")?>">Byt lösenord</a></li>
                <?php if ($di->get("umodel")->isUserAdmin()) :?>
                    <li><a href="<?= $this->di->get("url")->create("user/adminEditUser")?>" class="text-warning">Uppdatera en annan användare</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
