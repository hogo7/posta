<?php require_once APPROOT .'/views/inc/header.php';//checked?>

<a href="<?php echo URLROOT;?>/posts" class="btn btn-light"><i class="fa fa-backward">  Back</i> </a>
<br>
<br>
<h1 class=""> <?php echo $data['post']->post_title; ?> </h1>
<div class="bg-secondary text-white p-2 mb-3">
    written By <?php echo $data['user']->U_name;  ?> at <?php echo $data['post']->post_time;  ?> 
</div>
<p class="card card-body" ><?php echo $data['post']->post_body ?></p>

<?php if ($data['post']->U_id==$_SESSION['U_id']) : ?>
<a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->post_id; ?> "  class="btn btn-dark">  
<i class="fa fa-edit">  </i> Edit</a>

<form action='<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->post_id; ?>' method='post' class="del-btn" >

<input type="submit" value="Delete " class="btn btn-danger"  >
</form>
<?php endif ;?>
<?php require_once APPROOT .'/views/inc/footer.php'; ?>