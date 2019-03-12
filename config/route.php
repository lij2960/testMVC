<?php
use \NoahBuscher\Macaw\Macaw;

Macaw::get('/', function() {
  echo 'Hello world!';
});

Macaw::get('/del', function() {
  echo '删除!';
});

Macaw::post('/login', function() {
  echo 'login!';
});

Macaw::any('/any', function() {
  echo 'any!';
});

Macaw::error(function(){
    echo '404 :: Not Found';
});

Macaw::get('/home', 'HomeController@home');

Macaw::dispatch();
