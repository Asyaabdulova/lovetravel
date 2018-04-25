<?php
    $auth = false;
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/lt.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <style>
        .img-circle {
            border-radius: 50%;
        }
    </style>
</head>
<body>

<?php include "tpls/main/main_header.php"?>

<?php include "tpls/main/main_about.php"  ?>

<?php include "tpls/main/main_capabilities.php" ?>

<?php include "tpls/main/main_orders.php" ?>

<?php include "tpls/main/main_reviews.php" ?>

<?php include "tpls/main/main_footer.php"; ?>






<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
    !function ($) {
        "use strict";
        // Closes responsive menu when a scroll trigger link is clicked
        $('.js-scroll-trigger').click(function () {
            $('.navbar-collapse').collapse('hide');
        });

        var navbarCollapse = function () {
            let mn = $("#mainNav");
            if (mn.offset().top > 100) {
                mn.addClass("navbar-shrink");
            } else {
                mn.removeClass("navbar-shrink");
            }
        };
        // Collapse now if page is not at top
        navbarCollapse();
        // Collapse the navbar when page is scrolled
        $(window).scroll(navbarCollapse);
    }(jQuery);
</script>

</body>
</html>