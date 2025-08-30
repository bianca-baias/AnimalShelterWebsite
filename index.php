


<?php require "header_logged.php"; ?>

        <main>
            <div class="container-fluid text-center">
                <div class="row">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active slider-homepage" id="slider-homepage">
                            <img src="Images/slider1.png" alt="slider" class="img-fluid float-end h-100" id="c-img">
                            <div class="carousel-caption">
                                <h4>Bine ati venit pe site-ul adapostului de animale din Baia Mare!</h5>
                                <p>Misiunea noastra este de a gasi o familie fiecarui suflet ratacit</p>
                                <br><br>
                            </div>
                            </div>
                            <div class="carousel-item slider-homepage" id="slider-homepage">
                            <img src="Images/slider2.jpg" class="img-fluid float-end  h-100" alt="slider" id="c-img">
                            <div class="carousel-caption">
                                <h4>Va puteti cauta viitorul membru al familei in sectiunea "Adopta"</h5>
                                <br><br>
                            </div>
                            </div>
                            <div class="carousel-item slider-homepage" id="slider-homepage">
                            <img src="Images/slider3.jpg" class="img-fluid float-end h-100" alt="slider" id="c-img">
                            <div class="carousel-caption">
                                <h4>Oferiti o mana de ajutor animalelor fara stapan</h5>
                                <p>Fie prin donatii financiare sau materiale, pana la voluntariat, foster sau adoptie la distanta</p>
                                <br><br>
                            </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="row g-3">
                    <?php 
                        $start = 0;
                        $limit = 6;
                        $id = 1;
                        
                        if(isset($_GET['id']))
                        {
                            $id=$_GET['id'];
                            $start=($id-1)*$limit;
                        }
                        
                        
                        // if we just browse the page
                        $sqlv = "SELECT * FROM pet";
                        $resultv= mysqli_query($conn,"SELECT * FROM pet LIMIT $start, $limit");
                        
                        if (!$resultv)
                            die('Invalid querry:' .mysqli_error($conn));
                        else 
                        {
                            while ($myrow=mysqli_fetch_array($resultv,MYSQLI_ASSOC))
                            {
                                ?>
                                <div class="col-6 col-md-4 col-lg-2"> 
                                    <div class="card h-100">
                                        <?php $numePoza = $myrow['id']."-".$myrow['poza']; $imgPath ="includes/admin/uploads/profile-"."$numePoza"; ?>
                                        <img src="<?php echo $imgPath ?>" class="card-img-top" alt="pet" id="pet-listing-image">
                                        <div class="card-body">
                                            <h5 class="card-title"><b><?php echo $myrow["nume"] ?></b></h5>
                                            <p class="card-text">
                                                Varsta: <?php echo $myrow["varsta"] ?> ani <br>
                                                Talie: <?php echo $myrow["talie"] ?>
                                                </p>
                                            <div class="vstack gap-2">
                                                <a href="pet.php?id=<?php echo $myrow['id'];?>" class="btn btn-primary" id="adopta-listing">Detalii</a>
                                            <a href="#" class="btn btn-primary" id="favorite-button">Adauga la favorite</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                <?php
                            }
                        }
                    ?>
                </div>
                <div class="row"> <a href="adopta.php" class="button" id="more-button">Afiseaza mai multe</a></div>
            </div>
        </main>
        
<?php  require "footer.php"; ?>