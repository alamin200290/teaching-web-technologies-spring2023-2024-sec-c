//name = 'alamin';
            //var name = 'alamin';
            // let name = 'alamin';
            // let cgpa =3.6;
            // let email = "alamin@aiub.edu";
            // let std = [1, 'alamin', 3.5, 'alamin@aiub.edu'];

            // function sum(a, b){
            //     return a+b;
            // }
            // sum();

            // let sum = function (a, b){
            //     return a+b;
            // }
            // sum()
            // let sum= (a, b)=>a+b;
            
            // for(let a=0;a<10; a++ ){

            // }

            // if(){

            // }else{

            // }
            // ===

            //alert('test');
            //console.log('test');
            //document.write('Test from JS');
            
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
                //alert('test');
                let xhttp = new XMLHttpRequest();
                //xhttp.open('GET', 'abc.php?username='+username, true);
                xhttp.open('POST', 'abc.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('username='+username);

                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementsByTagName('h1')[0].innerHTML = this.responseText;
                    }
                }
            }