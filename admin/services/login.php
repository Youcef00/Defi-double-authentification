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
   
   $email = checkString('email');
   $password = checkString('password');
   if($email === NULL || $password === NULL){
       produceError('<div class="card red">
       <div class="card-content white-text">
       Saississez tous les champs
       </div>
   </div>');
   }

   else if ($email!== NULL && $password !== NULL){
     
        
        $res= $data->get_users($email);
        if ($res === NULL){
            produceError('<div class="card red">
            <div class="card-content white-text">
            Votre identifiant ne correspond à aucun compter existant
            </div>
        </div>');
        }
        else if ($res['email'] === $email && $res['password'] === $password){
            $_SESSION['identite'] = $email;
            $_SESSION['nom'] = $res['nom'];
            // email 
            $to  = $email; // notez la virgule
            $token = random_int(100000, 999999);
     // Sujet
     $subject = 'Code de connexion';

     // message
     $message = '
     <html>
      <head>
       <title>Please verify your device</title>
      </head>
      <body>
      <p>Hey '.$res['nom'].'</p> 
       <p></p>
       <p>A sign in attempt requires further verification because we did not recognize your device. To complete the sign in, enter the verification code on the unrecognized device.
       
       </p>Device:'.$_SERVER['HTTP_USER_AGENT'].'</p>
       <p>Verification code:'.$token.'</p>
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=iso-8859-1';

     // En-têtes additionnels
     $headers[] = 'To: '.$nom.'<'.$email.'>';
     $headers[] = 'From: [Naza des voleurs] <leader@example.com>';
     

     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));
     $data->update_number($email, $token);
    
     produceResult($_SESSION['identite']);
        }
        else{
            produceError('<div class="card red">
            <div class="card-content white-text">
            Votre identifiant ou mot de passe est incorrect 
            </div>
        </div>');
        }
        
       
   }
   


   ?>