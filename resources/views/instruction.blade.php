<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Vaimo Frontend Test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
            href="instruction-assets/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Vaimo Frontend Test</h1>
                <p>This test is used for measure your knowledge and skill level in <strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong> and <strong>PHP</strong>.</p>
                <p>Notify us when you are done with <strong>ALL</strong> your tasks. We will not review the test if one or more tasks are missing.</p>
                <p>Send an email to <a href="mailto:frontend-candidate@vaimo.com">frontend-candidate@vaimo.com</a> when you are done or if you have any questions.</p>
                <p>Good luck!</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>Areas of judgement</h2>
                    <ul>
                        <li>That all listed requirements are fulfilled.</li>
                        <li>How well your implementation match the provided design.</li>
                        <li>How elegant the solution is in terms of code structure, performance considerations and readability.</li>
                        <li>How cross-browser safe your implementation is in:
                            <ul>
                                <li>Internet Explorer 10 &amp; Edge</li>
                                <li>Chrome</li>
                                <li>Firefox</li>
                                <li>Safari</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h2>Instructions</h2>
                    <ul>
                        <li>The solution should be made within this <a href="https://lumen.laravel.com/">Lumen Framework</a> setup and uploaded on your provided FTP account.</li>
                        <li>You can work directly on the server/FTP or download the application and work locally. <a href="https://lumen.laravel.com/docs/5.2#server-requirements">See Lumen server requirements.</a></li>
                        <li>You are allowed to use any front-end frameworks, libraries or plugins.</li>
                        <li>Your solution should be visible at <a href="{{ url('/') }}">{{ url('/') }}</a></li>
                        <li>Use the template <code>/resources/view/index.blade.php</code> for your markup implementation.</li>
                        <li>Use the <code>/public</code> folder for your static resources.</li>
                        <li>Products images are available in <code>/public/img/products</code>.</li>
                        <li>The font used in the design is <a href="https://www.google.com/fonts/specimen/Open+Sans" target="_blank">Open Sans</a>.</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h2>Tasks</h2>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">1. Design implemenation</h3>
                        </div>
                        <div class="panel-body">
                            <p>Implement a responsive web design solution based on the provided design (mobile &amp; desktop).</p>
                            <ul>
                                <li>The page should look according to the mobile design when the browser viewport is 320px.</li>
                                <li>The page should look according to the desktop design when the browser viewport is at least 940px.</li>
                                <li>You decide how the page should behave between the breakpoints 320px-940px. </li>
                                <li>The page should be centered in the web browser and top bar and footer backgrounds should be repeatead horizontally, covering the entire width of the browser window.</li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><span class="glyphicon glyphicon-download"></span> <a href="instruction-assets/design.zip">Download the PSD files</a></li>
                                <li><span class="glyphicon glyphicon-picture"></span> <a href="instruction-assets/desktop.jpg" target="_blank">See desktop screenshot</a></li>
                                <li><span class="glyphicon glyphicon-picture"></span> <a href="instruction-assets/mobile.jpg" target="_blank">See mobile screenshot</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">2. Navigation</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                The desktop navigation should have two levels of drop-downs. It should be solved without any javascript. Make sure you get the hover states, background and text color changes.
                                <br><span class="glyphicon glyphicon-picture"></span> <a href="instruction-assets/nav-desktop.jpg" target="_blank">See desktop screenshot</a>
                            </p>
                            <p>
                                The mobile navigation should show all levels and be visible/hidden when you click on the hamburger icon.
                                <br><span class="glyphicon glyphicon-picture"></span> <a href="instruction-assets/nav-mobile.jpg" target="_blank">See mobile screenshot</a>
                            </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">3. Cart</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                The cart drop-down should be visible when you hovering (not click) on the cart on desktop. The cart drop-down should still be visible when you hovering inside of it.
                                <br><span class="glyphicon glyphicon-picture"></span> <a href="instruction-assets/cart-hover-desktop.jpg" target="_blank">See desktop screenshot</a>
                            </p>
                            <p>
                                The cart drop-down should be visible/hidden when you click on the cart icon.
                                <br><span class="glyphicon glyphicon-picture"></span> <a href="instruction-assets/cart-hover-mobile.jpg" target="_blank">See desktop screenshot</a>
                            </p>
                            <p>
                                The cart data should be fetch with an Ajax request and be <strong>cached for 1 minute</strong>. Meaning that no additional requests should be made when you reload the page during this time. The URL returns the data in JSON format.
                            </p>
                            <p>Data Url: <code><a href="cart/get">cart/get</a></code></p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">4. Products</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                The products will be available to you as an array by calling <code>$products</code> variable in <code>/resources/view/index.blade.php</code>. We want you to sort the products alphabetically from A-Z with PHP. No other data than the provided array should be used to present the products, like hard coded markup.
                            </p>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">5. Subscribe to newsletter</h3>
                        </div>
                        <div class="panel-body">
                            <p>
                                There are three layer compositions that illustrates a newsletter signup interaction.
                                <ul class="list-unstyled">
                                    <li><span class="glyphicon glyphicon-picture"></span> <a href="instruction-assets/newsletter-loading.jpg" target="_blank">Subscribe loading</a></li>
                                    <li><span class="glyphicon glyphicon-picture"></span> <a href="instruction-assets/newsletter-success.jpg" target="_blank">Subscribe success</a></li>
                                    <li><span class="glyphicon glyphicon-picture"></span> <a href="instruction-assets/newsletter-failed.jpg" target="_blank">Subscribe failed</a></li>
                                </ul>
                                An Ajax request should be sent to the url <code><a href="newsletter/subscribe">newsletter/subscribe</a></code> to complete the subscription.<br/>
                                You should create a response back in JSON format if the subscription was succesful or failed. The subscription should be successful if the email is a valid email address.
                                <br><br>
                                You don't need to save any email address into a database, only validate it.
                                <br><br>
                                Implement the response in the file <code>app/Http/Controllers/NewsletterController.php</code> and the function <code>subscribe()</code>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
