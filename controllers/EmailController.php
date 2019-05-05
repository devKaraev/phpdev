<?php

include(ROOT . '/models/validate.php');
include(ROOT . '/models/site.php');

class EmailController
{
    public function actionEm($id)
    {
        $name = FALSE;
        $email = FALSE;
        $errors = false;
        $idBookArray = $_POST['idBook'];
        $idBook = $idBookArray[0];
        $timeOfMessage = date('Y-m-d H:i', time());

        $bookEmail = array();
        $bookEmail = run::showBookForEmail($idBook);

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];

            if (!validate::checkName($name)) {
                $errors[] = 'Имя не может быть короче 2-ух символов';
            }

            if (!validate::checkEmail($email)) {
                $errors[] = 'Неккоректно введён e-mail';
            }

            if ($errors == false) {
                $errors[] = 'Ваш заказ успешно оформлен';
                
                $message =  'Добрый день ' . $name . ' вы заказали книгу: ' . $bookEmail[0]['name']
                    . ' , автор: ' . $bookEmail[0]['authors'].'. Дата оформления: '.$timeOfMessage;
                
                $subject = 'Ваш заказ';
                
                $from = 'From: rasul.karakv.parkingby.icu';
                
                $resultEmail = mail($email, $subject, $message, $from);
            }
        }
        include_once(ROOT . '/views/site/errorsEmail.php');
    }
}

