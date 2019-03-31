<?php include 'layout.php' ?>

<?php startblock('content') ?>

<div class="mini-container" style="margin-top: 75px">
    <div class="content">
        <h2>Recent Arrivals</h2>
    </div>
</div>

<section class="big-container">
    <div class="content-level">
        <div class="product-container">
            <div class="product">
                <img src="/images/shoes01.jpg" alt="">
                <a href="/products.php#oxford">
                    <div class="text">
                        <h2 class="title"><?php echo SHOES[0]['title'] ?></h2>
                        <h3>From <?php echo SHOES[0]['price'] ?>$</h3>
                    </div>
                </a>
            </div>
            <div class="vertical-line">
                <svg  xmlns="http://www.w3.org/2000/svg">
                    <line x1="2px" y1="10%" x2="2px" y2="90%" />
                </svg>
            </div>
            <div class="product">
                <img src="/images/shoes02.jpg" alt="">
                <a href="/products.php#brouge">
                    <div class="text">
                        <h2 class="title"><?php echo SHOES[1]['title'] ?></h2>
                        <h3>From <?php echo SHOES[1]['price'] ?>$</h3>
                    </div>
                </a>
            </div>
            <div class="vertical-line">
                <svg  xmlns="http://www.w3.org/2000/svg">
                    <line x1="2px" y1="10%" x2="2px" y2="90%" />
                </svg>
            </div>
            <div class="product">
                <img src="/images/shoes03.jpg" alt="">
                <a href="/products.php#oxford">
                    <div class="text">
                        <h2 class="title"><?php echo SHOES[2]['title'] ?></h2>
                        <h3>From <?php echo SHOES[2]['price'] ?>$</h3>
                    </div>
                </a>
            </div>
        </div>

        <div class="horizontal-line">
            <svg  xmlns="http://www.w3.org/2000/svg">
                <line x1="10%" y1="32px" x2="90%" y2="32px" />
            </svg>
            <div class="spacer"></div>
            <svg  xmlns="http://www.w3.org/2000/svg">
                <line x1="10%" y1="32px" x2="90%" y2="32px" />
            </svg>
            <div class="spacer"></div>
            <svg  xmlns="http://www.w3.org/2000/svg">
                <line x1="10%" y1="32px" x2="90%" y2="32px" />
            </svg>
        </div>

        <div class="product-container">
            <div class="product">
                <img src="/images/shoes04.jpg" alt="">
                <a href="/products.php#derbies">
                    <div class="text">
                        <h2 class="title"><?php echo SHOES[3]['title'] ?></h2>
                        <h3>From <?php echo SHOES[3]['price'] ?>$</h3>
                    </div>
                </a>
            </div>
            <div class="vertical-line">
                <svg  xmlns="http://www.w3.org/2000/svg">
                    <line x1="2px" y1="10%" x2="2px" y2="90%" />
                </svg>
            </div>
            <div class="product">
                <img src="/images/wallet.jpg" alt="">
                <a href="/products.php#accessories">
                    <div class="text">
                        <h2 class="title">Wallet</h2>
                        <h3>From 49$</h3>
                    </div>
                </a>
            </div>
            <div class="vertical-line">
                <svg  xmlns="http://www.w3.org/2000/svg">
                    <line x1="2px" y1="10%" x2="2px" y2="90%" />
                </svg>
            </div>
            <div class="product">
                <img src="/images/belt.jpg" alt="">
                <a href="/products.php#accessories">
                    <div class="text">
                        <h2 class="title">Welsh Belt</h2>
                        <h3>From 39$</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="big-container margin-top-200">
    <div class="content-level">
        <div class="two-row history-index">
            <div class="overlay-image">
                <img src="/images/history.jpg" alt="">
                <div class="center-text">
                    <a href="/about.php#history"><h2>History</h2></a>
                </div>
            </div>
            <div class="info">
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="horizontal-line dual">
            <svg  xmlns="http://www.w3.org/2000/svg">
                <line x1="10%" y1="32px" x2="90%" y2="32px" />
            </svg>
            <svg  xmlns="http://www.w3.org/2000/svg">
                <line x1="10%" y1="32px" x2="90%" y2="32px" />
            </svg>
        </div>
        <div class="two-row history-index">
            <div class="info">
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="overlay-image">
                <img src="/images/craftsmanship.jpg" alt="">
                <div class="center-text">
                    <a href="/about.php#craftsmanship"><h2>Craftsmanship</h2></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="big-container margin-top-200">
    <div class="content-level persona">
        <div class="two-row">
            <div class="persona-container">
                <img class="persona-img" src="/images/persona.jpg" alt="">
            </div>

            <div class="vertical-line">
                <svg  xmlns="http://www.w3.org/2000/svg">
                    <line x1="2px" y1="10%" x2="2px" y2="90%" />
                </svg>
            </div>

            <div class="info">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="position">Founder/CEO - Letha</p>
                <p class="position">George Bush</p>
            </div>
        </div>
    </div>


</section>

<?php endblock() ?>
