<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <?= $this->Html->css("//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css") ?>
    <?= $this->Html->script("//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js") ?>
    <?= $this->Html->script("//use.fontawesome.com/0322b88645.js") ?>

    <?= $this->Html->css("style.css") ?>
</head>
<body>
    <div class="container-fluid clearfix">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <?= $this->fetch('content') ?>
        </div>
        <div class="col-lg-4"></div>
    </div>
</body>
</html>
