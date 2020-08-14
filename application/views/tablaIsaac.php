<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png" />
	<title>Calificar</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/stars.css"/>
    <link href="<?php echo base_url()?>assets/css/bootstrap.minwzd.css" rel="stylesheet" />
	<link href="<?php echo base_url()?>assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url()?>assets/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url()?>assets/css/themify-icons.css" rel="stylesheet">
	</head>
	<body>
    <table class="table table-striped">
            <thead class ='text-primary'>
                <tr>
                    <th>Id</th>
                    <th>Total</th>
                    <th>Nombre Cliente</th>
                    <th>Calificar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos as $dato ){?>
                <tr>
                    <td><?=$dato['id']?></td>
                    <td><?=$dato['total']?></td>
                    <td><?=$dato['Nombre']?></td>
                    <?php
                        $CI =& get_instance(); 
                        if($CI->checkIf($dato['id'])==0){
                    ?>
                    <td> <button id="btnCalif" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#grade_modal" onclick="getId(<?=$dato['id']?>)">Calificar</button> </td>
                        <?php } ?>
                        <?php if($CI->checkIf($dato['id'])==1){ ?>
                            <td> <button id="btnVerCalif" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#ver_modal" onclick = "getId2(<?=$dato['id']?>)">Ver Calificacion</button> </td>
                        <?php } ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>


        <div class="container">
            <div id="ver_modal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title">Calificacion</h2>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body" id="mostrar_calificacion">
                            
                        </div>
                    </div>
                </div>
                
            </div>

        <!--   Big container   -->
<div class = 'modal fade' id="grade_modal" role='dialog'>
    <div class ='modaldialog'>
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="azure" id="wizard">
		                <form method="post" id="grade_Form">
		                <!--        You can switch " data-color="green" "  with one of the next bright colors: "blue", "azure", "orange", "red"       -->

		                    	<div class="wizard-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h3 class="wizard-title">Calificar</h3>
		                    	</div>
								<div class="wizard-navigation">
									<div class="progress-with-circle">
									    <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;"></div>
									</div>
									<ul id="head_">
			                        </ul>
								</div>
		                        <div class="tab-content" id="content">
		                        </div>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
	                                    <input type='submit' id="submitear" name="submit" class='btn btn-finish btn-fill btn-danger btn-wd' />
									</div>

	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
	                                <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> row
        </div>  big container
        </div>
        </div>





	<!--   Core JS Files   -->
	<script src="<?php echo base_url()?>assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.minwzd.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="<?php echo base_url()?>assets/js/demo.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="<?php echo base_url()?>assets/js/jquery.validate.min.js" type="text/javascript"></script>

    <script>
            $(document).ready(function(){
                $('#submitear').click(function(){
                    $.ajax({
                        url: "<?php echo base_url()?>RatingController/add_grade",
                        method: 'post',
                        data: $('#grade_Form').serialize(),
                        success: function(response)
                        {
                        }
                    });
                });
            });

        function getId(id)
        {
            $('#head_').empty();
            $('#content').empty();
            $.ajax({
                url: "<?php echo base_url()?>TablaProductos/show_Product",
                method: 'post',
                data:{id:id},
                success: function(response)
                {   
                    var data = $.parseJSON(response);
                    var li = '';
                    var html = '';
                    var aux = '';
                    var num = 1;
                    var id_pedido = id;
                    $.each(data,function(i,item){
                        li+='<li> <a href="#'+item.nombre+'" data-toggle="tab" class="active"> <div class="icon-circle">  <i class="ti-map"></i> </div> ' + item.nombre+'</a></li>';
                        html+='<div class="tab-pane" id="'+item.nombre+'"> <div class="row"> <table class="table table-striped">';
                        html+='<tbody> <tr> <td>Calidad</td> <td id="num_"></td> <td class="rating">';
                        html+='<input type="radio" name="star_calidad_'+num+'" id="star_calidad_5'+num+'" value="5"><label for="star_calidad_5'+num+'">5</label>';
                        html+='<input type="radio" name="star_calidad_'+num+'" id="star_calidad_4'+num+'" value="4"><label for="star_calidad_4'+num+'">4</label>';
                        html+=' <input type="radio" name="star_calidad_'+num+'" id="star_calidad_3'+num+'" value="3"><label for="star_calidad_3'+num+'">3</label>';
                        html+=' <input type="radio" name="star_calidad_'+num+'" id="star_calidad_2'+num+'" value="2"><label for="star_calidad_2'+num+'">2</label>';
                        html+=' <input type="radio" name="star_calidad_'+num+'" id="star_calidad_1'+num+'" value="1"><label for="star_calidad_1'+num+'">1</label></td> </tr>';


                        html+='<tr> <td>Servicio</td> <td id="num_"></td><td class="rating">';
                        html+='<input type="radio" name="star_servicio_'+num+'" id="star_servicio_5'+num+'" value="5"><label for="star_servicio_5'+num+'">5</label>';
                        html+='<input type="radio" name="star_servicio_'+num+'" id="star_servicio_4'+num+'" value="4"><label for="star_servicio_4'+num+'">4</label>';
                        html+=' <input type="radio" name="star_servicio_'+num+'" id="star_servicio_3'+num+'" value="3"><label for="star_servicio_3'+num+'">3</label>';
                        html+=' <input type="radio" name="star_servicio_'+num+'" id="star_servicio_2'+num+'" value="2"><label for="star_servicio_2'+num+'">2</label>';
                        html+=' <input type="radio" name="star_servicio_'+num+'" id="star_servicio_1'+num+'" value="1"><label for="star_servicio_1'+num+'">1</label></td> </tr>';

                        html+='<td>Tiempo de entrega</td>  <td id="num_"></td> <td class="rating">';
                        html+='<input type="radio" name="star_entrega_'+num+'" id="star_entrega_5'+num+'" value="5"><label for="star_entrega_5'+num+'">5</label>';
                        html+='<input type="radio" name="star_entrega_'+num+'" id="star_entrega_4'+num+'" value="4"><label for="star_entrega_4'+num+'">4</label>';
                        html+='<input type="radio" name="star_entrega_'+num+'" id="star_entrega_3'+num+'" value="3"><label for="star_entrega_3'+num+'">3</label>';
                        html+='<input type="radio" name="star_entrega_'+num+'" id="star_entrega_2'+num+'" value="2"><label for="star_entrega_2'+num+'">2</label>';
                        html+='<input type="hidden" id="num" name="num" value ="'+num+'"> <input type="hidden" name="hidden_Producto'+num+'" value ="'+item.id+'"> <input type="radio" name="star_entrega_'+num+'" id="star_entrega_1'+num+'" value="1"><label for="star_entrega_1'+num+'">1</label></td> </tr>';
                        html+='</td> </tr> </tbody> </table> </div> </div>';
                        aux ='<input type="hidden" id="num" name="hidden_cliente" value ="'+item.Id_User+'">';
                        num++;
                     });

                     li+='<li> <a href="#comentarios" data-toggle="tab"> <div class="icon-circle"> <i class="ti-comments"></i> </div> comentarios </a></li>';
                     html+='<div class="tab-pane" id="comentarios">  <div class="row"> <h5 class="info-text"> Comentarios General </h5> <div class="col-sm-6 col-sm-offset-1"> <div class="form-group"> <textarea class="form-control" name="comentarios" placeholder="" rows="9"></textarea> </div> </div> <div class="col-sm-4"> <div class="form-group"> <label>Ejemplo:</label> <p class="description">"El producto fue de muy buena calidad, al igual que el servicio"</p> </div> </div> </div> </div>';
                     html+='<input type="hidden" id="num" name="hidden_pedido" value ="'+id_pedido+'">';
                     
                     $('#head_').append(li);
                     $('#content').append(html);
                     $('#content').append(aux);
                }
            });
        }

    function getId2(id)
    {   
        $('#mostrar_calificacion').empty();
        $.ajax({
            url: "<?php echo base_url()?>TablaProductos/display_grades",
            method: 'post',
            data:{id:id},
            success: function(response){
                data = $.parseJSON(response);
                htmll = "";
                comentarios="";
                grade1 = "";
                grade2 = "";
                grade3 = "";
                $.each(data,function(i,item){
                    if(item.calificacion_1 == 1){
                        grade1 = "<img src='<?php echo base_url()?>assets/img/1.png' alt='c1'>";
                    } if(item.calificacion_1 == 2){
                        grade1 = "<img src='<?php echo base_url()?>assets/img/2.png' alt='c1'>";
                    } if(item.calificacion_1==3){
                        grade1 = "<img src='<?php echo base_url()?>assets/img/3.png' alt='c1'>";
                    } if(item.calificacion_1==4){
                        grade1 = "<img src='<?php echo base_url()?>assets/img/4.png' alt='c1'>";
                    } if(item.calificacion_1==5){
                        grade1 = "<img src='<?php echo base_url()?>assets/img/5.png' alt='c1'>";
                    }

                    if(item.calificacion_2 == 1){
                        grade2 = "<img src='<?php echo base_url()?>assets/img/1.png' alt='c1'>";
                    } if(item.calificacion_2 == 2){
                        grade2 = "<img src='<?php echo base_url()?>assets/img/2.png' alt='c1'>";
                    } if(item.calificacion_2==3){
                        grade2 = "<img src='<?php echo base_url()?>assets/img/3.png' alt='c1'>";
                    } if(item.calificacion_2==4){
                        grade2 = "<img src='<?php echo base_url()?>assets/img/4.png' alt='c1'>";
                    } if(item.calificacion_2==5){
                        grade2 = "<img src='<?php echo base_url()?>assets/img/5.png' alt='c1'>";
                    }

                    if(item.calificacion_3 == 1){
                        grade3 = "<img src='<?php echo base_url()?>assets/img/1.png' alt='c1'>";
                    } if(item.calificacion_3 == 2){
                        grade3 = "<img src='<?php echo base_url()?>assets/img/2.png' alt='c1'>";
                    } if(item.calificacion_3==3){
                        grade3 = "<img src='<?php echo base_url()?>assets/img/3.png' alt='c1'>";
                    } if(item.calificacion_3==4){
                        grade3 = "<img src='<?php echo base_url()?>assets/img/4.png' alt='c1'>";
                    } if(item.calificacion_3==5){
                        grade3 = "<img src='<?php echo base_url()?>assets/img/5.png' alt='c1'>";
                    }

                    htmll+='<div><h4>'+item.nombre+'</h1> <table class="table" id="tablaD"> <thead class ="text-primary">';
                    htmll+= '<tbody> <tr> <td>Calidad</td> <td>'+grade1+'</td> </tr>';
                    htmll+= '<tr> <td>Servicio</td> <td>'+grade2+'</td> </tr>';
                    htmll+= '<tr> <td>Tiempo de entrega</td> <td>'+grade3+'</td> </tr> </tbody> </table> </div>';
                    comentarios='<h5>Comentarios</h5> <p>'+item.comentarios+'</p>';
                    
                    

                });
                $('#mostrar_calificacion').append(htmll);
                $('#mostrar_calificacion').append(comentarios);

            }
        });
    }
    </script>
</body>
</html>
