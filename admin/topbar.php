
<div>
  <nav class="light-red n bi fq">
    <div class="container">
	     <div class="nav-wrapper">
       <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
       <a href="#" class="brand-logo">Cyber Mamie</a>
       
         
       
      <ul class="right hide-on-med-and-down">
        <li><a class="btn-floating  cyan pulse"  href="index.php"><i class="material-icons right">view_quilt</i></a></li>
        
        <li><a class= "btn-floating  cyan pulse write" href="#"><i class="material-icons right">edit</i></a></li>
        <li><a class="btn-floating  cyan pulse list" href="#"><i class="material-icons right">view_list</i></a></li>
        <li><a class="btn-floating  cyan pulse edit" href="#"><i class="material-icons right">settings</i></a></li>
        <li><a class="" href="../index.php">Quitter</a></li>
        <?php 
        session_name('synthese_isidore');
        session_start();
        
        
        
        if ($_SESSION['double_auth'] !== NULL){
    echo '<li><a class="" href="services/logout.php">Deconnexion</a></li>';
      }
  
  ?>
        
      </ul>
      </div>
      </nav>
    <ul id="slide-out" class="sidenav">
    
    <li><a href="index.php">Publications<i class="material-icons right">view_quilt</i></a></li>
        
        <li><a href="write.php">Ecrire<i class="material-icons right">edit</i></a></li>
        <li><a href="posts.php">Liste<i class="material-icons right">view_list</i></a></li>
        <li><a href="setting.php">Paramètres<i class="material-icons right">settings</i></a></li>
        <li><a class="" href="../index.php">Quitter</a></li>
        <li><a class="" href="services/logout.php">Deconnexion</a></li>
    </ul>
    
    
  
  <script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  </script>
  
	  
    </div>
    

  
  
  