<header class="header">
    <div class="header-content">

        <h1 class="logo"><a href="/">Letha</a></h1>

        <nav class="nav">
            <a href="/"><h2 class="nav-element <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>">Home</h2></a>
            <a href="/products.php"><h2 class="nav-element <?php if ($CURRENT_PAGE == "products") {?>active<?php }?>">Products</h2></a>
            <a href="/about.php"><h2 class="nav-element <?php if ($CURRENT_PAGE == "about") {?>active<?php }?>">About Us</h2></a>
            <a href="/contact.php"> <h2 class="nav-element <?php if ($CURRENT_PAGE == "contact") {?>active<?php }?>">Contact</h2></a>
            <a href="/faq.php"><h2 class="nav-element <?php if ($CURRENT_PAGE == "faq") {?>active<?php }?>">FAQ</h2></a>
        </nav>

        <div class="search">
            <img id="shopping-cart" src="/images/shopping_cart.svg" alt="">
            <input id="search" type="text" placeholder="Search">
            <img id="search-glass" src="/images/search.svg" alt="">
        </div>
    </div>

</header>
