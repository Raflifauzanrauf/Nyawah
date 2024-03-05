<?php require_once('connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
  <div class="containerMain">
    <div class="containerMainLeft">
      <h1 class="mainTitle">Welcome to Nyawah</h1>
      <p class="mainDesc">
        Sign up to get access to thousands of nurse-submitted
        reviews,compensation data points, and job
        recommendations.
      </p>
      <div>
        <form action="" method="POST" class="containerMainTextArea">
          <div class="containerFlexTextArea">
            <input class="inputText" placeholder="First name" type="text" name="firstName" >
            <input class="inputText" placeholder="Last name" type="text"  name="lastName">
          </div>
          <input class="inputText" placeholder="Email" type="email" name="email">
          <input class="inputText" placeholder="Password" type="password"  name="password">
          <p class="descPasswordTextArea">Password be at least 8 character</p>
          <div class="containerMainCheckbox">
            <label class="containerCheckbox">
            <input type="checkbox">
            <span class="checkmark"></span>
            </label>
            <p class="descCheckbox">I agree to the Mosh
              <p class="descCheckboxColor">terms of service.</p>
            </p>
          </div>
          <input  type="submit" name="signup" value="Sign up" class="button">
        </form>
      </div>
      <P class="descSocial">or continue with</P>
      <div class="containerMainSocialImg">
        <div class="containerSocialImg">
          <img src="assets/google.png" class="image">
          <p class="socialText">Google</p>
        </div>
        <div class="containerSocialImg">
          <img src="assets/Facebook.png" class="image">
          <p class="socialText">Facebook</p>
        </div>
      </div>
      <div class="containerDescBottom">
        <P class="descBottom">Already registred?
          <p class="descBottomColor">Sign in</p>
        </P>
      </div>
    </div>
    <div class="containerMainRight">
      <div class="containerRight">
        <div class="containerImageIlustration">
          <img class="imageIlustration" src="assets/3372866.png">
        </div>
        <div class="containerMainDesc">
          <div class="containerDesc">
            <img src="assets/man.png" class="imageFeatured">
            <P class="containerDescTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </P>
          </div>
          <div class="containerDesc">
            <img src="assets/working.png" class="imageFeatured">
            <P class="containerDescTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</P>
          </div>
          <div class="containerDesc">
            <img src="assets/team.png" class="imageFeatured">
            <P class="containerDescTitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </P>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>