<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url(bg3.jpg);
    background-size: cover;
  }
  .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    padding: 40px;
    background: rgba(0, 0, 0, 0.6);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
  }
  .box h2{
    margin: 0 0 30px;
    padding: 0px;
    color: #fff;
    text-align: center;
  }
  .box .input-box{
    position: relative;
  }
  .box .input-box input{
    width: 100%;
    padding: 10px 0px;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid #fff;
  }
  .box .input-box label{
    position: absolute;
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 10px 0px;
    font-size: 16px;
    color: #fff;
    transition: .5s;
  }
  .box .input-box input:focus ~ label,
  .box .input-box input:valid ~ label{
    top: -18px;
    left: 0px;
    color: #03a9f4;
    font-size: 12px;
  }
  .box input[type="submit"]{
    background: transparent;
    border: none;
    outline: none;
    color: #000000;
    background: #9AD69A;
    padding: 10px 20px;
    border-radius: 5px;
    cursor:pointer;
  }
  .button{
    background: #2AF40A;
    border-radius: 30px;
  }
  .button:hover {
background: #2AF40A; color: #2AF40A;
box-shadow: 0 5px #2AF40A,
0 0 25px #2AF40A,
0 0 50px #2AF40A,
0 0 200px #2AF40A;
-webkit-box-reflect:below 1px linear-gradient(transparent, #0005);
}
.button:nth-child(1){
filter: hue-rotate(270deg);
}
.button:nth-child(2){
filter: hue-rotate(110deg);
}
.button span{
position: absolute;
display: block;
}

  </style>
  <title>Form</title>
</head>
<body>
  <div class="box">
    <h2>Sign Up</h2>
    <form action="config.php">
      <div class="input-box">
        <input type="text" name="username"  autocomplete="off" required>
        <label for="">Username</label>
      </div>
      <div class="input-box">
        <input type="email" name="email"  autocomplete="off" required>
        <label for="">Email</label>
      </div>
      <div class="input-box">
        <input type="password" name="password"  autocomplete="off" required>
        <label for="">Password</label>
      </div>
        <input type="submit" value="Save" class="button">
    </form>
  </div>
</body>
</html>
