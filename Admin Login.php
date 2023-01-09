    <html>
    <head>
    <title>PHPloginsystem</title>
    <link rel="stylesheet" type = "text/css" a href="img/style.css">
          
    </head>
    <body background="rose.jpeg">
 
    <form name="f1"action="authentication.php"on submit="returnvalidation()"method="POST">
         <center>  <div id="frm">
    <h1>Admin Login</h1>
    <br>
    <p>
    <label><b>UserName:</b></label>
    <input type="text"id="user"name="user"/>
    </p>
    <br>
    <p>
    <label><b>Password:</b></label>
    <input type="password"id="pass"name="pass"/>
    </p>
    <br>
    <p>
    <input type="submit" id="btn btn-primary" value="Login"/>
    </p>
    </form>
    </div>
</center>
    <script>
    function validation()
    {
    var id=document.f1.user.value;
    var ps=document.f1.pass.value;
    if(id.length==""&&ps.length==""){
    alert("UserNameandPasswordfieldsareempty");
    return false;
    }
    else
    {
    if(id.length==""){
    alert("UserNameisempty");
    return false;
    }
    if(ps.length==""){
    alert("Passwordfieldisempty");
    returnfalse;
    }
    }
    }
    </script>
    </body>
    </html>