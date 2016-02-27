<!-- Favicon -->
<link href="../../assets/img/favicon.png" rel="icon" type="image/png">

<!-- Bootstrap style -->
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />

<!-- Font Awesome Style -->
<link href="../../assets/css/font-awesome.min.css" rel="stylesheet" media="screen" />

<!-- Animate Style -->
<link href="../../assets/css/animate.css" rel="stylesheet" media="screen" />

<!-- Flexslider Style -->
<link href="../../assets/css/flexslider.css" rel="stylesheet" media="screen" />

<!-- Lightbox -->
<link href="../../assets/css/magnific-popup.css" rel="stylesheet" media="screen" />

<!-- Style css -->
<link href="../../assets/css/style.css" rel="stylesheet" media="screen" />

<!-- Components css -->
<link href="../../assets/css/components.css" rel="stylesheet" media="screen" />

<!-- Color style css -->
<link href="../../assets/css/color/color-1.css" rel="stylesheet" media="screen" id="color" />

<!-- Responsive css -->
<link href="../../assets/css/responsive.css" rel="stylesheet" media="screen" />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!-- Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin:400,600' rel='stylesheet' type='text/css'>

<!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Modernizr js -->
<script src="../../assets/js/modernizr.js"></script>







<form id="basicBootstrapForm" class="form-horizontal"
      data-fv-framework="bootstrap"
      data-fv-icon-valid="glyphicon glyphicon-ok"
      data-fv-icon-invalid="glyphicon glyphicon-remove"
      data-fv-icon-validating="glyphicon glyphicon-refresh">

    <div class="form-group">
        <label class="col-xs-3 control-label">Full name</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="firstName" placeholder="First name"
                   data-fv-row=".col-xs-4"
                   data-fv-notempty="true"
                   data-fv-notempty-message="The first name is required" />
        </div>

        <div class="col-xs-4">
            <input type="text" class="form-control" name="lastName" placeholder="Last name"
                   data-fv-row=".col-xs-4"
                   data-fv-notempty="true"
                   data-fv-notempty-message="The last name is required" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Username</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="username"
                   data-fv-notempty="true"
                   data-fv-notempty-message="The username is required"

                   data-fv-stringlength="true"
                   data-fv-stringlength-min="6"
                   data-fv-stringlength-max="30"
                   data-fv-stringlength-message="The username must be more than 6 and less than 30 characters long"

                   data-fv-regexp="true"
                   data-fv-regexp-regexp="^[a-zA-Z0-9_\.]+$"
                   data-fv-regexp-message="The username can only consist of alphabetical, number, dot and underscore" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Email address</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="email"
                   data-fv-notempty="true"
                   data-fv-notempty-message="The email address is required"

                   data-fv-emailaddress="true"
                   data-fv-emailaddress-message="The input is not a valid email address" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="password"
                   data-fv-notempty="true"
                   data-fv-notempty-message="The password is required"

                   data-fv-different="true"
                   data-fv-different-field="username"
                   data-fv-different-message="The password cannot be the same as username" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Gender</label>
        <div class="col-xs-6">
            <div class="radio">
                <label>
                    <input type="radio" name="gender" value="male"
                           data-fv-notempty="true"
                           data-fv-notempty-message="The gender is required" /> Male
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="gender" value="female" /> Female
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="gender" value="other" /> Other
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label" id="captchaOperation"></label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="captcha"
                   data-fv-callback="true"
                   data-fv-callback-callback="checkCaptcha"
                   data-fv-callback-message="Wrong answer" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="agree" value="agree"
                           data-fv-notempty="true"
                           data-fv-notempty-message="You must agree with the terms and conditions" /> Agree with the terms and conditions
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-9 col-xs-offset-3">
            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
        </div>
    </div>
</form>

<script>
    // Check the captcha
    function checkCaptcha(value, validator, $field) {
        var items = $('#captchaOperation').html().split(' '),
            sum   = parseInt(items[0]) + parseInt(items[2]);
        return value == sum;
    }

    $(document).ready(function() {
        // Generate a simple captcha
        function randomNumber(min, max) {
            return Math.floor(Math.random() * (max - min + 1) + min);
        }
        $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

        $('#basicBootstrapForm').formValidation();
    });
</script>