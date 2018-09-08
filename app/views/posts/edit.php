<?php require_once APPROOT .'/views/inc/header.php'//checked?>

 <a href="<?php echo URLROOT;?>/posts" class="btn btn-light"><i class="fa fa-backward">  Back</i> </a>
    <div class="card card-body bg-light mt-5">
    <?php flash("post_message"); 
          // flash(""); ?>
    <h2 class=""> Edit post <i class="fa fa-edit primery"></i>  </h2>    
       <p> Edit your post with this form</p>
    <form action="<?php echo URLROOT."/posts/edit/".$data['id'] ?>" method="post">
       <div class="form_group"><!--title-->
         <label for="title">Title</sup></label>    
       <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data["title_err"]))?"is-invalid":"";?> "
       value="<?php echo $data["title"];?>">
       <span class="invalid-feedback"><?php echo $data['title_err'];?></span>
      </div>
         <div class="form_group mt-3"><!--title-->
         <label for="Body">Body <sup>*</sup></label>    
<textarea  name="body" class="form-control form-control-md <?php echo (!empty($data["body_err"]))?"is-invalid":"";?>"><?php echo $data["body"];?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_err'];?></span>       
           </div>
           <div class="form_group mt-3">
           <input type="submit"  class="form-control form-control-lg btn btn-dark btn-block" value="submit">
           </div>
          </form>
         </div>
   
      


<?php require_once APPROOT .'/views/inc/footer.php'?>