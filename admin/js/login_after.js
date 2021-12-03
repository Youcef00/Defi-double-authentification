window.addEventListener('load',initForm1);
/*window.addEventListener("DOMContentLoaded", (event) => {
  sendForm2;
});*/


function initForm1(){
  
  /**window.setInterval(,500);**/
  
  //sendForm2();
  document.forms.login.addEventListener("submit", sendForm3);
  
  

  
  //document.forms.form_communes.addEventListener("submit", fetchCommune);
}




    function sendForm3(ev){ // form event listener
        ev.preventDefault();
        let args= new FormData(this);
        fetchFromJson('services/login_after.php',{method:'post',body:args})
       .then(makemessagesItems1)
       
      
      }

      
      
    function makemessagesItems1(answer){
      
        
        let errorText = document.getElementById('erreur');
        
        console.log(answer.status);
        if (answer.status == "ok"){
          
          location.href = "http://codingschool-togo.com/blog/admin/"
          }
        else
           {
              
              errorText.innerHTML = answer.message;
            
          }
        
      }

      
        
      

      