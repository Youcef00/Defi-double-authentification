<?php 
session_name('synthese_isidore');
session_start();
set_include_path('../..'.PATH_SEPARATOR);
spl_autoload_register(function ($className) {
   include ("php/{$className}.class.php");
});


require_once('php/initDataLayer.php');
require_once('php/common_service.php');

  
  require_once('php/fonctions_parms.php');
   // à compléter
   $mes = '';
   $email = checkString('email');
   $password = checkString('password');
   $nom = checkString('name');
   $prenom = checkString('prenom');
   if($email === NULL || $password === NULL || $prenom === NULL || $nom === NULL){
       produceError('<div class="card red">
       <div class="card-content white-text">
            Saissisez tous les champs
       </div>
   </div>');
   }

   else{
    $result = $data->add_users($email, $nom, $prenom, $password);
       
    produceResult($result);
   }
   
    
      

   
   


   ?>