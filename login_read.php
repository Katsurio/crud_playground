<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>

<div class="container vertical-center">

    <div class="offset-sm-3 col-sm-6"
         style="background-color: white;
                border: 3px solid black;
                box-shadow: 5px 5px 5px;">
        <pre>
            <?php ReadData(); ?>
        </pre>
    </div>

<?php include "includes/footer.php"; ?>
