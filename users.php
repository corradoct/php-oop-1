<?php

  class User
  {
    public $nome;
    public $cognome;
    public $annoNascita;
    public $email;
    public $username;
    public $password;

    public function __construct($_nome, $_cognome, $_annoNascita, $_email, $_username, $_password)
    {
      $this->setNome($_nome);
      $this->setCognome($_cognome);
      $this->setAnnoNascita($_annoNascita);
      $this->setEmail($_email);
      $this->setUsername($_username);
      $this->setPassword($_password);
    }

    public function setNome($nome) {
      if (!empty($nome)) {
        $this->nome = $nome;
      } else {
        die('Il nome non può essere vuoto');
      }
    }

    public function setCognome($cognome) {
      if (!empty($cognome)) {
        $this->cognome = $cognome;
      } else {
        die('Il cognome non può essere vuoto');
      }
    }

    public function setAnnoNascita($annoNascita) {
      if (!empty($annoNascita)) {
        $this->annoNascita = $annoNascita;
      } else {
        die('L\'anno di nascita non può essere vuoto');
      }
    }

    public function setEmail($email) {
      if (!empty($email)) {
        $this->email = $email;
      } else {
        die('L\'email non può essere vuota');
      }
    }

    public function setUsername($username) {
      if (!empty($username)) {
        $this->username = $username;
      } else {
        die('l\'username non può essere vuoto');
      }
    }

    public function setPassword($password) {
      if (!empty($password)) {
        $this->password = $password;
      } else {
        die('La password non può essere vuota');
      }
    }

    public function getDati() {
      return 'Nome : ' . $this->nome . ' ' . 'Cognome : ' . $this->cognome . ' ' . 'Anno di nascita : ' . $this->annoNascita . ' ' . 'Email : ' . $this->email . ' ' . 'Username : ' . $this->username . ' ' . 'Password : ' . $this->password;
    }
  }

?>
