<?php
include_once '../composer/vendor/autoload.php';

$obRequest = new \App\Request\Request();
$obPostValidator = new App\Validator\PostValidator();
$obOrder = new App\Order\Order;

if ($obRequest->getMethod() == 'POST' && isset($_POST['NAME_ORDER'])) {

    $arError = $obPostValidator->validate($_POST);
    if (!$arError) {
        if (!$obOrder->set($_POST['NAME_ORDER'], $_POST['USER_ORDER'], $_POST['SUM'])) {
            $arError = 'error BD';
        }
    }

    echo json_encode($arError, JSON_UNESCAPED_UNICODE);
}
