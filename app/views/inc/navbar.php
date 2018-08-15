<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
        <a class="navbar-brand" href="#"><h2><?php echo SITENAME;?></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navham" aria-controls="navbarsExampleDefault" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navham" style="">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item btn  ">
              <a class="nav-link " href="<?php echo URLROOT;?>/pages/index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item btn  ">
              <a class="nav-link" href="<?php echo URLROOT;?>/pages/about">about</a>
            </li>      
          </ul>

          <ul class="navbar-nav ml-auto ">
            <li class="nav-item btn  ">
              <a class="nav-link" href="<?php echo URLROOT;?>/user/register">register</a>
            </li>
            <li class="nav-item btn ">
              <a class="nav-link" href="<?php echo URLROOT;?>/user/login">login</a>
            </li>
        </ul>      
    </div>
</nav> 