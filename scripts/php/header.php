<header>

    <?php 
    
    ?>

    <nav>
        <li><a href="../pages/">Home</a></li>
        <?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
            echo '<li><a href="../pages/profile.php">Profile</a></li>';
            echo '';
        } else {
            echo '<li><a href="../pages/loginPage.php">Login</a></li>';
        }
        ?>
    </nav>

</header>