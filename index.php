<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="/record/index.php">Home</a></li>
          <li><a href="/record/test.php">Demo</a></li>
        </ul>
        <h3 class="muted">Tempgram</h3>
      </div>

      <hr>

      <div class="jumbotron">
        <h1>WebRTC Recording with Filters</h1>
        <p class="lead">Record Video with Audio using latest web technology with WebRTC</p>
        <a class="btn btn-large btn-success" href="/record/test.php">Demo</a>
      </div>

      <hr>

      <div class="row-fluid marketing">
        <div class="span6">
          <h4>Video</h4>
          <p>Record Video with clean WebRTC quality with help from Whammy.js</p>

          <h4>Audio</h4>
          <p>Easier implementation of Audio with help from Recorder.js</p>

          <h4>Filters</h4>
          <p>Use filters with HTML Canvas with from filter plugins</p>
        </div>

        <div class="span6">
          <h4>Recording</h4>
          <p>You can finally record now, what we did is just stitch together both video and audio recording</p>
		</div>
      </div>

      <hr>

      <div class="footer">
        <p>Centric Media © 2013</p>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    
    

  </body>
</html>