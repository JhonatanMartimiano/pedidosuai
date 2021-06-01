<?php $v->layout("_theme"); ?>

<div id="error_page">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-xl-7 col-lg-9">
                <figure><img src="<?= theme("/assets/img/404.svg"); ?>" alt="" class="img-fluid" width="550" height="234"></figure>
                <p>We're sorry, but the page you were looking for doesn't exist.</p>
                <form method="post" action="grid-listing-filterscol.html">
                    <div class="row no-gutters custom-search-input">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <input class="form-control no_border_r" type="text" placeholder="What are you looking for?">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn_1 gradient" type="submit">Search</button>
                        </div>
                    </div>
                    <!-- /row -->
                </form>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /error -->