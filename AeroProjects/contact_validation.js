function validation(){

      var name = document.getElementById('name').value;
      var phone = document.getElementById('phone').value;
      var email = document.getElementById('email').value;
     




/*--------firstName-----*/
      if(name == ""){
        document.getElementById('neme').innerHTML =" ** Please fill the Name";
        return false;
      }
     
      if(!isNaN(namer)){
        document.getElementById('name').innerHTML =" ** Please fill valid Name";
        return false;
      }
/*--------Phone Number-----*/

       if(phone == ""){
        document.getElementById('phone').innerHTML =" ** Please fill the Phone Number";
        return false;
      }
     
      
      if(phone<11){
        document.getElementById('phone').innerHTML =" ** Please fill valid Moblie Number";
        return false;
      }

/*--------Email-----*/
      if(email == ""){
        document.getElementById('email').innerHTML =" ** Please fill valid email id";
        return false;
      }
      if(email.indexOf('@') <= 0 ){
        document.getElementById('email').innerHTML =" ** @ Invalid Position";
        return false;
      }

      if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
        document.getElementById('email').innerHTML =" ** . Invalid Position";
        return false;
      }
    
}