<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('layouts.partials.head')
</head>
<body>
<div id="login-page">
    <div class="container">
      <form class="form-login" action="user_register" method="post">
          @csrf
        <h2 class="form-login-heading">Registration</h2>
        <div class="login-wrap">
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}" required autofocus>
          @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          <br>
          <input type="text" name="trade"  class="form-control  @error('trade') is-invalid @enderror" placeholder="Trade" value="{{ old('trade') }}" required>
          @error('trade')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          <br>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Password" required>
          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          <br>
          <input type="password" name="confirm" value="{{ old('confirm') }}" class="form-control @error('who_are_you') is-invalid @enderror" placeholder="Confirm Password" required>
          <div style="display:flex; flex-direction:column;">
                <label class="checkbox">
                  <input type="radio" name="who_are_you" value="Director" > Director &nbsp
                </label>
                <label>
                  <input type="radio" name="who_are_you" value="Startup" > Start Up &nbsp
                </label>
                <label>
                  <input type="radio" name="who_are_you" value="Spinoff"> Spinf off &nbsp
                </label>
                <label>
                  <input type="radio" name="who_are_you" value="Section Leader"> Section Leader &nbsp</br>
                </label>
                <label>
                  <input type="radio" name="who_are_you" value="Employee"> Employee
                </label>
        </div>
            @error('who_are_you')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-face"></i> Register</button>
      
        </div>
       
      </form>
      <!-- <h1 style="color:#fff">Extra Infor</1> -->
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/ny.jpg", {
      speed: 500
    });
  </script>
</body>
</html>