<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>File.io</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Loading Bootstrap -->
  <link href="/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Loading Flat UI -->
  <link href="/css/flat-ui.css" rel="stylesheet">

  <!-- Loading Custom CSS -->
  <link href="/css/flat-ui.css" rel="stylesheet">

  <!-- Loading Favicon -->
  <link rel="shortcut icon" href="/favicon.ico">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
  <!--[if lt IE 9]>
<script src="../../dist/js/vendor/html5shiv.js"></script>
<script src="../../dist/js/vendor/respond.min.js"></script>
<![endif]-->

  <style>

    .navbar-static-top {
      margin-bottom: 19px;
    }
    #selector {
      background: #ecf0f1;
      width: 100%;
      border-radius: 5px;
      padding: 10px 15px;
    }
    #selector ul {
      margin: 0;
    }
    #selector ul li:not(:last-child) {
      border-bottom: 1px #bdc3c7 solid;
    }
    #selector ul li:not(:first-child) {
      padding-top: 5px;
    }
    #selector ul li:not(:last-child) {
      padding-bottom: 5px;
    }
    #selector ul li p {
      margin: 0;
    }
    .alignleft {
      float: left;
    }
    .alignright {
      float: right;
    }
    .alignright * {
      float: left;
    }
    .btn-upload {
      margin-right: 15px;
    }
    .jumbotron .container h3 {
      margin-top: 15px;
    }
  </style>
</head>

<body>
  <!-- Static navbar -->
  <div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand" href="/">File.io</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a>
          </li>
          <li><a href="/about">About</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="/upload">Upload  <span class="fui-plus"></span></a>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>


  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h3>Aww yeah! New stuff!</h3>
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <input style="display: inline; margin-bottom: 15px;" type="file" name="file"/>
          </br>
          <button class="btn btn-primary" onClick="this.form.submit()">Upload!</button>
        </form>
      </div>
    </div>

  </div><!-- /container -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="/js/vendor/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="/js/flat-ui.min.js"></script>

  <script src="/js/application.js"></script>

</body>

</html>
