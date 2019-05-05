<!DOCTYPE html>
<head>
    <title>phpdev</title>
    <meta charset="utf-8"/>
    <link type="text/css" rel="stylesheet" href="../../template/css/style.css"/>
</head>
<html>
    <body>
        <div class="dropdown">
            <form class="form_dropdown" name="select">
                <select>
                    <option name="select" value="2">2</option>
                    <option name="select" value="3">3</option>
                    <option name="select" value="10">10</option>
                    <option name="select" value="15">15</option>
                </select>
                <input hidden type="text" value="<?php echo $id?>" id="author_id" >
            </form>
        </div>
        <div class="authors">
            <ul class="menu">
                <li><a href="/">На главную</a></li>
                <?php foreach ($authors as $author): ?>
                     <li>
                         <a href="http://localhost/book/<?php echo $author['id']; ?>">
                             <?php echo $author['name'] ?>
                         </a>
                     </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="block_1">
            <?php foreach ($books as $book): ?>
            <div class="book" id="item_book_<?php echo $book['id'] ?>">
                <img src="../../template/img/<?php echo $book['img'] ?>">
                <div class="content">
                    <h4><?php echo $book['name']; ?></h4>
                    <p><?php echo $book['authors']; ?></p><br>
                    <p><strong>Оформить заявку на книгу</strong></p>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="overlay" id="js-overlay-campaign">
                <div class="popup" id="js-popup-campaign">
                    <h2>Оформить заказ</h2>
                    <div class="errors"></div>
                        <input type="text" name="popupName" placeholder="Введите свое Имя">
                        <input type="email" name="popupEmail" placeholder="Введите свой email">
                        <input type="button" id="popupButton" value="отправить" >
                    <div class="close-popup" id="js-close-campaign"></div>
                </div>
            </div>
            <?php echo $pagination->get() ?>
        </div>
        <div class="scripts">
            <script type="text/javascript" src="../../template/js/jquery.js"></script>
            <script type="text/javascript" src="../../template/js/main.js"></script>
            <script type="text/javascript" src="../../template/js/ajaxEmail.js"></script>
        </div>
    </body>
</html>