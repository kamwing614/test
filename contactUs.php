<!Doctype html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/contactUsStyleSheet.css">
  <title>聯絡我們 </title>
</head>

<body>

  <div class="header">
    <div class="logo">
      <img src="pic/homePic/logo.jpeg" alt="company logo" style="width:200px;height:125px">
    </div>
    <div class="menu">
      <a href="home.html" class="button">主頁</a>
      <a href="aboutUs.html" class="button">公司簡介</a>

      <div class="dropdown">
        <a href="service.html" class="dropbtn button">服務</a>
        <div class="dropdown-content">
          <a href="decoration.html">裝修工程</a>
          <a href="hrPage.html">人力資源</a>
          <a href="exhibition.html">展覽工程</a>

        </div>
      </div>


      <a href="contactUs.html" class="button">聯絡我們</a>
    </div>

  </div>





  </div>

  <div class="title">
    <img src="pic/aboutPic/colorful.jpg" alt="company background photo" style="width:100%; height:200px;">

    <div class="headerInMiddle">
      <h1>聯絡我們</h1>
    </div>


  </div>

  <div class="flex-container">
    <div class="item info">
      <h4>地址</h4>
      <p>This is an address.</p>
      <h4>聯絡電話</h4>
      <p>12345678</p>
      <h4>電郵</h4>
      <p>kamwing614@gmail.com</p>

    </div>
    <div class="item submissionForm">
    <main>
      <p>SEND US E-MAIL</p>
      <form class="contact-form" action="contactform.php" method="post">
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="mail" placeholder="Your e-mail">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message" rows="8" cols="80"></textarea>
        <button type="submit" name="submit">SEND MAIL</button>

      </form>
    </main>

      </form>

    </div>

  </div>




  <div class=footer>
    <hr>
    <footer>
      <a class="media" href="https://www.telegram.com">
        <img src="pic/footer/tg.png" alt="telegram" style="width:40px;height:40px;border:0;">
      </a>
      <a class="media" href="https://www.whatsapp.com">
        <img src="pic/footer/wtsapp.png" alt="whatsapp" style="width:40px;height:40px;border:0;">
      </a>
      <a class="media" href="https://www.facebook.com">
        <img src="pic/footer/fb.png" alt="facebook" style="width:40px;height:40px;border:0;">
      </a>
      <a class="media" href="https://www.instagram.com">
        <img src="pic/footer/ig.jpg" alt="instagram" style="width:40px;height:40px;border:0;">

      </a>
      <a href="mailto:kamwing614@gmail.com">email</a>
      <p>Copyright &copy; 2020 BraveNew Company. All Rights Reserved.</p>
    </footer>
  </div>
  <script language=”JavaScript”>
    var frmvalidator = new Validator(“contactform”);
    frmvalidator.addValidation(“name”, ”req”, ”Please provide your name”);
    frmvalidator.addValidation(“email”, ”req”, ”Please provide your email”);
    frmvalidator.addValidation(“email”, ”email”, “Please enter a valid email address”);
  </script>


</body>
