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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>

  <?php 
  include_once("./topbar.php");
  
  
  

  ?>

    

<div class="row">
    <div class="col l4 m6 s12 offset-l4 offset-m3">
      
      <div class="card-panel">
      <div class="row">
      <div class="row" id='erreur'>
       </div>
      <div class="col s6 offset-s3">
            <img src="image/images.png" alt="Administrateur" width="100%"/>
            <h4 class="center-align">S'inscrire</h4>
            
      </div>
      
   
   <form method="post" action="" id="new">
        <div class="input-field col s12">
              <input type="text" id="email" name="name"/>
              <label for="name">Nom</label>
          </div>
          <div class="input-field col s12">
              <input type="text" id="email" name="prenom"/>
              <label for="name">Prenom</label>
          </div>
        <div class="input-field col s12">
            <input type="email" id="email" name="email"/>
            <label for="email">Adresse email</label>
          </div>
          
          <div class="input-field col s12">
              <input type="password" id="email" name="password"/>
              <label for="password">Mot de Passe</label>
          </div>
          <center>
              <button type="submit" class="waves-effect waves-light btn light-blue">
              <i class="material-icons left">perm_identity</i>
              Se connecter
              </button>
              <br/><br/>
              <a href="login.php">Déjà Inscrit</a>

          </center>
   </form>
  
  </div>
<script type="text/javascript" src="js/new.js"></script>
</div>
</div>

</body>
  </html>