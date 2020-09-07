<?php
include "koneksi.php";
if (isset($_SESSION['username'])) {
  header("location:media_admin.php?module=home");
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <style type="text/css">
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      outline: none;
      text-decoration: none;
      font-family: "Josefin Sans", sans-serif;
    }

    body {
      width: 100%;
      height: 100%;
      background-image: url(img/cbi.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      opacity: 0.9;
    }

    .wrapper {
      max-width: 500px;
      width: 100%;
      height: 400px;
      background: #F3F3F3;
      position: absolute;
      top: 55%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .wrapper .top {
      padding: 40px;
      text-align: center;
      position: relative;
    }

    .wrapper .top h1 {
      margin-bottom: 10px;
      color: #41a7f2;
    }

    .wrapper .top h2 {
      margin-bottom: 10px;
    }

    .wrapper .top .input_field {
      margin-bottom: 12px;
    }

    .wrapper .top .input_field input[type="text"] {
      width: 100%;
      background: #cdd8e5;
      border: 0;
      padding: 12px;
      padding-left: 20px;
      border-radius: 25px;
    }

    .wrapper .top .input_field input[type="password"] {
      width: 100%;
      background: #cdd8e5;
      border: 0;
      padding: 12px;
      padding-left: 20px;
      border-radius: 25px;
    }


    .wrapper .top input.btn {
      background: #41a7f2;
      margin-top: 20px;
      width: 100%;
      padding: 12px;
      align: center;
      border-radius: 25px;
      color: #fff;
      display: block;
      text-transform: uppercase;
      letter-spacing: 3px;
    }

    img {
      width: 230px;
      height: 160px;
      top: 2%;
      left: 1%;
      position: absolute;
      opacity: 0.9;
    }

    .jam {
      overflow: hidden;
      width: 105px;
      margin: 0px auto;
      border-bottom: 3px solid #41a7f2;
    }

    .kotak {
      float: left;
      width: 35px;
      margin-top: 0;
      height: 20px;
      background-color: #fff;
    }


    #jam p {
      color: red;
      font-size: 20px;
      text-align: center;
      margin-top: 10px;
    }

    .wrapper .top div.btn {
      background: #f3f3f3;
      margin-top: 10px;
      margin-left: 25%;
      width: 50%;
      height: 70px;
      padding: 12px;
      align-content: center;
      display: block;
      text-transform: uppercase;
      letter-spacing: 3px;
    }

    p.judul {
      top: 30%;
      left: 2%;
      position: absolute;
      font-size: 20px;
    }
  </style>
</head>

<body>
  <img src="img/logo1.png" alt="">
  <p class="judul"><b>SMK INFORMATIKA CBI</>
  </p>
  <div class="wrapper">
    <div class="top">
      <h1>Pembayaran SPP Online</h1>
      <h2>Login</h2>
      <form action="cek_login.php" class="form" method="POST" onsubmit="return validasi(this)">
        <div class="input_field">
          <input type="text" id="username" name="inputusername" autocomplete="on" placeholder="USERNAME" required>
        </div>
        <div class="input_field">
          <input type="Password" id="user-password" name="inputpassword" placeholder="PASSWORD" required>
        </div>
        <input class="btn" type="submit" name="submit" value="login" />
        <div class="btn">
          <div class="jam">
            <div class="kotak">
              <p id="jam"></p>
            </div>
            <div class="kotak">
              <p id="menit"></p>
            </div>
            <div class="kotak">
              <p id="detik"></p>
            </div>
          </div>
        </div>

    </div>

  </div>

  </form>



  </div>

  </div>



</body>
<script type="text/javascript">
  window.setTimeout("waktu()", 1000);

  function waktu() {
    var waktu = new Date();
    setTimeout("waktu()", 1000);
    document.getElementById("jam").innerHTML = waktu.getHours() + ":";
    document.getElementById("menit").innerHTML = waktu.getMinutes() + ":";
    document.getElementById("detik").innerHTML = waktu.getSeconds();
  }

  function validasi(form) {
    if (form.inputUsername.value == "") {
      alert("Anda belum mengisikan Username");
      form.inputusername.focus();
      return false;
    }
    if (form.inputPassword.value == "") {
      alert("Anda belum mengisikan Password.");
      form.inputPassword.focus();
      return false;
    }
    return true;
  }
</script>

</html>