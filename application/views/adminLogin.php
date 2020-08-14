<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body class="bg">
    <form class="text-center border border-light p-5" id='logForm' method = "post" action = "<?php echo base_url();?>P2adminLogin/checkUser">
        <p class="h4 mb-4 text-light" >Sign in</p>
        <input type="text" id="username" name ='username'class="form-control mb-4" placeholder="Username">
        <span class = "text-danger"><?php echo form_error('username') ?></span>
        <input type="password" id="pass" name='pass'class="form-control mb-4" placeholder="Password">
        <span class = "text-danger"><?php echo form_error('pass') ?></span>
        <button class="btn btn-info btn-block my-4" type="submit" name='log' id='logBtn'>Sign in</button>
        <span class = "text-danger"><?php echo $this->session->flashdata('error');?></span>

    </form>
</body>
<script>
</script>
</html>