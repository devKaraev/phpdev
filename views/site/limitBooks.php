<?php foreach ($books as $book): ?>
        <div class="book">
        <img src="../../template/img/<?php echo $book['img']; ?>">
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
<script type="text/javascript" src="../../template/js/jquery.js"></script>
<script type="text/javascript" src="../../template/js/main.js"></script>
<script type="text/javascript" src="../../template/js/ajaxEmail.js"></script>
