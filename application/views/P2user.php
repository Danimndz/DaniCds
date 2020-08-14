<?php $this->view('P2header'); ?>
<div class="panel-header panel-header-sm">
  </div>
      <div class="content">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Insert Admin Profile</h5>
              </div>
            <div class="card-body">
              <form method='post' id='user_form'>
                  <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" id='uname' name="uname_">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                    </div>
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control"  placeholder="password" id='password' name="password_">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="first Name" id='fname' name="fname_">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" id='lname' name="lname_">
                      </div>
                    </div>
                  </div>
                    <div class="col-md-4 px-22">
                      <div class="form-group">
                        <input type="submit" name='insert' value ='Insert' class="btn btn-success" id ='btnAdd' >
                      </div>
                    </div>
                    </div>
                </form>
          </div>
          <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class='text-primary'>
              <th>Username</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Password</th>
              <th>Edit</th>
              <th>Delete</th>
            </thead>
            <tbody>
              <?php foreach($p2_users as $user){ ?>
                <tr>
                    <td><?=$user['Username']?></td>
                    <td><?=$user['First_name']?></td>
                    <td><?=$user['Last_name']?></td>
                    <td><?=$user['password']?></td>
                    <td>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editU_modal" onclick="editU(<?=$user['id_users']?>)">Edit</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-danger" onclick="deleteU(<?=$user['id_users']?>)">Delete</button>
                    </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
        </div>
          <!-- //////////////////////////////////////////////////EMPLOYEES//////////////////////////////////////////////////////////////// -->
            <div class="card">
              <div class="card-header">
                <h5 class="title">Insert Employee Profile</h5>
              </div>
            <div class="card-body">
              <form method='post' id='Emp_form'>
                  <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" id='unameE' name="uname_E">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                    </div>
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control"  placeholder="password" id='passwordE' name="password_E">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="first Name" id='fnameE' name="fname_E">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" id='lnameE' name="lname_E">
                      </div>
                    </div>
                  </div>
                    <div class="col-md-4 px-22">
                      <div class="form-group">
                        <input type="submit" name='insert' value ='Insert' class="btn btn-success" id ='btnAddE' >
                      </div>
                    </div>
                    </div>
                </form>
              </div>
              <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class='text-primary'>
              <th>Username</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Password</th>
              <th>Edit</th>
              <th>Delete</th>
            </thead>
            <tbody>
              <?php foreach($employees as $emp){ ?>
                <tr>
                    <td><?=$emp['Username']?></td>
                    <td><?=$emp['First_name']?></td>
                    <td><?=$emp['Last_name']?></td>
                    <td><?=$emp['password']?></td>
                    <td>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editE_modal" onclick="editE(<?=$emp['id_employ']?>)">Edit</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-danger" onclick="deleteE(<?=$emp['id_employ']?>)">Delete</button>
                    </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
        </div>

  <!-- //////////////////////////////////////////////////MODALADMIN//////////////////////////////////////////////////////////////// -->
  <div id='editU_modal' class="modal fade" >
  <div class ="modal-dialog">
      <form method ='post' id="editU_form">
      <div class="modal-content">
          <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class='modal-body'>
          <div class="form-group">
              <label for="Name"> Username </label>
              <input type="name" class="form-control" id="uname_edit" placeholder="Enter Username" name="username_edit">
          </div>
          <input type="hidden" id='id_userEdit' name='id_userEdit'>
          <div class="form-group">
              <label for="Name"> First Name </label>
              <input type="name" class="form-control" id="fname_edit" placeholder="First Name" name="fname_edit">
          </div>

            <div class="form-group">
              <label for="name">Last Name</label>
              <input type="name" class="form-control" id="lname_edit" placeholder="Enter Last Name" name="lname_edit">
            </div>

            <div class="form-group">
              <label for="price">password</label>
              <input type="price" class="form-control" id="password_edit" placeholder="Enter password" name="password_edit">
            </div>
          </div class='modal-footer'>
            <input type="submit" name='editBtn' value = 'Edit'class="btn btn-success" id ='btnEdit' >
          <div>
          </div>
      </div>
   </form>
   </div>
   </div>


   <div id='editE_modal' class="modal fade" >
  <div class ="modal-dialog">
      <form method ='post' id="editE_form">
      <div class="modal-content">
          <div class="modal-header">
                <h4 class="modal-title">Edit Employee</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class='modal-body'>
          <div class="form-group">
              <label for="Name"> Username </label>
              <input type="name" class="form-control" id="unameE_edit" placeholder="Enter Username" name="usernameE_edit">
          </div>
          <input type="hidden" id='id_empEdit' name='id_empEdit'>
          <div class="form-group">
              <label for="Name"> First Name </label>
              <input type="name" class="form-control" id="fnameE_edit" placeholder="First Name" name="fnameE_edit">
          </div>

            <div class="form-group">
              <label for="name">Last Name</label>
              <input type="name" class="form-control" id="lnameE_edit" placeholder="Enter Last Name" name="lnameE_edit">
            </div>

            <div class="form-group">
              <label for="price">password</label>
              <input type="price" class="form-control" id="passwordE_edit" placeholder="Enter password" name="passwordE_edit">
            </div>
          </div class='modal-footer'>
            <input type="submit" name='editBtnE' value = 'Edit'class="btn btn-success" id ='btnEditE' >
          <div>
          </div>
      </div>
   </form>
   </div>
   </div>
   
  <!--   Core JS Files   -->
  <script src="<?php echo base_url()?>/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Chart JS -->
  <script src="<?php echo base_url()?>/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url()?>/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url()?>/assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url()?>/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function(){
      var alphaNum = /^[0-9a-zA-Z]+$/;
      var letters = /^[A-Za-z]+$/;
      $('#btnAdd').click(function(){
        if(document.getElementById("uname").value !='' && document.getElementById("password").value !='' && document.getElementById("fname").value !=''&& document.getElementById("lname").value !='')
        {  
          if(document.getElementById("uname").value.match(alphaNum) && document.getElementById("password").value.match(alphaNum) && document.getElementById("fname").value.match(letters) && document.getElementById("lname").value.match(letters))
          {
                $.ajax({
                  url: "<?php echo base_url()?>P2UserController/insertUser",
                  method: 'post',
                  data: $('#user_form').serialize(),
                  success: function(response)
                  {
                    location.reload();
                  }
                });
          }
          else alert('Username and password alphanumeric, name and last name only letters')
        }
        else alert('All fields are required')
        
      });

      $('#btnEdit').click(function(){
        if(document.getElementById("uname_edit").value !='' && document.getElementById("password_edit").value !='' && document.getElementById("fname_edit").value !=''&& document.getElementById("lname_edit").value !='')
        {
          if(document.getElementById("uname_edit").value.match(alphaNum) && document.getElementById("password_edit").value.match(alphaNum) && document.getElementById("fname_edit").value.match(letters) && document.getElementById("lname_edit").value.match(letters))
          {
              $.ajax({
                  url: "<?php echo base_url()?>P2UserController/edit_User",
                  method:'post',
                  data: $("#editU_form").serialize(),
                  success: function(response)
                  { 
                    location.reload();
                  }

                });
          }
          else alert('Username and password alphanumeric, name and last name only letters')
          }
          else alert('All fields are required');
          
      });

      $('#btnAddE').click(function(){
        if(document.getElementById("unameE").value !='' && document.getElementById("passwordE").value !='' && document.getElementById("fnameE").value !=''&& document.getElementById("lnameE").value !='')
        {  
          if(document.getElementById("unameE").value.match(alphaNum) && document.getElementById("passwordE").value.match(alphaNum) && document.getElementById("fnameE").value.match(letters) && document.getElementById("lnameE").value.match(letters))
          {
                $.ajax({
                  url: "<?php echo base_url()?>P2UserController/insertEmp",
                  method: 'post',
                  data: $('#Emp_form').serialize(),
                  success: function(response)
                  {
                    location.reload();
                  }
                });
          }
          else alert('Username and password alphanumeric, name and last name only letters')
        }
        else alert('All fields are required')
        
      });


      $('#btnEditE').click(function(){
        if(document.getElementById("unameE_edit").value !='' && document.getElementById("passwordE_edit").value !='' && document.getElementById("fnameE_edit").value !=''&& document.getElementById("lnameE_edit").value !='')
        {
          if(document.getElementById("unameE_edit").value.match(alphaNum) && document.getElementById("passwordE_edit").value.match(alphaNum) && document.getElementById("fnameE_edit").value.match(letters) && document.getElementById("lnameE_edit").value.match(letters))
          {
              $.ajax({
                  url: "<?php echo base_url()?>P2UserController/edit_Emp",
                  method:'post',
                  data: $("#editE_form").serialize(),
                  success: function(response)
                  { 
                    location.reload();
                  }

                });
          }
        }
          else alert('All fields are required');
          
      });

    });

    function deleteU(id)
    {
        $.ajax({
          url: "<?php echo base_url()?>P2UserController/delete_User",
          method: 'post',
          data:{id: id},
          success: function(response)
          {
            location.reload();
          }
        });
    }

    function editU(id)
    {
      $.ajax({
        url: "<?php echo base_url()?>/P2UserController/select_User",
        method: 'post',
        data:{id: id},
        success: function(response)
        { 
          var data = JSON.parse(response);
          $('#id_userEdit').val(data[0]['id_users']);
          $('#uname_edit').val(data[0]['Username']);
          $('#fname_edit').val(data[0]['First_name']);
          $('#lname_edit').val(data[0]['Last_name']);
          $('#password_edit').val(data[0]['password']);
        }
      });
    }
      function deleteE(id)
    {
        $.ajax({
          url: "<?php echo base_url()?>P2UserController/delete_Emp",
          method: 'post',
          data:{id: id},
          success: function(response)
          {
            location.reload();
          }
        });
    }

    function editE(id)
    {
      $.ajax({
        url: "<?php echo base_url()?>/P2UserController/select_Emp",
        method: 'post',
        data:{id: id},
        success: function(response)
        { 
          var data = JSON.parse(response);
          $('#id_empEdit').val(data[0]['id_employ']);
          $('#unameE_edit').val(data[0]['Username']);
          $('#fnameE_edit').val(data[0]['First_name']);
          $('#lnameE_edit').val(data[0]['Last_name']);
          $('#passwordE_edit').val(data[0]['password']);
        }
      });
    }
  </script>
</body>
</html>