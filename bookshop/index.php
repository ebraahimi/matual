<?php
    include("assets/php/connection.php");
    function render_category(){
        include("assets/php/connection.php");
        $query = "SELECT * FROM book_category ORDER BY `bookcategoryID` ASC";
        $books = mysqli_query($connection, $query);
        while($book = mysqli_fetch_assoc($books)){
            echo '<li class="cat-item cat-item-9 cat-parent">
                    <a href="index.php?catID='.$book["bookcategoryID"].'">'.$book["category_name"].'</a>
                </li>';    

        }
    };
    function render_author(){
        include("assets/php/connection.php");

        $query = "SELECT * FROM author ORDER BY `authorID` ASC";
        $books = mysqli_query($connection, $query);
        while($book = mysqli_fetch_assoc($books)){
            echo '<li class="cat-item cat-item-65 cat-parent">
                    <a href="index.php?authorid='.$book["authorID"].'">'.$book["fullname"].'</a>
                </li>';

        }
    };
    function pagination(){
        include("assets/php/connection.php");
        $per_page_record = 12;

        $query = "SELECT COUNT(*) FROM booklist";
        $rs_result = mysqli_query($connection, $query);
        $row = mysqli_fetch_row($rs_result);
        $total_records = $row[0];

        // Number of pages required.
        $total_pages = ceil($total_records / $per_page_record);
        $pagLink = "";

        if(isset($_GET['page'])){
            $page = $_GET["page"];
        }else{
            $page = 1 ;
        }

        if ($page >= 2) {
            echo '<li class="flex-shrink-0 flex-md-shrink-1 page-item">
                        <a class="page-link" href="index.php?page= '. ($page - 1) .' ">Previous</a>
                    </li>';
        }

        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $page) {
                $pagLink .= '<li class="flex-shrink-0 flex-md-shrink-1 page-item active" aria-current="page">
                                <a class="page-link" href="index.php?page='.$i.'">'.$i.'</a>
                            </li>';
            } else {
                $pagLink .= '<li class="flex-shrink-0 flex-md-shrink-1 page-item">
                                <a class="page-link" href="index.php?page='.$i.'">'.$i.'</a>
                            </li>';
            }
        };
        echo $pagLink;

        if ($page < $total_pages) {
            echo '<li class="flex-shrink-0 flex-md-shrink-1 page-item">
                        <a class="page-link" href="index.php?page= '. ($page + 1) .' ">Next</a>
                    </li>';
        }
    };
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include("assets/php/head.php");
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--preview column num by select form input options-->
    <script>
        function render_booklist_grid() {
            console.log();
                //grid


            // <li class="product col">
            //     <div class="product__inner overflow-hidden p-3 p-md-4d875">
            //         <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
            //             <div class="woocommerce-loop-product__thumbnail">
            //                 <a href="single-product.php?productID=${book["bookID"]}" class="d-block">
            //                     <img src="${book["book_image"]}"
            //                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
            //                          alt="image-description"></a>
            //             </div>
            //             <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
            //                 <div class="text-uppercase font-size-1 mb-1 text-truncate">
            //                     <a href="single-product.php?productID=${book["bookID"]}">
            //                         ${book["category_name"]}
            //                     </a>
            //                 </div>
            //                 <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
            //                     <a href="single-product.php?productID=${book["bookID"]}">
            //                         ${book["book_name"]}
            //                     </a>
            //                 </h2>
            //                 <div class="font-size-2  mb-1 text-truncate">
            //                     <a href="single-product.php?productID=${book["bookID"]}" class="text-gray-700">
            //                         ${book["fullname"]}"
            //                     </a>
            //                 </div>
            //                 <div class="price d-flex align-items-center font-weight-medium font-size-3">
            //                         <span class="woocommerce-Price-amount amount">
            //                             <span class="woocommerce-Price-currencySymbol">$</span>
            //                                 ${book["price"]}"
            //                         </span>
            //                 </div>
            //             </div>
            //             <div class="product__hover d-flex align-items-center">
            //                 <a href="single-product.php?productID=${book["bookID"]}" class="text-uppercase text-dark h-dark font-weight-medium mr-auto"
            //                    data-toggle="tooltip" data-placement="right" title=""
            //                    data-original-title="ADD TO CART">
            //                     <span class="product__add-to-cart">ADD TO CART</span>
            //                     <span class="product__add-to-cart-icon font-size-4">
            //                                 <i class="flaticon-icon-126515"></i>
            //                             </span>
            //                 </a>
            //                 <a href="single-product.php?productID=${book["bookID"]}"
            //                    class="mr-1 h-p-bg btn btn-outline-primary border-0">
            //                     <i class="flaticon-switch"></i>
            //                 </a>
            //                 <a href="single-product.php?productID=${book["bookID"]}"
            //                    class="h-p-bg btn btn-outline-primary border-0">
            //                     <i class="flaticon-heart"></i>
            //                 </a>
            //             </div>
            //         </div>
            //     </div>
            // </li>
            $('#productgrid').append(`
                <p>hello</p>
                 `)
        };
        function render_book_list(books){
            //list
            //         // $("[name='product-list']").load(function(response){
            //         //     for(response of response){
            //         //         $(this).append(
            //         //             `<li class="product product__list">
            //         //                 <div class="product__inner overflow-hidden p-3 p-md-4d875">
            //         //                     <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
            //         //                         <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
            //         //                             <a href="single-product.php?productID='${response["bookID"]}" class="d-block"><img
            //         //                                         src="${response["book_image"]}"
            //         //                                         class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
            //         //                                         alt="image-description"></a>
            //         //                         </div>
            //         //                         <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
            //         //                             <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
            //         //                                         href="single-product.php?productID=${response["bookID"]}">${response["book-category"]}</a></div>
            //         //                             <h2 class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark">
            //         //                                 <a href="single-product.php?productID=${response["bookID"]}" tabindex="0">${response["book-name"]}</a></h2>
            //         //                             <div class="font-size-2  mb-2 text-truncate"><a
            //         //                                         href="single-product.php?productID=${response["bookID"]}"
            //         //                                         class="text-gray-700">${response["fullname"]}</a></div>
            //         //                             <p class="font-size-2 mb-2 crop-text-2">${response["desc"]}</p>
            //         //                             <div class="price d-flex align-items-center font-weight-medium font-size-3">
            //         //                                 <span class="woocommerce-Price-amount amount">
            //         //                                 <span class="woocommerce-Price-currencySymbol">$</span>${response["price"]}</span>
            //         //                             </div>
            //         //                         </div>
            //         //                         <div class="col-md-auto d-flex align-items-center">
            //         //                             <a href="single-product.php?productID=${response["bookID"]}"
            //         //                                class="text-uppercase text-dark h-dark font-weight-medium mr-4"
            //         //                                data-toggle="tooltip" data-placement="right" title=""
            //         //                                data-original-title="ADD TO CART">
            //         //                                 <span class="product__add-to-cart">ADD TO CART</span>
            //         //                                 <span class="product__add-to-cart-icon font-size-4"><i
            //         //                                             class="flaticon-icon-126515"></i></span>
            //         //                             </a>
            //         //                             <a href="single-product.php?productID=${response["bookID"]}"
            //         //                                class="mr-1 h-p-bg btn btn-outline-primary border-0">
            //         //                                 <i class="flaticon-switch"></i>
            //         //                             </a>
            //         //                             <a href="single-product.php?productID=${response["bookID"]}"
            //         //                                class="h-p-bg btn btn-outline-primary border-0">
            //         //                                 <i class="flaticon-heart"></i>
            //         //                             </a>
            //         //                         </div>
            //         //                     </div>
            //         //                 </div>
            //         //             </li>`;
            //         //     )}}
            //
        }

        window.onload = function () {
        let show = document.querySelector("[name='previewColumn']");
        show = show.value;
        $.post(
            "assets/php/listrender.php", {
                per_page_record: show,
            },
            function (response) {
                console.log(response);
                console.log(response);
                // grid
                render_booklist_grid();
                //    list
            })}
    </script>
</head>

<body class="left-sidebar">
    <?php
        include ("assets/php/header.php");
        include  ("assets/php/authentication.php");
        include  ("assets/php/shoppingBag.php");
        include  ("assets/php/navbarToggle.php");
        include  ("assets/php/searchbox.php");
    ?>

    <!--content-->
    <main class="site-content space-bottom-3" id="content">
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area order-2">
                    <!--  sortations-->
                    <div
                        class="shop-control-bar d-lg-flex justify-content-between align-items-center mb-5 text-center text-md-left">
                        <div class="shop-control-bar__left mb-4 m-lg-0">
                            <p class="woocommerce-result-count m-0">Showing <?php
                            $per_page_record = 12;

                            $query = "SELECT COUNT(*) FROM booklist";
                            $rs_result = mysqli_query($connection, $query);
                            $row = mysqli_fetch_row($rs_result);
                            $total_records = $row[0];

                            // Number of pages required.
                            $total_pages = ceil($total_records / $per_page_record);
                            $pagLink = "";
                            $page = $_GET["page"];
                            echo $page." of ".$total_pages; ?></p>
                        </div>
                        <!-- sort row-->
                        <div class="shop-control-bar__right d-md-flex align-items-center">
                            <!--  sort by price-->
                            <form class="woocommerce-ordering mb-4 m-md-0" method="get">
                                <select class="js-select selectpicker dropdown-select orderby" name="orderby"
                                    data-style="border-bottom shadow-none outline-none py-2">
                                    <option value="default" selected="selected">Sort By Price:</option>
                                    <option value="lth">low to high</option>
                                    <option value="htl">high to low</option>
                                </select>
                            </form>
                            <!--sort by quantity to preview-->
                            <form class="number-of-items ml-md-4 mb-4 m-md-0 d-none d-xl-block" action="" method="post">
                                <select class="js-select selectpicker dropdown-select" name="previewColumn"
                                    data-style="border-bottom shadow-none outline-none py-2" data-width="fit">
                                    <option value="12" selected="selected" onclick="render12()">Show 12</option>
                                    <option value="24">Show 24</option>
                                    <option value="all">All</option>
                                </select>
                            </form>
                            <!-- book arrangement-->
                            <ul class="nav nav-tab ml-lg-4 justify-content-center justify-content-md-start ml-md-auto"
                                id="pills-tab" role="tablist">
                                <!-- grid - btn-->
                                <li class="nav-item border">
                                    <a class="nav-link p-0 height-38 width-38 justify-content-center d-flex align-items-center active"
                                        id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1"
                                        role="tab" aria-controls="pills-one-example1" aria-selected="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17px" height="17px">
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M-0.000,0.000 L3.000,0.000 L3.000,3.000 L-0.000,3.000 L-0.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M7.000,0.000 L10.000,0.000 L10.000,3.000 L7.000,3.000 L7.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M14.000,0.000 L17.000,0.000 L17.000,3.000 L14.000,3.000 L14.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M-0.000,7.000 L3.000,7.000 L3.000,10.000 L-0.000,10.000 L-0.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M7.000,7.000 L10.000,7.000 L10.000,10.000 L7.000,10.000 L7.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M14.000,7.000 L17.000,7.000 L17.000,10.000 L14.000,10.000 L14.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M-0.000,14.000 L3.000,14.000 L3.000,17.000 L-0.000,17.000 L-0.000,14.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M7.000,14.000 L10.000,14.000 L10.000,17.000 L7.000,17.000 L7.000,14.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M14.000,14.000 L17.000,14.000 L17.000,17.000 L14.000,17.000 L14.000,14.000 Z" />
                                        </svg>
                                    </a>
                                </li>
                                <!-- lists btn-->
                                <li class="nav-item border">
                                    <a class="nav-link p-0 height-38 width-38 justify-content-center d-flex align-items-center"
                                        id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1"
                                        role="tab" aria-controls="pills-two-example1" aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="23px" height="17px">
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M-0.000,0.000 L3.000,0.000 L3.000,3.000 L-0.000,3.000 L-0.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M7.000,0.000 L23.000,0.000 L23.000,3.000 L7.000,3.000 L7.000,0.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M-0.000,7.000 L3.000,7.000 L3.000,10.000 L-0.000,10.000 L-0.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M7.000,7.000 L23.000,7.000 L23.000,10.000 L7.000,10.000 L7.000,7.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M-0.000,14.000 L3.000,14.000 L3.000,17.000 L-0.000,17.000 L-0.000,14.000 Z" />
                                            <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                                                d="M7.000,14.000 L23.000,14.000 L23.000,17.000 L7.000,17.000 L7.000,14.000 Z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--product-->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel"
                            aria-labelledby="pills-one-example1-tab">
                            <!--book grid list -->
                            <ul class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left mb-6"
                                name="productgrid" id="productgrid>

                            </ul>
                        </div>

                        <!--book-lists-->
                        <div class="tab-pane fade" id="pills-two-example1" role="tabpanel"
                            aria-labelledby="pills-two-example1-tab">
                            <!--books data-->
                            <ul class="products list-unstyled mb-6" name="product">
                                <?php
                                // render_booklist_inLIST();
                            ?>
                            </ul>
                        </div>
                    </div>
                    <!--pagination-->
                    <nav aria-label="Page navigation example">
                        <ul
                            class="pagination pagination__custom justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
                            <?php
                            pagination();
                        ?>
                        </ul>
                    </nav>
                </div>
                <!--  filters-->
                <div id="secondary" class="sidebar widget-area order-1" role="complementary">
                    <div id="widgetAccordion">
                        <!-- product category-->
                        <div id="woocommerce_product_categories-2"
                            class="widget p-4d875 border woocommerce widget_product_categories">
                            <div id="widgetHeadingOne" class="widget-head">
                                <a class="d-flex align-items-center justify-content-between text-dark" href="#"
                                    data-toggle="collapse" data-target="#widgetCollapseOne" aria-expanded="true"
                                    aria-controls="widgetCollapseOne">
                                    <h3 class="widget-title mb-0 font-weight-medium font-size-3">Categories</h3>
                                    <svg class="mins" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                            d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                    </svg>
                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                            d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                    </svg>
                                </a>
                            </div>
                            <div id="widgetCollapseOne" class="mt-3 widget-content collapse show"
                                aria-labelledby="widgetHeadingOne" data-parent="#widgetAccordion">
                                <ul class="product-categories">
                                    <?php  render_category(); ?>
                                </ul>
                            </div>
                        </div>
                        <!--  authors-->
                        <div id="Authors" class="widget widget_search widget_author p-4d875 border">
                            <div id="widgetHeading21" class="widget-head">
                                <a class="d-flex align-items-center justify-content-between text-dark" href="#"
                                    data-toggle="collapse" data-target="#widgetCollapse21" aria-expanded="true"
                                    aria-controls="widgetCollapse21">
                                    <h3 class="widget-title mb-0 font-weight-medium font-size-3">Author</h3>
                                    <svg class="mins" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="2px">
                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                            d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                                    </svg>
                                    <svg class="plus" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px">
                                        <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                                            d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                                    </svg>
                                </a>
                            </div>
                            <div id="widgetCollapse21" class="mt-4 widget-content collapse show"
                                aria-labelledby="widgetHeading21" data-parent="#widgetAccordion">
                                <form class="form-inline my-2 overflow-hidden">
                                    <div class="input-group flex-nowrap w-100">
                                        <div class="input-group-prepend">
                                            <i
                                                class="glph-icon flaticon-loupe py-2d75 bg-white-100 border-white-100 text-dark pl-3 pr-0 rounded-0"></i>
                                        </div>
                                        <input
                                            class="form-control bg-white-100 py-2d75 height-4 border-white-100 rounded-0"
                                            type="search" placeholder="Search" aria-label="Search">
                                    </div>
                                    <button class="btn btn-outline-success my-2 my-sm-0 sr-only" type="submit">Search
                                    </button>
                                </form>
                                <ul class="product-categories">
                                    <?php  render_author(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


<!--    --><?php
//    include("assets/php/scripts.php");
//    ?>
</body>
</html>