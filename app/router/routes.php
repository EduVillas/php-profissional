<?php

return [
  'POST' => [
    '/login' => 'Login@store',
    '/user/store' => 'user@store',
  ],
  'GET' => [
    '/' => 'Home@index',
    '/users' => 'Users@index',
    '/user/create' => 'User@create',
    '/user/[0-9]+' => 'User@show',
    '/login' => 'Login@index',
    '/logout' => 'Login@destroy',
  ]
];
