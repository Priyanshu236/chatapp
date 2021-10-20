const form=document.querySelector(".typing-area");
const input=document.querySelector(".input-field");

const btn=document.querySelector("button");
const chatbox=document.querySelector(".chat-box");
console.log(btn)
form.onsubmit=(e)=>{
e.preventDefault();
}
chatbox.onmouseenter=()=>{
    chatbox.classList.add("active");
}
chatbox.onmouseleave=()=>{
chatbox.classList.remove("active");
}
btn.onclick=()=>{
   
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = ()=>{
        console.log(1)
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            
              input.value="";
              

          }
      }
    }
    let formData= new FormData(form);
    xhr.send(formData);
}

setInterval(()=>{
    
    let xhr = new XMLHttpRequest();
    xhr.open("POST","php/get_chat.php",true);
    xhr.onload=()=>{
        if(xhr.readyState===XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data=xhr.response;
                chatbox.innerHTML=data;
               if(!chatbox.classList.contains("active")){   
                   scrollToBottom();
               }
            }
        }
    }
    let formData= new FormData(form);
    xhr.send(formData);
    },500);

    function scrollToBottom(){
        chatbox.scrollTop=chatbox.scrollHeight;
    }