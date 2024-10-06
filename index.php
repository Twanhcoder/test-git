<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="banner-login">
    <div class="login-wrapper">
      <div class="form">

        <ul class="tab-group">
          <li class="tab active"><a href="#signup">Đăng ký</a></li>
          <li class="tab"><a href="#login">Đăng nhập</a></li>
        </ul>

        <div class="tab-content">
          <div id="signup">

            <form action="/" method="post">

              <div class="field-wrap">
                <label>
                  Email của bạn<span class="req">*</span>
                </label>
                <input type="email" required autocomplete="off" />
              </div>

              <div class="field-wrap">
                <label>
                  Set A Password<span class="req">*</span>
                </label>
                <input type="password" required autocomplete="off" />
              </div>

              <button type="submit" class="button button-block" >Get Started</button>

            </form>

          </div>

          <div id="login">
            <h1>Welcome Back!</h1>

            <form action="/" method="post">

              <div class="field-wrap">
                <label>
                  Email Address<span class="req">*</span>
                </label>
                <input type="email" required autocomplete="off" />
              </div>

              <div class="field-wrap">
                <label>
                  Password<span class="req">*</span>
                </label>
                <input type="password" required autocomplete="off" />
              </div>

              <p class="forgot"><a href="#">Forgot Password?</a></p>

              <button class="button button-block">Log In</button>

            </form>

          </div>

        </div>

      </div>
    </div>

  </div>
  </div>
</body>

</html>