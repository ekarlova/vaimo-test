<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vaimo Frontend Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet"
          href="assets/css/styles.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!--[if IE 10]><!-->
    <link rel="stylesheet"
          href="assets/css/ie.css">
    <!--<![endif]-->
</head>
<body>
<div class="container">
    <header id="page-header">
        <h1 class="logo"><a href="{{ url('/') }}" title="Vaimo Store"></a></h1>
        <div id="cart">
           <div class="cart-button">
               <span class="amount"></span>
               items in your cart
               <strong class="sum">&euro;</strong>
           </div>
            <div class="cart-items">
                <ul></ul>
                <button class="btn">Go to checkout</button>
            </div>
        </div>
        <nav id="main-nav">
            <a id="mobile-nav"></a>
            <div class="nav-container">
                <ul class="nav">
                    <li><a href="">Women</a></li>
                    <li><a href="">Men</a></li>
                    <li><a href="">Junior</a></li>
                    <li><a href="">Accessories</a></li>
                    <li><a href="">Collections</a>
                        <ul class="sub-nav">
                            <li><a href="">2014</a>
                                <ul class="sub-sub-nav">
                                    <li><a href="">Summer</a></li>
                                    <li><a href="">Autumn</a></li>
                                    <li><a href="">Winter</a></li>
                                    <li><a href="">Spring</a></li>
                                </ul>
                            </li>
                            <li><a href="">2013</a>
                                <ul class="sub-sub-nav">
                                    <li><a href="">Summer</a></li>
                                    <li><a href="">Autumn</a></li>
                                    <li><a href="">Winter</a></li>
                                    <li><a href="">Spring</a></li>
                                </ul>
                            </li>
                            <li><a href="">2012</a>
                                <ul class="sub-sub-nav">
                                    <li><a href="">Summer</a></li>
                                    <li><a href="">Autumn</a></li>
                                    <li><a href="">Winter</a></li>
                                    <li><a href="">Spring</a></li>
                                </ul>
                            </li>
                            <li><a href="">2011</a>
                                <ul class="sub-sub-nav">
                                    <li><a href="">Summer</a></li>
                                    <li><a href="">Autumn</a></li>
                                    <li><a href="">Winter</a></li>
                                    <li><a href="">Spring</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="sale" href="">Sale</a></li>
                </ul>
                <div class="account"><a href="">My Account</a></div>
            </div>
        </nav>
    </header>
    <main>
        <section class="about">
            <div class="about-image">
                <h5>Get ready for the autumn <span>we have prepared everything for you!</span></h5>
                <img src="assets/img/ad.jpg" alt="">
            </div>
            <div class="about-text">
                <h2>This is Vaimo Store </h2>
                <h3>YOUR ONE-STOP <br/> FASHION DESTINATION</h3>
                <p>Shop from over 850 of the best brands, including VAIMO’s own label. Plus, get your daily fix of the freshest style, celebrity and music news.</p>
            </div>
            </section>
        <section class="favourites">
            <h3>Our Favourites</h3>
            <?php asort($products); ?>
            <ul class="products">
                @forelse ($products as $product)
                    <li>
                        <img src="{{ $product['image'] }}" alt="">
                        <strong class="name">{{ $product['title'] }}</strong>
                        <p class="price">
                            <span class="price @if ( $product['specialPrice']) strike @endif">&euro;{{ $product['price'] }}</span>
                            @if ( $product['specialPrice'])
                                <strong class="new-price">&euro;{{ $product['specialPrice'] }}</strong>
                            @endif
                        </p>
                        <button class="btn">add to cart</button>
                    </li>
                @empty
                    <p>no products in this category</p>
                @endforelse
            </ul>
        </section>
    </main>
</div>
<footer id="page-footer">
    <div class="container">
        <nav>
            <h3>Top Categories</h3>
            <ul class="top-categories">
                <li><a href="">Women</a></li>
                <li><a href="">Men</a></li>
                <li><a href="">Junior</a></li>
                <li><a href="">Acessories</a></li>
            </ul>
        </nav>
        <nav>
            <h3>Customer Service</h3>
            <ul class="customer-service">
                <li><a href="">Returns</a></li>
                <li><a href="">Shipping</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </nav>
        <div class="subscribe">
            <h3>Newsletter Subscribe</h3>
            <form action="{{ url('/newsletter/subscribe') }}" id="form-newsletter">
                <div class="form-text">
                    <label for="subscribe">Enter your email adress</label>
                    <input id="subscribe" type="text" placeholder="Enter your email adress">
                </div>
                <div class="form-action">
                    <input type="submit" class="btn" value="Subscribe">
                </div>
            </form>
            <span id="validation-message" class="in-process">Subscribing to newsletter</span>
        </div>
    </div>
</footer>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
