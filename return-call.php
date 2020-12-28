<?php

$companyName = $_POST['company'];
$callToName = $_POST['name'];
$phoneNumber = $_POST['phone'];
$message = 'Поступил запрос на обратный звонок от компании ' . $companyName . 'Перезвоните на номер '. $phoneNumber . 'Имя человека ' . $callToName;
$messagesubject = 'Обратный звонок для компании ' . $companyName;

$to = 'info@go-imc.kz';
$body = 'Поступил запрос на обратный звонок от компании ' . $companyName . 'Перезвоните на номер ';

mail($to,$messagesubject, $body);