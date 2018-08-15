<?php require_once APPROOT .'/views/inc/header.php'//checked?>
<div class="row">
 <div class="col-md-6  mx-auto">
    <div class="card card-body bg-light mt-5">
    <h2 class="mx-auto"> regiester now :) </h2>    
        
        <form action="<?php echo URLROOT."/user/register" ?>" method="post">
            <div class="form_group mt-3"><!--name-->
                <label for="name">Name <sup >*</sup></label>    
                <input type="text" name="name" class="form-control form-control-lg
                        <?php echo (!empty($data["name_err"])?"is-invalid":"");?>"
                        value="<?php  echo (!empty($data["name"])?$data["name"]:"");?>">
                <span class="invalid-feedback"><?php echo $data['name_err'];?></span>
            </div>
            <div class="form_group mt-3"><!--email-->
                <label for="Email">Email <sup>*</sup></label>    
                <input type="text" name="email" class="form-control form-control-lg
                        <?php echo (!empty($data["email_err"])?"is-invalid":"");?>"
                        value="<?php  echo (!empty($data["email"])?$data["email"]:"");?>">
                <span class="invalid-feedback"><?php echo $data['email_err'];?></span>
            </div>
            <div class="form_group mt-3"><!--password-->
                <label for="Password">Password <sup>*</sup></label>    
                <input type="password" name="password" class="form-control form-control-lg
                        <?php echo (!empty($data["password_err"])?"is-invalid":"");?>"
                        value="<?php  echo (!empty($data["password"])?$data["password"]:"");?>">
                <span class="invalid-feedback"><?php echo $data['password_err'];?></span>
            </div>
            <div class="form_group mt-3"><!--password confrim -->
                <label for="password-confrim">Password Confrim <sup>*</sup></label>    
                <input type="password" name="confrim_password" class="form-control form-control-lg
                        <?php echo (!empty($data["confrim_password_err"])?"is-invalid":"");?>"
                        value="<?php  echo (!empty($data["confrim_password"])?$data["confrim_password"]:"");?>">
                <span class="invalid-feedback"><?php echo $data['confrim_password_err'];?></span>
            </div>
        <div class="row">
            <div class="col mt-3">
                <input type="submit" value="Register"  class="btn btn-success btn-block">
            </div>
            <div class="col mt-3">
                <a href="<?php echo URLROOT;?>/user/login" class="btn btn-light  btn-block ">have account ? login</a>
            
            </div>  
         </div>  
</form>
        </div>
    </div>
</div>

<?php require_once APPROOT .'/views/inc/footer.php'?>