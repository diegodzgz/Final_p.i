
<html >

 <?php   require ('header.php'); ?>


<body>

    <?php include ('top.php'); ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">


            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="../img/playera1.jpg" alt="" width="800px" height="300px">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../img/playera5.jpg" alt="" width="800" height="300">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="../img/playera9.jpg" alt="" width="460" height="345">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="..\img\zapato2.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">Zapato Adidas</a>
                                </h4>
                                <p>Zapato de futbol para terrenos duros</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="..\img\zapato5.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="#">jordans</a>
                                </h4>
                                <p>Modelo 2016</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="..\img\zapato10.jpg" alt=""  width="320px" height="350px">
                            <div class="caption">
                                <h4 class="pull-right">$74.99</h4>
                                <h4><a href="#">Third Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="..\img\zapato10.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$84.99</h4>
                                <h4><a href="#">Fourth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="..\img\playera11.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$94.99</h4>
                                <h4><a href="#">Fifth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>

                        </div>

                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="..\img\playera3.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$94.99</h4>
                                <h4><a href="#">Fifth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>

                        </div>



                </div>

            </div>

        </div>

    </div>
  </div>
    <!-- /.container -->

        <hr>

        <!-- Footer -->
        <?php include ('bot.php'); ?>



</body>

</html>
