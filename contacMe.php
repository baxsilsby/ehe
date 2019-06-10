<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Learning EHE</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/contact.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
        <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php">Electonik Home<span> Education </span> </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="container">
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation"><a href="login.php">Login </a></li>
                        <li role="presentation"><a href="register.php">Daftar </a></li>
                        <li role="presentation"><a href="#">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <SECTION >
         <div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form" style="align-">
        <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Hubungi Kami</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                <textarea class="form-control resize: vertical;" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                </div>
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right"><a href = "index.php" >Kirim</button>
        </form>
    </div>
</div>
</div>
    </SECTION>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/contact.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>