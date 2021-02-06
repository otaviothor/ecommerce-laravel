<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-commerce  </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header>
            <div class="top-nav container">
                <div class="logo">CSS Grid</div>
                <ul>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>
            </div> <!-- end top-nav -->

            <div class="hero container">
                <div class="hero-copy">
                    <h1>CSS grid example</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui, recusandae animi.</p>
                    <div class="hero-buttons">
                        <a href="#" class="button button-white">Button 1</a>
                        <a href="#" class="button button-white">Button 2</a>
                    </div>
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    <img src="img/macbook-pro-laravel.png" alt="Hero image">
                </div> <!-- end hero-image -->
            </div> <!-- end hero -->
        </header> <!-- end header -->

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">CSS grid example</h1>

                <p class="section-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse vel, explicabo architecto numquam reiciendis, expedita, excepturi nihil quibusdam id inventore ea. Fugit error doloribus voluptas obcaecati quam explicabo beatae nobis.</p>

                <div class="text-center button-container">
                    <a href="#" class="button">Featured</a>
                    <a href="#" class="button">On Sale</a>
                </div>

                <div class="products text-center">
                    @for ($i = 0; $i < 8; $i++)
                        <div class="product">
                            <a href="#">
                                <img src="img/macbook-pro.png" alt="Product">
                            </a>
                            <a href="#">
                                <span class="product-name">macbook-pro {{ $i }}</span>
                            </a>
                            <div class="product-price">$2499.99</div>
                        </div>
                    @endfor
                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="#" class="button">View more products</a>
                </div>
            </div><!-- end container -->
        </div> <!-- end featured-section -->

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">
                    From our blog
                </h1>

                <p class="section-description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa facilis accusantium in exercitationem optio vitae! Repellendus maxime animi officiis asperiores, nihil rerum illum eos eius beatae voluptatem doloribus aliquam neque.
                </p>

                <div class="blog-posts">
                    <div class="blog-post">
                        <a href="#"><img src="img/blog1.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog post title 1</h2></a>
                        <div class="blod-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, magnam atque!</div>
                    </div>
                    <div class="blog-post">
                        <a href="#"><img src="img/blog2.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog post title 1</h2></a>
                        <div class="blod-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, magnam atque!</div>
                    </div>
                    <div class="blog-post">
                        <a href="#"><img src="img/blog3.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog post title 1</h2></a>
                        <div class="blod-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, magnam atque!</div>
                    </div>
                </div><!-- end blog-posts -->
            </div> <!-- end container -->
        </div> <!-- end blog-section -->

        <footer>
            <div class="footer-content container">
                <div class="made-with">
                    Made with <i class="fa fa-heart"></i> by Otávio Silva
                </div>
                <ul>
                    <li>Follow me</li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div> <!-- end footer-content -->
        </footer>
    </body>
</html>
