<?php

    class Account {

        public function __construct(){

        }

        public function register(){
            $this->validateUsername($username);
            $this->validateFirstname($firstName);
            $this->validateLastname($firstName);
            $this->validateEmail($email, $emailConfirm);
            $this->validatePasswords($password, $passwordConfirm);
        }

        private function validateUsername($un){

        }
    
        private function validateFirstname($fn){
    
        }
    
        private function validateLastname($ln){
    
        }
    
        private function validateEmails($em, $em2){
    
        }
        
        private unction validatePasswords($pw, $pw2){
    
        }
        
    }

?>