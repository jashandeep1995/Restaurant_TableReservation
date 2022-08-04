<?php
session_start();

?>
<div class="header-inner">
                    <div class="container">
                        <!--navigation social links-->
                        <div class="nav-social">
                            <ul>
                                <?php if($_SESSION['user'])
                            {?>
                              <ul>
                                 <li><strong><?php  echo ($_SESSION['user']);?></strong></li>
                                   <li><strong>|</strong></li>
                                    <li><a href="sessiondestroy.php"   class="act-link"><strong>Logout</strong></a></li>
                            </ul>
                            <?php }?>
                            
                             <?php if(!($_SESSION['user']))
                            {?>
                               
                                 <ul>
                                 <li><a href="login.php?k1=<?php echo $h1?>"   class="act-link"><strong>Login</strong></a></li>
                                   <li><a href="login.php"   class="act-link"><strong>|</strong></a></li>
                                    <li><a href="login.php?jump=cart"   class="act-link"><strong>Register</strong></a></li>
                            </ul>
                           <?php } ?>
                            </ul>
                        </div>
                        <!--logo-->             
                        <div class="logo-holder">
                            <a href="index.php">
                            <img src="images/logo.png" class="respimg logo-vis" alt="">
                            <img src="images/logo2.png" class="respimg logo-notvis" alt="">
                            </a>
                        </div>
                        <!--Navigation -->
                        <div class="subnav">
                            <a href="cart.php"><i class="fa fa-shopping-cart"></i>( <span>2</span> )</a>
                        </div>
                        <div class="nav-holder">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</a> </li>
                                      <li><a href="shop.php">About</a></li>                                      
   
                                    <li><a href="gallery1.php">Menu</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="reservation.php">Reservation</a></li>
                                   
                                    <li><a href="contact.php">Contact</a></li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>