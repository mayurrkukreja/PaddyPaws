
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="feedback.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;"> 
                <!--      <img src="images/logo.jpg"  width="15% "/> --> Online Pet Shop Management System</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Available Products</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                                                               
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->


        <div class="feedback">
            <h3>How would you rate your experience at PaddyPaws?</h3>
            <div class="feedback_ratings">
                <span class="feedback_rating" data-rate="1">😢 Worst</span>
                <span class="feedback_rating" data-rate="2">😒 Poor</span>
                <span class="feedback_rating" data-rate="3">😐 OK</span>
                <span class="feedback_rating" data-rate="4">😏 Good</span>
                <span class="feedback_rating" data-rate="5">😁 Great</span>
            </div>
            <div class="feedback-n">
    
            </div>
    
        </div>
        <script src="feedback.js"></script>
</body>
</html>
