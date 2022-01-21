<?php
session_start(); 

if(isset($_SESSION['nome_usuario'])){
    header('Location:estacionamento_admin.html');
} 
