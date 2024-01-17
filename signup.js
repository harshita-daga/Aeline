
            let regiBtn= document.getElementById('regiBtn');
            let loginbtn= document.getElementById('loginBtn');
            let title= document.getElementById('title');
            let field= document.getElementById('field');
            let togglebtn= document.getElementById('toggleBtn');
            let username=document.getElementById('username').value;
            let password=document.getElementById('password').value;

            
            function change(){
                regiBtn.style.backgroundColor="Black";
            }
       
            regiBtn.onclick= function(){
                field.style.maxHeight="50px";
                title.innerHTML="Create your account";
                loginBtn.classList.add("disable");
                regiBtn.classList.remove("disable");
            }
    

            