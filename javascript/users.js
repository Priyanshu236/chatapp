var searchBtn=document.querySelector(".users .search button");
var searchBar=document.querySelector(".search input");
searchBtn.onclick=()=>{
        searchBar.classList.toggle("active");
}
var userList=document.getElementById("userList")
var flag=0;
var sure=false;
var allowprompt=true;


searchBar.onkeyup=()=>{
    let searchTerm=searchBar.value;
    if(searchTerm==""){
        flag=0;
        
    }else{
        
        flag=1;
    
    let xhr = new XMLHttpRequest();
xhr.open("POST","php/search.php");
xhr.onload=()=>{
    if(xhr.readyState===XMLHttpRequest.DONE){
        if(xhr.status===200){
            let data=xhr.response;
            userList.innerHTML=data;
           
        }
    }}
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    
    xhr.send("searchTerm="+searchTerm);
}
}
setInterval(()=>{
let xhr = new XMLHttpRequest();
xhr.open("GET","php/users.php");
xhr.onload=()=>{
    if(xhr.readyState===XMLHttpRequest.DONE){
        if(xhr.status===200){
            let data=xhr.response;
            if(flag!=1){
                userList.innerHTML=data;
            }
           
        }
    }
}
xhr.send();
},500);
setInterval(()=>{
    console.log("he");
let xhr = new XMLHttpRequest();
xhr.open("GET","php/update_time.php");
xhr.send();
},1000);