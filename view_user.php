     <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Middle Village Construction</title>
    </head>
    <body class="div">
        <div class="pad"> 
        <p1 class="pad">Welcome to the Middle Village Construction
            <hr>
    </p1>
   
        </div>
        <a class="log" href="login.php"> Logout</a>
        
    </body>
    </html>




    <style>
        *{
            box-sizing:border-box;
        }
        body{
            display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
        }

    .div {
  display: block;
  position: relative;
  margin:0px;
  font-family: font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

.div::after {
  content: "";
  background: url(images/me.jpg);
  opacity: 0.5;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;   
}

.pad{
    font-size:35px;
    text-align:center;
    opacity:1;
    line-height:500px;
    font-weight:bolder;
}

.log{
    font-size:30px;
    text-align:center;
    opacity:1;
    margin-left:50%;
}

a:hover{
    color:red;
    transition:0.5s;
}



</style>

