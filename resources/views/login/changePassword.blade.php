
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Change Password</title>
  <link rel="shortcut icon" type="image/png" href="source/img/logoflove.png"/>

  <!-- Custom fonts for this template-->
  <link href="source/login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="source/login/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">Change Your Password</div>
      <div class="card-body">
        @if(count($errors)>0)
        <div class="alert alert-danger">
          @foreach($errors->all() as $err)
            {{$err}}<br>
          @endforeach
        </div>
        @endif

        @if(session('thongbao1'))
          <div class="alert alert-danger">
            {{session('thongbao1')}}
          </div>
        @endif   

        @if(session('thongbao'))
          <div class="alert alert-success">
            {{session('thongbao')}}
          </div>
        @endif        
        <form action="{{route('changePassword')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="oldPassword" class="form-control" placeholder="Old Password" required="required" name="oldpassword">
              <label for="oldPassword">Old Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="NewPassword" class="form-control" placeholder="New sPassword" required="required" name="newpassword">
              <label for="NewPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="confirmPassword" class="form-control" name="re_password" placeholder="Confirm password" required="required">
                <label for="confirmPassword">Confirm password</label>
              </div> 
          </div>
          
        <input class="btn btn-primary btn-block" type="submit" value="Change">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{route('home.index')}}">Come back home</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="source/vendor/jquery/jquery.min.js"></script>
  <script src="source/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="source/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>