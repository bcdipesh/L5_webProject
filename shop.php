<?php
// IMPORT HEADER
require './assets/include/header.inc.php';
?>
<div class="collection-container">
    <div class="shop-container">
        <?php
        // IMPORT NECESSARY FILES
        require './assets/include/nav.inc.php';
        require './assets/include/functions.inc.php';
        ?>

        <div class="whitespaces"></div>

        <!-- COLLECTION STARTS -->

        <div id="allProducts" class="collection">
            <p id="heading">All Products</p>

            <div class="section prod-list">
                <div class="container-fluid">
                    <div class="row some-cards">
                        <div class='col-lg-12 wow fadeInUp'>
                            <p id="heading" class="category-heading">Categories</p>
                            <h3 id="heading" class="search-heading">Search Products</h3>
                            <form>
                                <label for="price-min">Min-Price:</label>
                                <input type="range" name="price-min" id="price-min" value="1000" min="0" max="1000">
                                <label for="price-max">Max-Price:</label>
                                <input type="range" name="price-max" id="price-max" value="2000" min="2000" max="5000">
                                <input type="text" id="search-text" class="form-control" onkeyup="showSuggestion();">
                            </form>
                            <p><span id="output"></span></p>
                            <form class="category-form" action="./assets/include/variables.inc.php" method="POST">
                                <div class="inputGroup">
                                    <input id="option1" name="category" value="bestSeller" type="checkbox" onclick="showCategory('bestSeller');" />
                                    <label for="option1">Best Seller</label>
                                </div>

                                <div class="inputGroup">
                                    <input id="option2" name="category" value="latestCollection" type="checkbox" onclick="showCategory('latestCollection');" />
                                    <label for="option2">Latest Collection</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- COLLECTION ENDS -->

        <!-- BEST SELLER COLLECTION STARTS -->

        <div id="bestSeller" class="collection">
            <p id="heading">Best Seller</p>

            <div class="section prod-list">
                <div class="container-fluid">
                    <div class="row some-cards">
                        <?php
                        $products = getProducts('bestSeller');
                        foreach ($products as $markup) {
                            echo $markup;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- BEST SELLER COLLECTION ENDS -->

        <!-- LATEST COLLECTION STARTS -->

        <div id="latestCollection" class="collection">
            <p id="heading">Latest collection</p>

            <div class="section prod-list">
                <div class="container-fluid">
                    <div class="row some-cards">
                        <?php
                        $products = getProducts('latestCollection');
                        foreach ($products as $markup) {
                            echo $markup;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- LATEST COLLECTION ENDS -->

        <?php
        // IMPORT FOOTER
        require './assets/include/footer.inc.php';
