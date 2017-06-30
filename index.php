<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>TPC Kürckhoven</title>

    <link rel='shortcut icon' href='content/images/favicon-tpc.png'>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link href="stylesheets/business-frontpage.css" rel="stylesheet">
    <link href="stylesheets/custom.css" rel="stylesheet">
    <link href="fonts/css/font-awesome.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="border-color:#104e8b ;background-color:#104e8b;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" rel="home" href="?location=Home"><b>TPC Kückhoven</b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>	<a href="?location=Verein">Verein</a>	</li>
                    <li>	<a href="?location=Referenzen">Referenzen</a>	</li>
                    <li>	<a href="?location=MitgliedWerden">Mitglied werden</a>	</li>
                    <li>	<a href="?location=Kontakt">Kontakt</a>	</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <?php include 'router/_r_main.php'; ?>
    <!-- Footer -->
    <hr>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <center><p><a href="?location=Impressum">Impressum</a> - <a href="?location=Disclaimer">Disclaimer</a> - <a href="?location=Datenschutz">Datenschutz</a></p></center>
                    <center><p>Copyright &copy; Andre Trebels 2017</p></center> 
                </div>
            </div><!-- /.row -->
        </div>
    </footer>
</body>
</html>