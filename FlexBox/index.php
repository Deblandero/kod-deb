<?php include('pages/header.php');?>

<?php 

    include('pages/flexbox.php');


?>

   <section class="flexbox">
        <h1>Flexbox</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm12">
                    <section class="parent">
                        <div class="class">
                            <h2>.element-parent{</h2>
                        </div>
                        <div class="property">
                            <?php 
                            foreach ($flexbox_parent as $key => $value) {
                                echo("<h3>".$key."</h3><p>".$value."</p>");
                            }         
                            ?>
                        </div>
                        <div class="class">
                            <h2>}</h2>
                            <h2>&nbsp&nbsp&nbsp.enfant{</h2>
                                                            <?php 
                            foreach ($flexbox_enfant as $key => $value) {
                                echo("<h3>&nbsp&nbsp&nbsp".$key."</h3><p>&nbsp&nbsp&nbsp&nbsp".$value."</p>");
                            }         
                            ?>

                            <h2>&nbsp&nbsp&nbsp}</h2>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </section>


<?php include('pages/script-js.php');?>
<?php include('pages/footer.php');?>
