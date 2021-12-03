<?php 
session_start();
if ($_SESSION['double_auth']){
  header("Location: http://codingschool-togo.com/blog/admin/");
}
  ?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <!--JavaScript at end of body for optimized loading-->
      <script src="js/fetchUtils.js"> </script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript" src="js/login_after.js"></script>
  <?php 
  include_once("./topbar.php");
  

  ?>

    
<?php 


?>
<div class="row">
    <div class="col l4 m6 s12 offset-l4 offset-m3">
      
    <div class="card-panel">
      <div class="row">
      <div class="row" id='erreur'>
       </div>
       <div>
            
            <h5 class="center-align">Saississez le code à 6 chiffres</h5>
            
      </div>
      
    
   
   <form method="post" id="login">
        <div class="input-field col s12">
            <input type="number" id="password" name="number" placeholder="Saississez le code à 6 chiffres"/>
            <label for="password">Saississez le code à 6 chiffres</label>
          </div>
          
          <center>
              <button type="submit" class="waves-effect waves-light btn light-blue">
              <i class="material-icons left">perm_identity</i>
              Se connecter
              </button>
              

          </center>
   </form>
  
  </div>

</div>
</div>

</body>
  </html>