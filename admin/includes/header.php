<body>
<div class="navbar navbar-default navbar-static-top-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-category"><img class="logo" src="" alt="Logo"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li <?php //returnActive('categories/index.php'); ?> ><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/TeamFlorence-master/admin/categories/index.php">Categories</a></li>
                  <li <?php //returnActive('categories/index.php'); ?> ><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/TeamFlorence-master/admin/news/index.php">News</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Add New <b class="caret"></b></a>
                <ul class="dropdown-menu">
                        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/TeamFlorence-master/admin/news/add.php">Add News</a></li>
                        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/TeamFlorence-master/admin/albums/add.php">Add Albums</a></li>  
                        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/TeamFlorence-master/admin/categories/add.php">Add Categories</a></li>   
                </ul>                        
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/TeamFlorence-master/index.php">Home</a></li>
                    <li><a href=http://<?php echo $_SERVER['HTTP_HOST'];?>/TeamFlorence-master/user/logout.php>Log out</a></li>
                </ul>
            </div>
        </div>
    </div>    

    <div class="container">