<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('register-user')}}" method="post">
                        @if(Session::has('success'))
                            <span class="text-success" role="alert">{{Session::get('success')}}</span>
                        @endif
                        @if(Session::has('success'))
                            <span class="text-danger" role="alert">{{Session::get('fail')}}</span>
                        @endif
                        @csrf
                            <h3 class="text-center text-info">Registration</h3>

                            <div class="form-group">
                                <label for="username" class="text-info">First Name:</label><br>
                                <input type="text" value="{{old('firstname')}}" name="firstname" id="firstname" class="form-control">
                                <span class="text-danger" role="alert"> @error('firstname'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Last Name:</label><br>
                                <input type="text" name="lastname" value="{{old('lastname')}}" id="lastname" class="form-control">
                                <span class="text-danger" role="alert"> @error('lastname'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username"  value="{{old('username')}}" class="form-control">
                                <span class="text-danger" role="alert"> @error('username'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email"  value="{{old('email')}}" class="form-control">
                                <span class=" text-danger" role="alert"> @error('email'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                                <span class="text-danger" role="alert"> @error('password'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group">

                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Already Registered?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
