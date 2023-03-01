<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    body {
  background-color: #fff;
  font-family: 'Karla', sans-serif; }

.intro-section {
  background-image: url(https://i.ibb.co/t2tbbh6/pexels-luis-quintero-2471234.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  padding: 75px 95px;
  min-height: 100vh;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  color: #ffffff; }
  @media (max-width: 991px) {
    .intro-section {
      padding-left: 50px;
      padding-rigth: 50px; } }
  @media (max-width: 767px) {
    .intro-section {
      padding: 28px; } }
  @media (max-width: 575px) {
    .intro-section {
      min-height: auto; } }

.brand-wrapper .logo {
  height: 35px; }

@media (max-width: 767px) {
  .brand-wrapper {
    margin-bottom: 35px; } }

.intro-content-wrapper {
  width: 410px;
  max-width: 100%;
  margin-top: auto;
  margin-bottom: auto; }
  .intro-content-wrapper .intro-title {
    font-size: 40px;
    font-weight: bold;
    margin-bottom: 17px; }
  .intro-content-wrapper .intro-text {
    font-size: 19px;
    line-height: 1.37; }
  .intro-content-wrapper .btn-read-more {
    background-color: #fff;
    padding: 13px 30px;
    border-radius: 0;
    font-size: 16px;
    font-weight: bold;
    color: #000; }
    .intro-content-wrapper .btn-read-more:hover {
      background-color: transparent;
      border: 1px solid #fff;
      color: #fff; }

@media (max-width: 767px) {
  .intro-section-footer {
    margin-top: 35px; } }

.intro-section-footer .footer-nav a {
  font-size: 20px;
  font-weight: bold;
  color: inherit; }
  @media (max-width: 767px) {
    .intro-section-footer .footer-nav a {
      font-size: 14px; } }
  .intro-section-footer .footer-nav a + a {
    margin-left: 30px; }

.form-section {
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center; }
  @media (max-width: 767px) {
    .form-section {
      padding: 35px; } }

.login-wrapper {
  width: 300px;
  max-width: 100%; }
  @media (max-width: 575px) {
    .login-wrapper {
      width: 100%; } }
  .login-wrapper .form-control {
    border: 0;
    border-bottom: 1px solid #e7e7e7;
    border-radius: 0;
    font-size: 14px;
    font-weight: bold;
    padding: 15px 10px;
    margin-bottom: 7px; }
    .login-wrapper .form-control::-webkit-input-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control::-moz-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control:-ms-input-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control::-ms-input-placeholder {
      color: #b0adad; }
    .login-wrapper .form-control::placeholder {
      color: #b0adad; }

.login-title {
  font-size: 30px;
  font-weight: bold;
  margin-bottom: 30px; }

.login-btn {
  padding: 13px 30px;
  background-color: #000;
  border-radius: 0;
  font-size: 20px;
  font-weight: bold;
  color: #fff; }
  .login-btn:hover {
    border: 1px solid #000;
    background-color: transparent;
    color: #000; }

.forgot-password-link {
  font-size: 14px;
  color: #080808;
  text-decoration: underline; }

.social-login-title {
  font-size: 15px;
  color: #919aa3;
  display: -webkit-box;
  display: flex;
  margin-bottom: 23px; }
  .social-login-title::before, .social-lloginogin-title::after {
    content: "";
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f4f4f4), to(#f4f4f4));
    background-image: linear-gradient(#f4f4f4, #f4f4f4);
    -webkit-box-flex: 1;
            flex-grow: 1;
    background-size: calc(100% - 20px) 1px;
    background-repeat: no-repeat; }
  .social-login-title::before {
    background-position: center left; }
  .social-login-title::after {
    background-position: center right; }

.social-login-links {
  text-align: center;
  margin-bottom: 32px; }

.social-login-link img {
  width: 40px;
  height: 40px;
  -o-object-fit: contain;
     object-fit: contain; }

.social-login-link + .socia-login-link {
  margin-left: 16px; }

.login-wrapper-footer-text {
  font-size: 14px;
  text-align: center; }


  </style>
  <body>

    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 col-md-7 intro-section">
            <div class="brand-wrapper">
              <h1>Logo</h1>
            </div>
            <div class="intro-content-wrapper">
              <h1 class="intro-title">Welcome to website !</h1>
              <p class="intro-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna</p>
              <a href="#!" class="btn btn-read-more">Read more</a>
            </div>
            <div class="intro-section-footer">
              <a class="footer-nav">
                <a href="#!">Facebook</a>
                <a href="#!">Twitter</a>
                <a href="#!">Gmail</a>
              </a>
            </div>
          </div>
          <div class="col-sm-6 col-md-5 form-section">
            <div class="login-wrapper">
              <h2 class="login-title">Sign in</h2>
              <form action="{{ route('logat') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="name" class="sr-only">Name</label>
                  <input type="text" name="name" id="email" class="form-control" placeholder="Name">
                </div>

                <div class="form-group">
                    <label for="text" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>

                <div class="form-group">
                    <button class="btn login-btn" type="submit">Log In</button>
                </div>

                @if($errors)
                    @foreach ($errors->all() as $error)
                        <div class="text-danger">{{ $error }}</div>
                    @endforeach
                @endif

              </form>
              <p class="login-wrapper-footer-text">Need an account? <a href="{{ route('register') }}" class="text-reset">Signup here</a></p>
            </div>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
