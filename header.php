<?php
session_start();
?>


 <div class="header-inner">
                    <div class="container">
                        <!--navigation social links-->
                        <div class="nav-social">
                            <?php if($_SESSION['user'])
                            {?>
                              <ul>
                                 <li><a href="login.php"   class="act-link"><strong><?php if($_SESSION['user']) echo ($_SESSION['user']);?></strong></a></li>
                                  <li><a href=""   class="act-link"><strong>|</strong></a></li>
                                    <li><a href="sessiondestroy.php"   class="act-link"><strong>Logout</strong></a></li>
                            </ul>
                            <?php }?>

                               <?php if(!($_SESSION['user']))
                            {?>

                                 <ul>
                                 <li><a href="login.php"   class="act-link"><strong>Login</strong></a></li>
                                   <li><a href=""   class="act-link"><strong>|</strong></a></li>
                                    <li><a href="login.php"   class="act-link"><strong>Register</strong></a></li>
                            </ul>
                           <?php } ?>

                        </div>
                        <!--logo
                        <div class="logo-holder">
                            <a href="index.php">
                            <img src="Admin/pro/logo3.png" class="respimg logo-vis" alt="">
                            <img src="images/logo3.png" class="respimg logo-notvis" alt="">
                          </a>
                        </div>-->
                        <!--Navigation -->
                        <div class="nav-holder">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Home</a> </li>
                                      <li><a href="about.php">About</a></li>

                                    <li><a href="gallery1.php">Menu</a></li>
                                    <!-- <li><a href="gallery.php">Gallery</a></li>-->
                                    <li><a href="reservation.php">Reservation</a></li>

                                    <li><a href="contact.php">Contact</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
