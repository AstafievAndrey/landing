<?php 
function valid($field){
    return htmlspecialchars($field, ENT_QUOTES, 'UTF-8');
}
if(isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['question'])&&isset($_POST['email'])){
    $n = valid($_POST['name']);
    $p = valid($_POST['phone']);
    $q = valid($_POST['question']);
    $e = valid($_POST['email']);
    if(mail("carrats@yandex.ru", "KraskiLanding","Имя: $n \nТелефон: $p \nEmail: $e \nСообщение: $q")){
        echo "Сообщение отправлено";
    }else {
        echo"Ошибка Попробуйте снова!";
    }    
} elseif (isset($_POST['name'])&&isset($_POST['phone'])) {
    $n = valid($_POST['name']);
    $p = valid($_POST['phone']);
     if(mail("carrats@yandex.ru", "KraskiLanding","Имя: $n \nТелефон: $p \n")){
        echo "Сообщение отправлено";
    }else {
        echo"Ошибка Попробуйте снова!";
    }       
}else echo"Ошибка Попробуйте снова!";
?>
