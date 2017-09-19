<nav class="navbar navbar-default top-nav">
    <ul class="nav navbar-nav">
        <li><a href="<?= $app->url->create("")?>">Hem</a></li>
        <li><a href="<?= $app->url->create("about")?>">About</a></li>
        <li><a href="<?= $app->url->create("report")?>">Redovisning</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Uppgifter <b class="caret"></b></a>
          <ul class="dropdown-menu">
              <li><a href="<?= $app->url->create("comment")?>">Comment</a></li>
              <li><a href="<?= $app->url->create("remserver")?>">Remserver</a></li>
              <li><a href="<?= $app->url->create("book")?>">Book</a></li>
          </ul>
        </li>

        <li><a href="<?= $app->url->create("user/profile")?>">Profil</a></li>

        <li class="pull-right"><a href="<?= $app->url->create("user/logout")?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <li class="pull-right"><a href="<?= $app->url->create("user/login")?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
</nav>
