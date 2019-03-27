<?php include 'layout.php' ?>

<?php startblock('head') ?>



<?php endblock() ?>

<?php startblock('scripts') ?>


<?php endblock() ?>

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
                <a href="">
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
                <a href="">
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
                <a href="">
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
                <a href="">
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
                <img src="/images/shoes05.jpg" alt="">
                <a href="">
                    <div class="text">
                        <h2 class="title"><?php echo SHOES[4]['title'] ?></h2>
                        <h3>From <?php echo SHOES[4]['price'] ?>$</h3>
                    </div>
                </a>
            </div>
            <div class="vertical-line">
                <svg  xmlns="http://www.w3.org/2000/svg">
                    <line x1="2px" y1="10%" x2="2px" y2="90%" />
                </svg>
            </div>
            <div class="product">
                <img src="/images/shoes06.jpg" alt="">
                <a href="">
                    <div class="text">
                        <h2 class="title"><?php echo SHOES[5]['title'] ?></h2>
                        <h3>From <?php echo SHOES[5]['price'] ?>$</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<footer>

</footer>

<?php endblock() ?>
