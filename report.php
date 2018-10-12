

<?php

   $when_it_happend = $_POST['whenithappend'];
   $how_long = $_POST['howlong'];
   $alien_description = $_POST['aliendescription'];
   $fang_spotted = $_POST['fangspotted'];
   $email = $_POST['email'];
   $alien_description ='гуманоид из планеты жопа';
    $name = $_POST['firstname'] . ' ' .  $_POST['lastname'];
    $how_many = $_POST['howmany'];
    $what_they_did = $_POST['whattheydid'];
    $other = $_POST['other'];


    $to  = 'roksan98@gmail.com';
    $subject = 'Космические пришельцы дебилы - не воруйте';
         $msg = "$name . 'был похищен' . $when_it_happend 'и отсуствовал в течение' . $how_long. \n" . 
      "количество космических пришельцев: ' . $how_many . \n" .
       "Описание пришельцев: ' . $alien_description . \n" .
       "что они делали? ' . $what_they_did . \n" .
        "фэнг замечен? ' . $fang_spotted . \n" .
         "Дополнительная инфа: ' . $other";
         mail($to, $subject, $msg .'From :' . $email);


  echo 'Спасибо за заполнение'. '<br />';
  echo 'Вы были похищены ' . $when_it_happend;
  echo '  и отсутсвовали в течение ' . $how_long . '<br />';
  echo 'опишите их: ' . $alien_description . '<br />';
  echo 'have you seen my dog feng? ' . $fang_spotted . '<br />';
  echo 'email: ' . $email . '<br />';
  echo 'Имя ' . $name . '<br />';
  echo "сколько их " . $how_many . '<br />';
  echo 'че они сделали ' . $what_they_did . '<br />';
  echo  "доп информация " . $other . '<br />';
   
  


?>
