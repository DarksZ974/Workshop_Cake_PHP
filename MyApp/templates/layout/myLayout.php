<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->css(['mdb.rtl.min.css', 'mdb.min.css.map', 'my.css']) ?>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Titre au milieu en haut</h1>
    </header>
    <div class="content">
        <?= $this->Html->image("images.jpeg") ?>
        <p>this site is for wow, best mmo ever for me</p>
        <a> </a>
    </div>
    <footer>
        <p>2023 Mon Site.</p>
    </footer>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
</body>
</html>
