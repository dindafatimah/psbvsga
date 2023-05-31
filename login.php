<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/30/30915.png" type="image/icon type">

        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="logstyle.css">
    </head>
   
    <body>

		<div style="color:white; position: absolute;left: 30%%;top: 8%; 
		font-size: 30px; background-color: black;">
            Penerimaan Siswa Baru
            </div>
<div class="wrapper">
    <header>LOGIN</header>
    <form method="post" action="cek_login.php">
      <div class="field uname">
        <div class="input-area">
        <input type="text" name="user" placeholder="Username">
        </div>
        <div class="error error-txt">Username can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
        <input type="password" name="pass" placeholder="Password">
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <input type="submit" value="Login" name="submit">
    </form>
</div>




    </body>
</html>

