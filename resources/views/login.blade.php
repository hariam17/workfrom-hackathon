<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
    background-image: url('img/tes.jpg');
    background-size: cover;
    background-position: center;
    height: 100vh;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}


.login-container {
    background: transparent !important;
    padding: 20px;
}

.login-container h2 {
    text-align: center;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 login-container">
                <div class="ui centered grid">
                    <img src="{{ asset('img/logo/Logo-WF.png') }}" alt="logo Workfrom" width="280" height="70">
                </div>

                <h2>Login</h2>
                <form method="POST" action="">
                    <div class="form-group">
                        <div class="col-md-12" style="background: #49ff92;border-radius:80px">
                            <div class="input-group" style="background: #49ff92;">
                              <span class="input-group-text align-content-center" id="inputGroupPrepend2" style="background: #49ff92;border:none"><img src="{{asset('img/icon/user_icon.png')}}" alt="user" width="15" height="15"></span>
                              <input type="text" class="form-control" id="inputUsername" style="background: #49ff92;border:none" aria-describedby="inputGroupPrepend2" placeholder="Username" required>
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12" style="background: #49ff92;border-radius:80px">
                            <div class="input-group" style="background: #49ff92;">
                              <span class="input-group-text align-content-center" id="inputGroupPrepend2" style="background: #49ff92;border:none"><img src="{{asset('img/icon/password_icon.png')}}" alt="pwd" width="15" height="15"></span>
                              <input type="text" class="form-control" id="inputPassword" style="background: #49ff92;border:none" aria-describedby="inputGroupPrepend2" placeholder="Password" required>
                            </div>
                          </div>
                    </div>
                    <div class="text-right">
                        <a href="#" style="color: #fd1d0d"><small>Forgot Password?</small></a>

                    </div>
                    <br>
                    <div class="ui centered grid text center">
                        <button type="submit" class="ten wide column fluid ui green button align text center" style="text-align: center;border-radius:80px;">Login</button>
                    </div>
                </form>
                <br>
                <div class="ui horizontal divider">
                    Or Login With
                  </div>
                  <div class="ui centered grid">
                    <div class="three wide column">
                        <a href="#" class=""><img src="{{ asset('img/icon/google_icon.png') }}" alt="" width="40" height="40"></a>
                    </div>

                    <div class="three wide column">
                        <a href="#" class=""><img src="{{ asset('img/icon/x_logo.png') }}" alt="" width="40" height="40"></a>
                    </div>
                    <div class="three wide column">
                        <a href="#" class=""><img src="{{ asset('img/icon/facebook_icon.png') }}" alt="" width="40" height="40"></a>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
