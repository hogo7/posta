<?php require_once APPROOT .'/views/inc/header.php'//checked?>
<div class="row">
    <div class="card card-body bg-light mt-5">
        <div class="col-md-6">
        <h3 class="">Posts</h3 > 
        </div>
    
        <div class="col-md-6 ml-auto ">
           <a class="btn btn-primery float-right" type="button" href="<?php echo URLROOT; ?>/posts/add"  role="button">
                
                <i class="fa fa-pen"></i>add post </a> 
    
         </div>
    </div>
</div>

<?php foreach($data['posts'] as $post) : ?>
    <div class="card card-body mb-3 mt-3">
        <h4 class="card-title">
        <?php echo $post->post_title; ?></h4>
        <div class="bg-light p-2 mb-3">
        written by <?php echo $post->U_name; ?> on <?php echo $post->post_time; ?></div>
    <p class="card-text"><?php echo $post->post_body;?></p>
    <a href="<?php echo URLROOT ; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-dark">more</a>    
    </div>

<?php endforeach; ?>
<?php require_once APPROOT .'/views/inc/footer.php'?>