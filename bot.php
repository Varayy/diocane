    <?php


    $botToken = "174148485:AAG04T-zqtDjheJRqr5VLeDAmjA162z-n7Q";
    $website = "https://api.telegram.org/bot".$botToken;

    $update = file_get_contents("php://input");

    $updateArray = jason_decode($update, TRUE);

    $chatId = $updateArray["result"][]["message"]["chat"]["id"];

    file_get_contents($website"/sendphoto?chat_id=".$chatId."&photo=AgADBAADtqcxGyXBCQe9BhMBOgtPjjd5cjAABDJkwvAh7xfaiIsBAAEC");

    ?>
