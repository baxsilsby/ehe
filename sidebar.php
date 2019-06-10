<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Responsive Sidebar</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.offcanvas.css" rel="stylesheet">
    <link href="assets/bootstrap/css/bootstrap.offcanvas.min.css" rel="stylesheet">
  </head>
 
  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Website Anda</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
 
    <div class="container" style="margin-top:70px">
      <span style="color: #ff0000;"><div class="row row-offcanvas row-offcanvas-left"></span> <strong><span style="color: #ff0000;">//--1--//</span></strong>
        <div class="col-xs-12 col-sm-9">
          <span style="color: #ff0000;"><p class="pull-left visible-xs"> //--2--//
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sidebar</button>
          </p></span>
        <span style="color: #ff0000;"><div class="jumbotron">//--4--//</span>
        <br>
        <p>Konten Website Anda</p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dicta minus molestiae vel beatae natus eveniet ratione temporibus aperiam harum alias officiis assumenda officia quibusdam deleniti eos cupiditate dolore doloribus!
        Ad dolore dignissimos asperiores dicta facere optio quod commodi nam tempore recusandae. Rerum sed nulla eum vero expedita ex delectus voluptates rem at neque quos facere sequi unde optio aliquam!
        Tenetur quod quidem in voluptatem corporis dolorum dicta sit pariatur porro quaerat autem ipsam odit quam beatae tempora quibusdam illum! Modi velit odio nam nulla unde amet odit pariatur at!
        Consequatur rerum amet fuga expedita sunt et tempora saepe? Iusto nihil explicabo perferendis quos provident delectus ducimus necessitatibus reiciendis optio tempora unde earum doloremque commodi laudantium ad nulla vel odio?
        </div>
        </div>
 
        <span style="color: #ff0000;"><div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar"> //--3--//</span>
          <div class="list-group">
            <a href="#" class="list-group-item">Link Sidebar1</a>
            <a href="#" class="list-group-item">Link Sidebar2</a>
            <a href="#" class="list-group-item">Link Sidebar3</a>
            <a href="#" class="list-group-item">Link Sidebar4</a>
            <a href="#" class="list-group-item">Link Sidebar5</a>
            <a href="#" class="list-group-item">Link Sidebar6</a>
            <a href="#" class="list-group-item">Link Sidebar7</a>
            <a href="#" class="list-group-item">Link Sidebar8</a>
            <a href="#" class="list-group-item">Link Sidebar9</a>
            <a href="#" class="list-group-item">Link Sidebar10</a>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->
 
      <hr>
 
      <footer>
        <p>Copyright &copy; HAT 2019</p>
      </footer>
 
    </div><!--/.container-->
 
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.offcanvas.js"></script>
    <script src="assets/bootstrap/js/bootstrap.offcanvas.min.js"></script>
  </body>
</html>