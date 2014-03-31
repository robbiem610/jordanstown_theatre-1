<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title_for_layout ?></title>

<?php echo $this->Html->css('1-col-portfolio');
    echo $this->Html->css('bootstrap');
    echo $this->Html->script('jquery');
    echo $this->Html->script('bootstrap'); ?>
</head>

<body>

  <?php echo $this->fetch('content'); ?>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Jordanstown Theatre 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
