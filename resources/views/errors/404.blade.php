<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>404 Page Not Found | 4 Side</title>

    <style type="text/css">
        .container{
           /* background-color: #C4CCD9;*/
            margin-top: 160px;
            /*margin-bottom: 200px;*/
        }

        .error-main{
          background-color: #fff;
          box-shadow: 0px 10px 10px -10px #5D6572;
        }
        .error-main h1{
          font-weight: bold;
          color: #444444;
          font-size: 100px;
          text-shadow: 2px 4px 5px #6E6E6E;
        }
        .error-main h6{
          color: #42494F;
        }
        .error-main p{
          color: #9897A0;
          font-size: 14px; 
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
          <div class="row">
            <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
              <h1 class="m-0">404</h1>
              <h6>Page not found &nbsp;<a href="javascript:history.back()">Go Back</a></h6>
             <!--  <p>Lorem ipsum dolor sit <span class="text-info">amet</span>, consectetur <span class="text-info">adipisicing</span> elit, sed do eiusmod.</p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>