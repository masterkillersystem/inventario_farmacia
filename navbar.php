
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- La marca y el conmutador se agrupan para una mejor pantalla móvil -->
            <div id="saludo" class="navbar-header">

                <button  type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <img src="assets/img/farmacia.jpg" alt="">
                   
                <img name="tiempo">  
            </div>
            <!-- Top Menu Items -->
<a class="navbar-brand" href="#"><h4 id="txtsaludo" style="background: ;"></h4></a>



            <ul class="nav navbar-right top-nav" >
                <li class="dropdown">
                    
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  Administrador <b class="caret"></b></a>
                    <ul class="dropdown-menu" >
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>

    <!-- Elementos del menú de la barra lateral: se contraen al menú de navegación sensible en pantallas pequeñas-->
                    <?php if($_SESSION['logged_id'] == '2') { ?>
                    
                    <?php } ?>
            
 <?php if($_SESSION['logged_id'] == '1') { ?>

            <div  class="collapse navbar-collapse navbar-ex1-collapse" style="background: #392c7c;" >
                 
           
                <ul class="nav navbar-nav side-nav" style="background: #0a1c2b;">
                    
                  

                    
                    <li class="<?php if (isset($home_menu)){echo "active";}?>">
                        <a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></i> Inicio</a>
                    </li>

                    <li class="<?php if (isset($item_menu)){echo "active";}?>">
                        <a href="item.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Lista de Medicamentos</a>
                    </li>
                    <li class="<?php if (isset($products_menu)){echo "active";}?>">
                        <a href="product.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Inventario de Medicamentos</a>
                    </li>
                    <li class="<?php if (isset($stock_menu)){echo "active";}?>">
                        <a href="stock.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Perfil del Inventario</a>
                    </li>
                     <li class="<?php if (isset($expired_menu)){echo "active";}?>">
                        <a href="expired.php"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Medicamentos vencidos</a>
                    </li>
                    <li class="<?php if (isset($sales_menu)){echo "active";}?>">
                        <a href="sales.php"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Ventas y Ganacias</a>
                    </li>
                  
                </ul>
 <?php } ?>
            </div>

            <!-- /.navbar-collapse -->
        </nav>