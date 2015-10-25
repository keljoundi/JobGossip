<?php
/**
 * Created by PhpStorm.
 * User: keljo
 * Date: 10/24/2015
 * Time: 10:31 PM
 */
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php">Job Gossip</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo isset($_SESSION['JobGossipLogin']) ? $_SESSION['user'] :  "Guest";  ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <?php
                            if( isset( $_SESSION['JobGossipLogin'] ) ) {
                                echo "<li><a href=\"./resources/php/logout.php\">Logout</a></li>";
                            }else{
                                echo "<li><a href=\"./login.php\">Login</a></li >";
                            }
                        ?>
                    </ul>
                </li>


            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

