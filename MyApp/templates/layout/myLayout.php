<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->css(['mdb.rtl.min.css', 'mdb.min.css.map']) ?>

    <?= $this->fetch('css') ?>
    <body>
        <h1>
            Welcome to your page
        </h1>
    </body>
    <?= $this->Html->image("images.jpeg") ?>
</head>
<body>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
</body>
</html>