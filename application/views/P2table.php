<?php $this->view('P2header'); ?>

<div class="panel-header panel-header-sm"></div>
<div id='albumModal' class="modal fade" >
  <div class ="modal-dialog">
    <form method ='post' id="album_form" enctype="multipart/form-data">
      <div class="modal-content">
          <div class="modal-header">
                <h4 class="modal-title">Albums</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class='modal-body'>
          <div class="form-group">
              <label for="Name"> Album Name:</label>
              <input type="name" class="form-control" id="Aname" placeholder="Enter Name" name="Aname">
          </div>

            <div class="form-group">
              <label for="name">Artist</label>
              <input type="name" class="form-control" id="artist" placeholder="Enter Artist" name="artist">
            </div>

            <div class="form-group">
              <label for="price">Price</label>
              <input type="number" class="form-control" id="precio" placeholder="Enter price value" name="price">
            </div>

            <div class="form-group">
              <label for="quantity">Quantity</label>
              <input type="number" class="form-control" id="cantidad" placeholder="Enter Quantity" name="quantity">
            </div>
            
            <div class="form-group">
              <label for="file">Cover</label>
              <input type="file" id="portada" name="portada">
            </div>
            
          </div class='modal-footer'>
            <input type="submit" name='insert' value ='Insert' class="btn btn-success" id ='btnAdd' >
          <div>
          </div>
      </div>
   </form>
  </div>
</div>
<!-- ////////////////////////////////////////////////////EDIT MODAL////////////////////////////////////////////// -->
<div id='albumEditModal' class="modal fade" >
  <div class ="modal-dialog">
    <form method ='post' id="album_formEdit" enctype="multipart/form-data">
      <div class="modal-content">
          <div class="modal-header">
                <h4 class="modal-title">Albums</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class='modal-body'>
          <div class="form-group">
              <label for="Name"> Album Name:</label>
              <input type="name" class="form-control" id="AnameEdit" placeholder="Enter Name" name="AnameEdit">
          </div>
          <input type="hidden" id='id_discosEdit' name='id_discosEdit'>
            <div class="form-group">
              <label for="name">Artist</label>
              <input type="name" class="form-control" id="artistEdit" placeholder="Enter Artist" name="artistEdit">
            </div>

            <div class="form-group">
              <label for="price">Price</label>
              <input type="number" class="form-control" id="precioEdit" placeholder="Enter price value" name="precioEdit">
            </div>

            <div class="form-group">
              <label for="quantity">Quantity</label>
              <input type="number" class="form-control" id="cantidadEdit" placeholder="Enter Quantity" name="cantidadEdit">
            </div>

            <div class="form-group">
              <label for="file">Cover</label>
              <input type="file" id="portada" name="portada">
            </div>

          </div class='modal-footer'>
            <input type="submit" name='insert' value ='Edit' class="btn btn-success" id ='btnEdit' >
          <div>
          </div>
      </div>
   </form>
  </div>
</div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"> Inventory <button id="show" type="button" class="btn btn-primary" data-toggle="modal" data-target="#albumModal" > Add</button></h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class='table'>
                    <thead class = 'text-primary'>
                      <th>Artist</th>
                      <th>Name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Delete</th>
                      <th>Edit</th>
                    </thead>
                    <tbody id="tbody">
                      <?php foreach($discos as $disco){ ?>
                        <tr>
                          <td><?=$disco['Artista']?></td>
                          <td><?=$disco['Album']?></td>
                          <td><?=$disco['Cantidad']?></td>
                          <td><?=$disco['Precio']?></td>
                          <td>
                            <button type="button" class="btn btn-danger" onclick="deleteD(<?=$disco['id_discos']?>)">Delete</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success"data-toggle="modal" data-target="#albumEditModal" onclick=editAlbum(<?=$disco['id_discos']?>)>Edit</button>
                          </td>
                        </tr>
                        <?php if($disco['Cantidad']<=3){?>
                          
                          <div class="alert alert-warning" role="alert"> Your low on inventory, supply: <?=$disco['Album']?> 
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          </div>
                          <?php } ?>
                        
                      <?php } ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
          </div>
  <!--   Core JS Files   -->
  <script src="<?=base_url('assets/js/core/jquery.min.js')?>"></script>
  <script src="<?=base_url('assets/js/core/popper.min.js')?>"></script>
  <script src="<?=base_url('assets/js/core/bootstrap.min.js')?>"></script>
  <script src="<?=base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>

  <script src="<?=base_url('assets/js/plugins/chartjs.min.js')?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?=base_url('assets/js/plugins/bootstrap-notify.js')?>"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url('assets/js/now-ui-dashboard.min.js?v=1.3.0')?>" type="text/javascript"></script>
  <script src="<?=base_url('assets/demo/demo.js')?>"></script>
  <script>
    $(document).ready(function(){
      var alphaNum = /^[0-9a-zA-Z ]+$/;
      $('#btnAdd').click(function(){ 
        if(document.getElementById("Aname").value !='' && document.getElementById("artist").value !='' &&document.getElementById("precio").value !='' && document.getElementById("cantidad").value !='')
        { 
          if(document.getElementById("Aname").value.match(alphaNum) && document.getElementById("artist").value.match(alphaNum) && document.getElementById("precio").value.match(alphaNum) && document.getElementById("cantidad").value.match(alphaNum))
          {
            var formData = new FormData($('#album_form')[0]);
            formData.append('portada',$('#portada')[0].files[0]);
            $.ajax({
              url: "<?php echo base_url()?>P2TableController/P2insert",
              method: 'post',
              data: formData,
              processData: false,
              contentType: false,
              success: function(response)
              {
                location.reload();
              }
            });
          }
          else alert('Numbers and letters only');
        }
        else
          alert('All fields are required');
      });

      $('#btnEdit').click(function(){
        if(document.getElementById("AnameEdit").value !='' && document.getElementById("artistEdit").value !='' &&document.getElementById("precioEdit").value !='' && document.getElementById("cantidadEdit").value !='')
        { 
          if(document.getElementById("AnameEdit").value.match(alphaNum) && document.getElementById("artistEdit").value.match(alphaNum) && document.getElementById("precioEdit").value.match(alphaNum) && document.getElementById("cantidadEdit").value.match(alphaNum))
          {
            var formData = new FormData($('#album_formEdit')[0]);
            formData.append('portada',$('#portada')[0].files[0]);
            $.ajax({
              url: '<?php echo base_url()?>/P2TableController/editUser',
              method: 'post',
              data: formData,
              processData: false,
              contentType: false,
              success: function(response)
              {
                location.reload(); 
              }
            });
          }
          else alert('Numbers and letters only');
        } 
        else alert('All fields are required');
            
      });
    });
            
    function deleteD(id)
    {
      $.ajax({
        url: "<?php echo base_url()?>P2TableController/P2delete",
        method: 'post',
        data: { id: id},
        success: function(response)
        {
          location.reload();
        }
      });
    }

    function editAlbum(id)
    {
      $.ajax({
        url:"<?php echo base_url()?>/P2TableController/selectA",
        method: 'post',
        data: {id:id},
        success: function(response)
        {
          var data = JSON.parse(response)
          $('#id_discosEdit').val(data['id_discos']);
          $('#AnameEdit').val(data['Album']);
          $('#artistEdit').val(data['Artista']);
          $('#precioEdit').val(data['Precio']);
          $('#cantidadEdit').val(data['Cantidad']);
        }
      });
    }

  </script>
</body>
</html>