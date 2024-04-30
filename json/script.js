            
            function abc(){
                let obj = document.getElementsByTagName('h1')[0];
                obj.innerHTML = "TEST EXample";
            }

            function username(){
                let username = document.getElementById('username').value;
                let obj = document.getElementsByTagName('h1')[0];

                if(username == ""){
                    obj.innerHTML = "Null data found";
                    obj.style.color = 'red';
                }else{
                    obj.style.color = 'black';
                    document.getElementsByTagName('h1')[0].innerHTML = username;
                }
                
            }

            function ajax(){
                let username = document.getElementById('username').value;
                let password = "123";
                let email = 'alamin@aiub.edu';

                let user = {
                    'username' : username,
                    'password' : password,
                    'email'     : email
                }

                let data = JSON.stringify(user);


                //alert('test');
                let xhttp = new XMLHttpRequest();
                //xhttp.open('GET', 'abc.php?username='+username, true);
                xhttp.open('POST', 'abc.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('data='+data);
                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        let user = JSON.parse(this.responseText);
                        document.getElementsByTagName('h1')[0].innerHTML = user.email;
                    }
                }
            }