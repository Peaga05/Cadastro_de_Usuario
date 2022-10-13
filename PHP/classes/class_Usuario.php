<?php

    class Usuario{
    
        protected $nome;
        protected $email;
        protected $senha;
        protected $cpf;

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }

    }

?>