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
   
  
   $number = checkString('number');
   if($number === NULL){
       produceError("Champs Vide");
   }

   else{
     
        $res= $data->get_users($_SESSION['identite']);
        if ($res['number'] == intval($number)){
            $_SESSION['double_auth'] = $number;
            $data->update_number($_SESSION['identite'], NULL);
            produceResult($number);
            //
        }
        else{
            produceError("Le code de vérification est incorrecte");
        }

   }
   


   ?>