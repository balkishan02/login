
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
<!--<nav class="top-nav">-->
<!--    <div class="top-nav-title">-->
<!--        <a href="--><?php //= $this->Url->build('/') ?><!--"><span>Cake</span>PHP Learning</a>-->
<!--    </div>-->
<!--    <div class="top-nav-links">-->
<!--        <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Documentation</a>-->
<!--        <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a>-->
<!--    </div>-->
<!--</nav>-->
<main class="main">
    <div class="container">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</main>

</body>
</html>

