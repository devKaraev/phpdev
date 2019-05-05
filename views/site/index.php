<!DOCTYPE html>
<head>
    <title>phpdev</title>
    <meta charset="utf-8"/>
    <link type="text/css" rel="stylesheet" href="../../template/css/style.css"/>
</head>
<html>
    <body>
        <div class="block_2">
            <?php foreach ($authors as $author): ?>
            <div class="book">
                <a href="book/<?php echo $author['id']; ?>">
                    <img src="../../template/img/<?php echo $author['img']; ?>">
                    <div class="content">
                        <h4><?php echo $author['name']; ?></h4>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <?php echo $pagination->get() ?>
        <div class="scripts">
            <script type="text/javascript" src="../../template/js/jquery.js"></script>
            <script type="text/javascript" src="../../template/js/main.js"></script>
            <script type="text/javascript" src="../../template/js/ajaxAuthors.js" ></script>
        </div>
    </body>
</html>