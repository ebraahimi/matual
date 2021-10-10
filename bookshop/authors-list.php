<?php
function render_author(){
    include("assets/php/connection.php");

    $query = "SELECT * FROM author ORDER BY `authorID` ASC";
    $books = mysqli_query($connection, $query);
    while($book = mysqli_fetch_assoc($books)){
        echo '<div class="cbp-item graphic">
                <a class="cbp-caption" href="authors-single.php?authorID='.$book['authorID'].'">
                    <img class="rounded-circle img-fluid mb-3" src="'.$book['author_image'].'"
                         alt="Image Description">
                    <div class="py-3 text-center">
                        <h4 class="h6 text-dark">'.$book['fullname'].'</h4>
                        <span class="font-size-2 text-secondary-gray-700">'.$book['short_desc'].'</span>
                    </div>
                </a>
            </div>';

    }
};
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
        <div class="pb-lg-1">
            <div class="container">
                <div class="u-cubeportfolio mb-5 mb-lg-7">
                    <!-- authors list-->
                    <div class="cbp" data-layout="grid" data-controls="#filterControls"
                         data-x-gap="20" data-y-gap="100" data-media-queries='[
                                {"width": 1100, "cols": 5},
                                {"width": 800, "cols": 3},
                                {"width": 480, "cols": 1}
                              ]'>
                        <!--authors-->
                        <?php
                        render_author();
                        ?>
                    </div>

                </div>
<!--                load more btn-->
<!--                <div class="d-flex justify-content-center">-->
<!--                    <button type="submit" class="btn btn-wide border-dark text-dark rounded-0 transition-3d-hover">Load-->
<!--                        More-->
<!--                    </button>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</main>

<?php
include("assets/php/scripts.php");
?>
</body>
</html>
