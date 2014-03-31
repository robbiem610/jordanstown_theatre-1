<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo "Test" ?></title>

<?php echo $this->Html->css('1-col-portfolio');
    echo $this->Html->css('bootstrap');
    echo $this->Html->script('jquery');
    echo $this->Html->script('bootstrap'); ?>
</head>

<body>
<!-- This is the navigation bar for this webpage -->
<div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li><a href="whats_on">What's On</a></li>
      <li class="active"><a href="coming_soon">Coming Soon</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Offers<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Dropdown header</li>
          <li><a href="#">Separated link</a></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Login/ Register</a></li>
    </ul>
  </div>
</div>

     <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Coming Soon
                    <small>The shows which will be coming soon to Jordanstown Theatre</small>
                </h1>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-7 col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>

            <div class="col-lg-5 col-md-5">
                <h3>The Case of the Frightened Lady</h3>
                <h4>Bruiser Theatre Company</h4>
                <p><i>"This is a typical Bruiser production – spot on physical theatre, interspersed with song, well-timed slapstick...It’s clever, fast and frenetic."</i></p>
                <br>
                <p>Culture Northern Ireland</p>
            </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-lg-7 col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>

            <div class="col-lg-5 col-md-5">
                <h3>Show Two</h3>
                <h4>Production Group</h4>
                <p>Show description</p>
            </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-lg-7 col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>

            <div class="col-lg-5 col-md-5">
                <h3>Show Three</h3>
                <h4>Production Group</h4>
                <p>Show description</p>
            </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-lg-7 col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>

            <div class="col-lg-5 col-md-5">
                <h3>Show Four</h3>
                <h4>Production Group</h4>
                <p>Show description</p>
            </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-lg-7 col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>

            <div class="col-lg-5 col-md-5">
                <h3>Show Five</h3>
                <h4>Production Group</h4>
                <p>Show description</p>
            </div>

        </div>

        <hr>

        <div class="row text-center">

            <div class="col-lg-12">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>

        </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
