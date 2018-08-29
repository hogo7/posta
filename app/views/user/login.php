<?php require_once APPROOT .'/views/inc/header.php'//checked?>
<div class="row">
 <div class="col-md-6  mx-auto">
    <div class="card card-body bg-light mt-5">
    <?php flash("register_success"); 
          flash("login_err"); ?>
    <h2 class=""> Login </h2>    
       
    <form action="<?php echo URLROOT."/user/login" ?>" method="post">
            <div class="form_group mt-3"><!--email-->
                <label for="Email">Email <sup>*</sup></label>    
                <input type="text" name="email" class="form-control form-control-lg
                        <?php echo (!empty($data["email_err"])?"is-invalid":"");?>">
                <span class="invalid-feedback"><?php echo $data['email_err'];?></span>
            </div>
            <div class="form_group mt-3"><!--password-->
                <label for="Password">Password <sup>*</sup></label>    
                <input type="password" name="password" class="form-control form-control-lg
                        <?php echo (!empty($data["password_err"])?"is-invalid":"");?>">
                <span class="invalid-feedback"><?php echo $data['password_err'];?></span>
            </div>
           
        <div class="row">
            <div class="col">
                <input type="submit" value="login"  class="btn btn-success btn-block mt-3 ">
            </div>
            <div class="col">
                <a href="<?php echo URLROOT;?>/user/register" class="btn btn-light mt-3 btn-block">create a account</a>
            
            </div>
        
        </div>
        
        </div>
    </div>
</div>

<?php require_once APPROOT .'/views/inc/footer.php'?>