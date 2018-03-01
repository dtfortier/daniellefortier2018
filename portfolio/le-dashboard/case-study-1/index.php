<?php require_once("../../../resources/templates/header-case-study.php"); ?>

<body>
    
    <?php require_once("../../../resources/templates/port-nav.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="portfolio page-header">Quick Stats
                   
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="../../../resources/img/portfolio/le-dash/QS-final.png" alt="">
            </div>

            <div class="col-md-4">
                <h3>Project Description</h3>
                <p>The quick stats are the most prominent statistics that users see for each application in their dashboard. Each stat type has a different icon. This was a new concept the team came up with that was brought into the new design. We wanted to find a way to show users their most important stats at the most viewed part of the page. Each quick stat acts as a clickable tab that shows the data statistics for each category.</p>
                
            </div>

        </div>
        <!-- /.row -->
        
             <!-- Process -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Process</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#process1" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive portfolio-item" src="../../../resources/img/portfolio/le-dash/QS-process1.png" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#process2" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive portfolio-item" src="../../../resources/img/portfolio/le-dash/QS-process2.png" alt="">
                </a>
            </div>

           <!-- <div class="col-sm-3 col-xs-6">
                <a href="case-study-3/" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="case-study-4/" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div> -->

        </div>
        <!-- /.row 1-->
        
 
        <!-- Process Modals -->
    <div class="portfolio-modal modal fade" id="process1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>First Concept Mockup</h2>
                            <hr class="star-primary">
                            <img src="../../../resources/img/portfolio/le-dash/QS-process1.png" class="img-responsive img-centered" alt="">
                            <p>The first idea was to create a row of tabs seperating stat types into categories, per application. This idea was eventually incorporated into the final design, only with more information visible in the tabbed categories, as shown in the process #2 image.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="process2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Final Concept</h2>
                            <hr class="star-primary">
                            <img src="../../../resources/img/portfolio/le-dash/QS-process2.png" class="img-responsive img-centered" alt="">
                            <p>In this mockup, live stats were placed into each statistic tab to showcase an overall number that represents the category for the time picked in the date picker. Each statistic has a particular icon. The tab hovers and is focused blue when selected. </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
     <hr>

<?php require_once("../../../resources/templates/footer.php"); ?>