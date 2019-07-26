<!DOCTYPE html>
<html>
<head>
  <title>Email Checking</title>
  <script>
  function emailCheck(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
        result = JSON.parse(this.responseText).result;
      if(result == 'none'){
        document.getElementById('status').innerText ='okay';
      }else{
        document.getElementById('status').innerText ='No, tinking another one';
      }
    }
  };

  emailAddress = document.getElementById('emailAddress').value;

  xhttp.open("POST","161-2-server.php",true);
  xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhttp.send("email="+emailAddress);

}
</script>
</head>
<body>
  <input type = "email" id = "emailAddress"/>
  <input type = "button" value ="emailCheck" onclick = "emailCheck()"/>
  <p id='status'></p>
</body>
</html>
