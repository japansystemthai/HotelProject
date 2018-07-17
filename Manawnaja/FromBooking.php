<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Booking from</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<style type="text/css">
  body{
    color: #fff;
    background: url(./imges/4.jpg) top center ;
    background-size: 100%;
    background-origin: content;
    background-repeat: repeat-x;
    font-family: 'Roboto', sans-serif;
  }
    .form-control{
    height: 40px;
    box-shadow: none;
    color: #969fa4;
  }
  .form-control:focus{
    border-color: #5cb85c;
  }
    .form-control, .btn{        
        border-radius: 3px;
    }
  .signup-form{
    width: 400px;
    margin: 0 auto;
    padding: 30px 0;
  }
  .signup-form h2{
    color: #636363;
        margin: 0 0 15px;
    position: relative;
    text-align: center;
    }
  .signup-form h2:before, .signup-form h2:after{
    content: "";
    height: 2px;
    width: 30%;
    background: #d4d4d4;
    position: absolute;
    top: 50%;
    z-index: 2;
  } 
  .signup-form h2:before{
    left: 0;
  }
  .signup-form h2:after{
    right: 0;
  }
    .signup-form .hint-text{
    color: #999;
    margin-bottom: 30px;
    text-align: center;
  }
    .signup-form form{
    color: #999;
    border-radius: 3px;
      margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;

    }
  .signup-form .form-group{
    margin-bottom: 20px;

  }
  .signup-form input[type="checkbox"]{
    margin-top: 3px;
  }
  .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;    
    min-width: 140px;
        outline: none !important;
    }
  .signup-form .row div:first-child{
    padding-right: 10px;
  }
  .signup-form .row div:last-child{
    padding-left: 10px;
  }     
    .signup-form a{
    color: #fff;
    text-decoration: underline;
  }
    .signup-form a:hover{
    text-decoration: none;
  }
  .signup-form form a{
    color: #5cb85c;
    text-decoration: none;
  } 
  .signup-form form a:hover{
    text-decoration: underline;
  }

</style>
</head>
<body>
<br>
<div class="signup-form">
 <form method="post" action="#">
  <center><h3>FromBooking Hotel</h3></center>

  <div class="form-group">
      <div class="row">
        <div class="col-xs-6"><input type="text" class="form-control" name="name" placeholder="First Name" required="required"></div>
        <div class="col-xs-6"><input type="text" class="form-control" name="Lastname" placeholder="Last Name" required="required"></div>
      </div>          
        </div>

        <div class="form-group">
          <div class="row">
         <div class="col-sm-6" align="center">
            <input type="radio" name="sex1" value="1" />&nbsp;Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="sex1" value="2"/>&nbsp;Female
          </div>
        </div>
      </div>

<div class="form-group">
  <input type="text" class="form-control" name="" placeholder="" required="required">
</div>

<div class="form-group">
  <input type="password" class="form-control" name="" placeholder="" required="required">
</div>

<div class="form-group">
  <textarea name="add"  class="form-control"  placeholder="Address" required="required" style="width: 100%; height: 80px;"></textarea>
</div>

<div class="form-group">
  <input type="text" class="form-control" name="tel" placeholder="tel" required="required">
</div>

<div class="form-group">
          <input type="e-mail" class="form-control" name="e-mail" placeholder="E-mail" required="required">
        </div>


<!--<div class="form-group">
      <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
    </div>-->
    <div class="form-group">
            <button type="submit" name="ok" class="btn btn-success btn-lg btn-block" colspan="2">Booking Now</button>
        </div>
</div>
</form> 
</center>
</body>
</html>