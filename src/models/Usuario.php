<?php
namespace src\models;
use \core\Model;

class Usuario extends Model {

     private $id;
     private $nome;
     private $email;
     private $senha;
     private $nivel;
     private $token;
     private $status;

     public function getId(){
        return $this->id;
     }

     public function setId($id){
        $this->id = $id;
     }

     public function getNome(){
        return $this->nome;
     }

     public function setNome($nome){
        $this->nome = $nome;
     }

     public function getEmail(){
        return $this->email;
     }

     public function setEmail($email){
        $this->email = $email;
     }

     public function getSenha(){
        return $this->senha;
     }

     public function setSenha($senha){
        $this->senha = $senha;
     }

     public function getNivel(){
        return $this->nivel;
     }

     public function setNivel($nivel){
        $this->nivel = $nivel;
     }

     public function getToken(){
        return $this->token;
     }

     public function setToken($token){
        $this->token = $token;
     }

     public function getStatus(){
        return $this->status;
     }

     public function setStatus($status){
        $this->status = $status;
     }



}