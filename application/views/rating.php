<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Rating</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/stars.css"/>
    <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>/assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url()?>/assets/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url()?>/assets/css/themify-icons.css" rel="stylesheet">
	</head>

	<body>          
                    <!--      Wizard container        -->
                <div class="container">
                    <div class = 'modal fade' id="grade_modal" role='dialog'>
                        <div class ='modaldialog'>
                            <div class='modal-body'>
                                <div class="wizard-container">
                                    <div class="card wizard-card" data-color="azure" id="wizard">
                                    <form action="" method="">
                                    <!--        You can switch " data-color="green" "  with one of the next bright colors: "blue", "azure", "orange", "red"       -->
                                            <div class="wizard-header">
                                                <h3 class="wizard-title">Productos</h3>
                                            </div>
                                            <div class="wizard-navigation">
                                                <div class="progress-with-circle">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;"></div>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <a href="#productos" data-toggle="tab">
                                                            <div class="icon-circle">
                                                            </div>
                                                            Productos
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#type" data-toggle="tab">
                                                            <div class="icon-circle">
                                                            </div>
                                                            hola
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#facilities" data-toggle="tab">
                                                            <div class="icon-circle">
                                                            </div>
                                                            Facilities
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#description" data-toggle="tab">
                                                            <div class="icon-circle">
                                                                <i class=""></i>
                                                            </div>
                                                            C4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#comentarios" data-toggle="tab">
                                                            <div class="icon-circle">
                                                                <i class=""></i>
                                                            </div>
                                                            COMENTARIOS
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane" id="productos">
                                                    <div class="row">
                                                        <div>
                                                        <H1>C1</H1>
                                                        </div>
                                                        
                                                        <div class = "rating">
                                                            <input type="button" name="star1" id ="star1" data-value = '1'><label for="star1"></label>
                                                            <input type="button" name="star2" id ="star2" data-value = '2'><label for="star2"></label>
                                                            <input type="button" name="star3" id ="star3" data-value = '3'><label for="star3"></label>
                                                            <input type="button" name="star4" id ="star4" data-value = '4'><label for="star4"></label>
                                                            <input type="button" name="star5" id ="star5" data-value = '5'><label for="star5"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="type">
                                                    <div class="row">
                                                        <h1>C2</h1>
                                                        <div class = "rating">
                                                            <input type="button" name="star1" id ="star1" data-value = '1'><label for="star1"></label>
                                                            <input type="button" name="star2" id ="star2" data-value = '2'><label for="star2"></label>
                                                            <input type="button" name="star3" id ="star3" data-value = '3'><label for="star3"></label>
                                                            <input type="button" name="star4" id ="star4" data-value = '4'><label for="star4"></label>
                                                            <input type="button" name="star5" id ="star5" data-value = '5'><label for="star5"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="facilities">
                                                    <div class="row">
                                                        <h1>C3</h1>
                                                        <div class = "rating">
                                                            <input type="button" name="star1" id ="star1" data-value = '1'><label for="star1"></label>
                                                            <input type="button" name="star2" id ="star2" data-value = '2'><label for="star2"></label>
                                                            <input type="button" name="star3" id ="star3" data-value = '3'><label for="star3"></label>
                                                            <input type="button" name="star4" id ="star4" data-value = '4'><label for="star4"></label>
                                                            <input type="button" name="star5" id ="star5" data-value = '5'><label for="star5"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="description">
                                                    <div class="row">
                                                        <h1>C4</h1>
                                                        <div class = "rating">
                                                            <input type="button" name="star1" id ="star1" data-value = '1'><label for="star1"></label>
                                                            <input type="button" name="star2" id ="star2" data-value = '2'><label for="star2"></label>
                                                            <input type="button" name="star3" id ="star3" data-value = '3'><label for="star3"></label>
                                                            <input type="button" name="star4" id ="star4" data-value = '4'><label for="star4"></label>
                                                            <input type="button" name="star5" id ="star5" data-value = '5'><label for="star5"></label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="comentarios">
                                                    <div class="row">
                                                        <h1>COMENTARIOS</h1>
                                                        <div class="form-group">
                                                                <label>Place description</label>
                                                                <textarea class="form-control" placeholder="" rows="9"></textarea>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <div class="wizard-footer">
                                                <div class="pull-right">
                                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
                                                    <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
                                                </div>

                                                <div class="pull-left">
                                                    <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                                    </div> <!-- wizard container -->
                                    </div>
                                    </div>
                                    </div>
                    </div>
		        </div>
            </div> <!-- row -->
            <button id="btnAdd" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#grade_modal">Calificar</button>


	<!--   Core JS Files   -->
	<script src="<?php echo base_url()?>/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>/assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="<?php echo base_url()?>/assets/js/demo.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>/assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="<?php echo base_url()?>/assets/js/jquery.validate.min.js" type="text/javascript"></script>


    <script>
        var grade = 0;
        $(document).ready(function()
        {
            $('#star1').click(function()
            {
                grade = 5;
                // alert(grade);
                $.ajax({
                    url: "<?php echo base_url()?>RatingController/add_grade",
                    method: 'POST',
                    data:{grade:grade},
                    success: function(response)
                    {
                    
                    }
                });
            });

            $('#star2').click(function()
            {
                grade = 4;
                // alert(grade);
                $.ajax({
                    url: "<?php echo base_url()?>RatingController/add_grade",
                    method: 'POST',
                    data:{grade:grade},
                    success: function(response)
                    {
                    
                    }
                });
            });

            $('#star3').click(function()
            {
                grade = 3;
                // alert(grade);
                $.ajax({
                    url: "<?php echo base_url()?>RatingController/add_grade",
                    method: 'POST',
                    data:{grade:grade},
                    success: function(response)
                    {
                    
                    }
                });
            });

            $('#star4').click(function()
            {
                grade = 2;
                // alert(grade);
                $.ajax({
                    url: "<?php echo base_url()?>RatingController/add_grade",
                    method: 'POST',
                    data:{grade:grade},
                    success: function(response)
                    {
                    
                    }
                });
            });

            $('#star5').click(function()
            {
                grade = 1;
                // alert(grade);
                $.ajax({
                    url: "<?php echo base_url()?>RatingController/add_grade",
                    method: 'POST',
                    data:{grade:grade},
                    success: function(response)
                    {
                    
                    }
                });
            });
        });
    </script>
    </body>
    </html>
