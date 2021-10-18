@if(session('user'))
    <!DOCTYPE html>
    <html lang="en">
    <head>
      @include('layouts.partials.head')
    </head>
    <body>
    <section id="content">
        @include('startups.layouts.header')
        @include('startups.layouts.sidebar')

        <!--main content start-->
          <section id="main-content">
            <section class="wrapper">
                @yield('content')
            </section>
          </section>
          <!--main content end-->
        @include('startups.layouts.footer')
    </section>
        @include('startups.layouts.scripts')

    </body>
    </html> 
@else
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
              @if (session('status'))
              <div class="alert alert-success">
                <!-- add a timeout for the flash message with javascript -->
                  {{ session('status') }}
              </div>
              @endif
            <form class="form-login" action="user_login" method="post">
                @csrf
              <h2 class="form-login-heading">sign in now</h2>
              <div class="login-wrap">
                <input type="text" name="name" class="form-control" placeholder="email" autofocus>
                <br>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> Remember me
                  <span class="pull-right">
                  <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
                  </span>
                  </label>
                <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                <hr>
            
                <div class="registration">
                  Don't have an account yet?<br/>
                  <a class="" href="{{url('register_user')}}">
                    Create an account
                    </a>
                </div>
              </div>
              @if (session('Failed'))
              <div class="alert alert-danger">
                <!-- add a timeout for the flash message with javascript -->
                  {{ session('Failed') }}
              </div>
              @endif
            </form>
          </div>
        </div>
        <!-- Modal for Forgot Password-->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                      <p>Enter your e-mail address below to reset your password.</p>
                      <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                    </div>
                    <div class="modal-footer">
                      <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                      <button class="btn btn-theme" type="button">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal -->
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
        <script>
          $.backstretch("img/login-bg.jpg", {
            speed: 500
          });
        </script>
      </body>
      </html>
@endif