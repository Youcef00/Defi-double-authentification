<?php

class DataLayer {
	// private ?PDO $conn = NULL; // le typage des attributs est valide uniquement pour PHP>=7.4

	private  $connexion = NULL; // connexion de type PDO   compat PHP<=7.3
	
	/**
	 * @param $DSNFileName : file containing DSN 
	 */
	function __construct(string $DSNFileName){
		
            try {
                
                $this->connexion = new PDO('mysql:host=codingschool-togo.com;dbname=u391525461_amevigbe','u391525461_amevigbe','Kanoli2014');
              } 
              catch ( Exception $e ) {
                echo "Connection à la BDD impossible : ", $e->getMessage();
                
              }
              
              
           
            // paramètres de fonctionnement de PDO :
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // déclenchement d'exception en cas d'erreur
            $this->connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC); // fetch renvoie une table associative
            // réglage d'un schéma par défaut :*/
            
            /*$this->connexion->query('*/
            
        
		
	}
	

    function get_users(string $email){
        $sql = <<<EOD
        SELECT * FROM utilisateurs WHERE  email=:email order by id_utilisateurs desc
EOD;
        try{
        $stmt = $this->connexion->prepare($sql);
        
        
        $stmt->bindValue(":email", $email);
        
        $stmt->execute();

        $res1 = $stmt->fetch();


        return $res1;
    }
    catch (PDOException $e){
        
        return $e;
    }
    }
    

    function add_users(string $email, string $nom, string $prenom
    , string $password){
        $sql = <<<EOD
        insert into utilisateurs (nom, prenom, password, email)
        values (:nom, :prenom, :password, :email)  
EOD;
        try{
        $stmt = $this->connexion->prepare($sql);
        $stmt->bindValue(":nom", $nom);
        $stmt->bindValue(":prenom", $prenom);
        $stmt->bindValue(":password", $password);
        $stmt->bindValue(":email", $email);
        
        
        
        
        $stmt->execute();

        


        return TRUE;
    }
    catch (PDOException $e){
        
        return $e;
    }
    }

    function update_number(string $email, ?int $number){
        $sql = <<<EOD
        UPDATE utilisateurs SET number=:number WHERE email=:email
EOD;
        try{
        $stmt = $this->connexion->prepare($sql);
        
        $stmt->bindValue(":number", $number);
        $stmt->bindValue(":email", $email);
        
        
        $stmt->execute();



        return TRUE;
    }
    catch (PDOException $e){
        
        return $e->getMessage();
    }
    }


   
    

    

    




}


?>