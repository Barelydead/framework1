<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php foreach ($stylesheets as $stylesheet) : ?>
    <link rel="stylesheet" type="text/css" href="<?= $this->asset($stylesheet) ?>">
    <?php endforeach; ?>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

</head>
<body>

<div class="site-wrap">
    <div class="inner-wrap container">

        <?php if ($this->regionHasContent("header")) : ?>
        <div class="header-wrap">
            <img src="<?= $app->image ?>frameworktext.jpg?w=1140&height=320&crop-to-fit" alt="framework">
            <?php $this->renderRegion("header") ?>
        </div>
        <?php endif; ?>

        <?php if ($this->regionHasContent("navbar")) : ?>
        <div class="navbar-wrap">
            <?php $this->renderRegion("navbar") ?>
        </div>
        <?php endif; ?>



        <?php if ($this->regionHasContent("main")) : ?>
        <div class="main-wrap">
            <?php $this->renderRegion("main") ?>
        </div>
        <?php endif; ?>

        <?php if ($this->regionHasContent("footer")) : ?>
        <div class="footer-wrap">
            <?php $this->renderRegion("footer") ?>
        </div>
        <?php endif; ?>

    </div>
</div>

</body>
</html>
