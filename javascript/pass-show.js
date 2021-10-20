var pass=document.getElementById("u");
var togbtn=document.querySelector(".form form i");


function Hidepassword(){
    
    if(pass.type=="password"){
       pass.type="text";
    }else{
        pass.type="password";
       
    }
}
