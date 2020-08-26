<?php

  class User
  {
    public $nome;
    public $cognome;
    public $annoNascita;
    public $email;
    public $username;
    public $password;

    public function __construct($_nome, $_cognome, $_email, $_username, $_password)
    {
      $this->setNome($_nome);
      $this->setCognome($_cognome);
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
      $this->annoNascita = $annoNascita;
    }

    public function setNome($email) {
      if (!empty($email)) {
        $this->email = $email;
      } else {
        die('L\'email non può essere vuota');
      }
    }

    public function setNome($username) {
      if (!empty($username)) {
        $this->username = $username;
      } else {
        die('l\'username non può essere vuoto');
      }
    }

    public function setNome($password) {
      if (!empty($password)) {
        $this->password = $password;
      } else {
        die('La password non può essere vuota');
      }
    }

    public function getDati() {
      return $this->nome . ' ' . $this->cognome . ' ' . $this->annoNascita . ' ' . $this->email . ' ' . $this->username . ' ' . $this->password;
    }
  }

?>
