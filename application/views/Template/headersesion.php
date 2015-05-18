<!DOCTYPE html><head>
<title><?=$titulo;?></title> 
  
<meta name="robots" content="no-cache" />
<meta name="description" content="Social I" />
<meta name="keywords" content="emprendimiento" />
<meta name="robots" content="no-cache" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<head>

          
      <?=link_tag('application/css/mainfex.css');?>      
      <?=link_tag('application/css/animate.css');?> 
      <?=link_tag('application/css/bootstrap/css/bootstrap.css');?>   
      <?=link_tag('application/css/bootstrap/css/bootstrap.min.css');?>   
      <?=link_tag('application/css/bootstrap/css/bootstrap-theme.css');?> 


  

      <?=link_tag('application/js/js/iCheck/skins/minimal/minimal.css');?>
      <?=link_tag('application/js/js/iCheck/skins/square/square.css');?>
      <?=link_tag('application/js/js/iCheck/skins/square/red.css');?>
      <?=link_tag('application/js/js/iCheck/skins/square/blue.css');?>
      








<!--dashboard calendar-->
    <?=link_tag('application/css/css/style-responsive.css');?>
      <?=link_tag('application/css/css/style.css');?>  
  
  <?=link_tag('application/css/css/clndr.css');?>  
  

  <!--Morris Chart CSS -->
  <link rel="stylesheet" href="<?base_url('application/js/js/morris-chart/morris.css')?>">

  <!--common-->

      

<link href="<?=base_url('application/css/style.css')?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?=base_url('application/css/css/style-responsive.css')?>">
<?=link_tag('application/css/extra.css');?>

 <script src="<?=base_url('application/js/js/jquery-1.10.2.min.js')?>"></script>
        <script src="<?=base_url('application/js/js/jquery-ui-1.9.2.custom.min.js')?>"></script>  
        <script src="<?=base_url('application/js/js/jquery-migrate-1.2.1.min.js')?>"></script>
        <script src="<?=base_url('application/js/js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('application/js/js/modernizr.min.js')?>"></script>
        <script src="<?=base_url('application/js/js/jquery.nicescroll.js')?>"></script>
        
        <script type="text/javascript"  src="<?=base_url('application/js/main.js')?>"></script> 

        <script src="<?=base_url('application/js/js/iCheck/jquery.icheck.js')?>"></script>
        <script src="<?=base_url('application/js/js/icheck-init.js')?>"></script>
        <script src="<?=base_url('application/js/js/scripts.js')?>"></script>

<script type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url('application/js/js/advanced-datatable/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" language="javascript" src="<?=base_url('application/js/js/advanced-datatable/js/jquery.dataTables.js')?>"></script>
<script type="text/javascript" src="<?=base_url('application/js/js/data-tables/DT_bootstrap.js')?>"></script>
<!--dynamic table initialization -->
<script src="<?=base_url('application/js/js/dynamic_table_init.js')?>"></script>

<!--common scripts for all pages-->
<script src="<?=base_url('application/js/scripts.js')?>"></script>


<style type="text/css">
.main-content{
    background: white;
}
.sticky-header{
    background: #0388A6;
}
.moresize {
    color: white;
}
.subpagetitle{
    color: #D4DDF8;
}.title_f{
    font-size: 2em;
}
</style>
    <body class="sticky-header">
    
<section>
<div class="left-side sticky-left-side" id='leftcontenido'>
        
        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>





            <!--sidebar nav start-->            

  
            <!-- visible to small devices only -->
         

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                
                <li class="title_f"><a href="<?=base_url()?>">Template<i class="fa fa-home">
                    
                    </a>
                </li>
                
                <?php echo $menu;  ?>

           

            </ul>
            <!--sidebar nav end-->
  
           
            </div>
    </div>
   



    <!-- left side end-->
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"> 
                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
             </i></a>
            <!--toggle button end-->

            
            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="badge">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 8 pending task</h5>
                            <ul class="dropdown-list user-list">
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Database update</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                                <span class="">40%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Pending Task</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 5 Mails </h5>
                            <ul class="dropdown-list normal-list">
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="images/photos/user5.png" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="new"><a href="">Read All Mails</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge"> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">Notifications</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #31 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Notifications</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="images/photos/user-avatar.png" alt="" />
                            <?=$nombre;?>

                
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="<?=base_url('index.php/recursocontroller/informacioncuenta')?>"><i class="fa fa-user"></i> Mi cuenta </a></li>
                            
                            <li><a href="#"><i class="fa fa-cog"></i> Configuración</a></li>
                            <li><a href="<?=base_url('index.php/experiencia')?>"><i class="fa fa-cog"></i> Ellos confían nosotros</a></li>
                            <li><a href="<?=base_url('index.php/reportecontrolador')?>"><i class="fa fa-cog"></i> Sugerencias y reportes del sistema </a></li>
                            <li><a href="<?=base_url('index.php/sessioncontroller/logout')?>"><i class="fa fa-sign-out"></i> Salir</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>






     


        <div class="page-header">
          <h1> <small><?=$titulo;?></small></h1>
        </div>

