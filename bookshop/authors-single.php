<?php
function render_author(){
    include("assets/php/connection.php");

    $query = "SELECT * FROM author JOIN booklist ON  author.authorID = booklist.book_writerID  where authorID = '".$_GET['authorID']."' ORDER BY `bookID` ASC LIMIT 1";
    $books = mysqli_query($connection, $query);
    while($book = mysqli_fetch_assoc($books)){
        echo '<div class="col-lg-4 col-wd-3 d-flex">
                            <img class="img-fluid mb-5 mt-auto pb-5" src="'.$book["author_image"].'" alt="'.$book["fullname"].'">
                        </div>
                        <div class="col-lg-8 col-wd-9">
                            <div class="mb-8">
                                <span class="text-gray-400 font-size-2">AUTHOR Biography</span>
                                <h6 class="font-size-7 ont-weight-medium mt-2 mb-3 pb-1">
                                   '.$book["fullname"].'
                                </h6>
                                <p class="mb-0">'.$book["short_desc"].'</p>
                                
                            </div>
                 </div>';

    }
};
function render_author_books(){
    include("assets/php/connection.php");

    $query = "SELECT * FROM author JOIN booklist ON  author.authorID = booklist.book_writerID JOIN book_category ON booklist.book_categoryID = book_category.bookcategoryID where authorID = '".$_GET['authorID']."' ORDER BY `bookID` ASC";
    $books = mysqli_query($connection, $query);
    while($book = mysqli_fetch_assoc($books)){
        echo ' <li class="product">
                    <div class="product__inner overflow-hidden p-4d875">
                        <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                            <div class="woocommerce-loop-product__thumbnail">
                                <a href="single-product.php?productID='.$book["bookID"].'"
                                   class="d-block">
                                   <img src="'.$book["book_image"].'"
                                        class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                        alt="image-description">
                                </a>
                            </div>
                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate">
                                     <a href="single-product.php?productID='.$book["bookID"].'">'.$book["category_name"].'</a>
                                </div>
                                <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                    <a href="single-product.php?productID='.$book["bookID"].'"'.$book["desc"].'</a></h2>
                                <div class="font-size-2  mb-1 text-truncate">
                                <a href="single-product.php?productID='.$book["bookID"].'" class="text-gray-700">'.$book["fullname"].'</a>
                                </div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>'.$book["price"].'</span>
                                </div>
                            </div>
                            <div class="product__hover d-flex align-items-center">
                                <a href="single-product.php?productID='.$book["bookID"].'"
                                   class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                    <span class="product__add-to-cart">ADD TO CART</span>
                                    <span class="product__add-to-cart-icon font-size-4">
                                    <i class="flaticon-icon-126515"></i></span>
                                </a>
                                <a href="single-product.php?productID='.$book["bookID"].'"
                                   class="mr-1 h-p-bg border-0 btn btn-outline-primary">
                                    <i class="flaticon-switch"></i>
                                </a>
                                <a href="single-product.php?productID='.$book["bookID"].'"
                                   class="h-p-bg border-0 btn btn-outline-primary">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>';

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("assets/php/head.php");
?>
<body>
<?php
include("assets/php/header.php");
include("assets/php/authentication.php");
include("assets/php/shoppingBag.php");
include("assets/php/navbarToggle.php");
include("assets/php/searchbox.php");
?>

<!--content-->
<main id="content">
    <div class="space-bottom-2 space-bottom-lg-3">
<!--        about author-->
        <section class="space-bottom-2 space-bottom-lg-3">
            <div class="bg-gray-200 space-bottom-2 space-bottom-md-0">
                <div class="container space-top-2 space-top-wd-3 px-3">
                    <div class="row">
                       <?php render_author(); ?>
                    </div>
                </div>
            </div>
        </section>
<!--        author's books-->
        <div class="container">
            <header class="mb-5">
                <h2 class="font-size-7 mb-0">Author's Books</h2>
            </header>
            <ul class="js-slick-carousel products list-unstyled my-0 border-right border-top border-left"
                data-arrows-classes="d-none d-lg-block u-slick__arrow u-slick__arrow-centered--y"
                data-arrow-left-classes="fas flaticon-back u-slick__arrow-inner u-slick__arrow-inner--left ml-lg-n10"
                data-arrow-right-classes="fas flaticon-next u-slick__arrow-inner u-slick__arrow-inner--right mr-lg-n10"
                data-slides-show="4" data-responsive='[{
                       "breakpoint": 992,
                       "settings": {
                         "slidesToShow": 2
                       }
                    }, {
                       "breakpoint": 768,
                       "settings": {
                         "slidesToShow": 1
                       }
                    }, {
                       "breakpoint": 554,
                       "settings": {
                         "slidesToShow": 1
                       }
                    }]'>
                <?php  render_author_books(); ?>
            </ul>
        </div>
    </div>
</main>

<?php
include("assets/php/scripts.php");
?>

</body>
</html>
