
<?php 
         include "conn.php"; 
      
         session_start();

         if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
            {
                 header("Location: index.html");
                  exit;
            }


            
?>



<!DOCTYPE html>
<html lang="en">
  <head>

  

  
  
  
    <link rel="icon" href="img/serede.png">
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>ba97</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="dashboard.php">Serede</a><br>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> <br>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
        <!--Notification Menu-->
       
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" style="width:38px; height:40px;" src="img/serede.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['nome'];?> </p>
          <p class="app-sidebar__user-designation"><?php echo $_SESSION['area'];?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>
        
        
        
        
        
            
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p></p>
        </div>
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Busca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
                    <label for="email">Número BA:</label>
                <form class="form-inline" role="form"   method="POST" action="deleta.php">
                    <input type="text" class="form-control"  name="fix"   required >

            
            
            
                    <button type="submit" name="submit3" class="btn btn-primary mb-2">Buscar</button>
                </form>




                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  
                </div>
              </div>
            </div>
      </div>

        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Procurar FIX
</button>
      
      <!-- 
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>TESTE</h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>TESTE</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>TESTE</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>TESTE</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
      -->

                  <?php 
                      if (isset($_POST ['submit3']) )
                { 
                  $fix = $_POST['fix'];;

                  $sql = mysql_query ("select  * from base  where ba = '$fix'" );
                }  


                $row = mysql_num_rows($sql);

 
 

                if (mysql_num_rows($sql) > 0)

                {

                  while ($dado = mysql_fetch_assoc($sql))
                  {
                   
                   $localidade =  $dado ["localidade"];
                   $localidade =  $dado ["localidade"];
                   $nome_tec =  $dado ["nome_tec"];
                   
                   
                   
                  }

                }
                
                                  
                  ?>
      <div class="row " >
        <div class="col-md-12">
        
          <div class="tile">
          <h3 class="tile-title">Deleta Base</h3>
          


         
          <div class="row" style="margin-bottom: 2rem;">
          <div class="col-lg-6">
            
            <div class="bs-component">
              <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Atualiza</a></li>
                
                
                
                  <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                  </div>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="home">
                     <form method="post" enctype="multipart/form-data" action="enviar_delete.php">
                                <div class="form-group"><br><br>
                                    <label for="exampleInputEmail1">BA</label>
                                    <input class="form-control"  required id="exampleInputEmail1" name="fix"  value="<?php echo  $fix; ?>" readonly type="text" aria-describedby="emailHelp" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Localidade</label>
                                    <input class="form-control"  required id="exampleInputEmail1"   value="<?php echo  $localidade; ?>" readonly type="text" aria-describedby="emailHelp" >
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nome técnico</label>
                                    <input class="form-control"  required id="exampleInputEmail1" value="<?php echo  $nome_tec; ?>" readonly type="text" aria-describedby="emailHelp" >
                                </div>

                                
                                
                                
</div>
</div><br><br>
<?php if (mysql_num_rows($sql) > 0)

{?>
<button class="btn btn-primary"  name="submit" type="submit">Enviar</button>
 <?php } ?>
                      
 
    </form>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
    $('#sl').click(function(){
        $('#tl').loadingBtn();
        $('#tb').loadingBtn({ text : "Signing In"});
    });
    
    $('#el').click(function(){
        $('#tl').loadingBtnComplete();
        $('#tb').loadingBtnComplete({ html : "Sign In"});
    });
    
    $('#data_baixa').datepicker({
        format: "yyyy-m-d",
        autoclose: true,
        todayHighlight: true
    });

    $('#data_final').datepicker({
        format: "yyyy-m-d",
        autoclose: true,
        todayHighlight: true
    });
    
    $('#demoSelect').select2();
    </script>
    <!-- Google analytics script-->
    
    
                    
                </div>
                
            </div>
          </div>
          
   


    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
      $('#sl').click(function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#data_baixa').datepicker({
      	format: "yyyy-m-d",
      	autoclose: true,
      	todayHighlight: true
      });

      $('#data_final').datepicker({
      	format: "yyyy-m-d",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#demoSelect').select2();
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  
</div>










<script type="text/javascript">
    if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
    </script>


</div>







     















 <br><br><button class="btn btn-primary" type="submit">Editar</button><br><br><br><br>


</form>
                </div>
                <div class="tab-pane fade" id="profile">
                <form class="form" role="form" name="seachform" method="post" action="enviar_del.php " enctype="multipart/form-data" >

   

<div class="form-group">

   <label for="email">PATRIMONIO:</label>
  <input type="text" class="form-control" id="pt" name="pt"   required >
</div>
 








 <br><br><button type="submit" value="Enviar" class="btn btn-warning" id="enviar" required > <strong>Deletar</strong> </button><br><br><br><br>



 

    







 










</form>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-lg-6">
</div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    
    
      

    

    
  </body>
</html>