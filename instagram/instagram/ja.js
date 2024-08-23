
function fun(hee){
   const username=document.getElementById("username");
   const pass=document.getElementById("password");

   if(username.value==''){
      
         document.getElementById("trigger").innerHTML="";

      }else if(pass.value==''){
         document.getElementById("trigger").innerHTML="";

   }else{
      alert("Incorrect Username or Password");

   }
} 

