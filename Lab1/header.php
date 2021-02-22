<header>
    <div id="siteheader">
        <img src="img/whiteLogo.png" alt="Logo"/>

        <?php
            $current_page = basename($_SERVER['PHP_SELF']);
            
            // ASK WHY THIS DOESN'T WORK - A GUY ON THE INTERNET TOLD ME IT SHOULD
            // $current_page = $_SERVER['REQUEST_URI'];

            //PHP can't reach into the config file and read the basename($_SERVER['PHP_SELF])? 
            //Globally defined variables ? 
            //How do they work
        ?>

        <div class="mainnav">
        
            <a class="<?php echo ($current_page == "index.php" || $current_page == "") ? "active" : "" ?>" href="index.php">Home</a>
            <a class="<?php echo ($current_page == "about.php" || $current_page == "") ? "active" : "" ?>" href="about.php">About Us</a>
            <a class="<?php echo ($current_page == "gallery.php" || $current_page == "") ? "active" : "" ?>" href="login.php">Gallery</a>
            <a class="<?php echo ($current_page == "browse.php" || $current_page == "") ? "active" : "" ?>" href="browse.php">Browse</a>
            <a class="<?php echo ($current_page == "mybooks.php" || $current_page == "") ? "active" : "" ?>" href="mybooks.php">My Books</a>
            <a class="<?php echo ($current_page == "contact.php" || $current_page == "") ? "active" : "" ?>" href="contact.php">Contact</a>
            <a class="<?php echo ($current_page == "login.php" || $current_page == "") ? "active" : "" ?>" href="login.php">My Account</a>
        </div>
    </div>
</header>