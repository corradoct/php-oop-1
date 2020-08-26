<?php

  require_once(__DIR__ . '/users.php');

  $users = [
    [
      'nome' => 'Corrado',
      'cognome' => 'Caruso',
      'annoNascita' => 1985,
      'email' => 'Corrado@email.it',
      'username' => 'CorradoCaruso',
      'password' => 123456
    ],
    [
      'nome' => 'Pippo',
      'cognome' => 'Verdi',
      'annoNascita' => 1920,
      'email' => 'Pippo@email.it',
      'username' => 'PippoPippo',
      'password' => 'CiaoPippo'
    ],
    [
      'nome' => 'Pluto',
      'cognome' => 'Rossi',
      'annoNascita' => 1900,
      'email' => 'RossiPluto@email.com',
      'username' => 'PlutoBau',
      'password' => 'Bau12345'
    ],
    [
      'nome' => 'Topolino',
      'cognome' => 'Disney',
      'annoNascita' => 1898,
      'email' => 'Topo@email.us',
      'username' => 'LinoTopo',
      'password' => 'MickeyMouse'
    ]
  ];

  foreach ($users as $user) {
    $utente = new User($user['nome'], $user['cognome'], $user['annoNascita'], $user['email'], $user['username'], $user['password']);
    echo ('Utente : ' . '<br>' . $utente->getDati() . '<br>');
  }

?>
