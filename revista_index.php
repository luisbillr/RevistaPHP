<?php
    require "crud.php";
?>
<div class="col-md-12">

    <div class="row py-2">
        <div class="col-md-6">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img\img-4.jpg" class="d-block w-100" alt="..." height="400">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img\img-2.jpg" class="d-block w-100" alt="..." height="400">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img\img-3.jpg" class="d-block w-100" alt="..." height="400">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container">
                <div class="row py-3">
                    <div class="col-md-6  col-6 py-2">
                        <img src="img\img-1.jpg" class="img-fluid img-thumbnail" alt="...">
                    </div>
                    <div class="col-md-6  col-6 py-2">
                        <img src="img\img-1.jpg" class="img-fluid img-thumbnail" alt="...">
                    </div>
                    <div class="col-md-6  col-6 py-2">
                        <img src="img\img-1.jpg" class="img-fluid img-thumbnail" alt="...">
                    </div>
                    <div class="col-md-6  col-6 py-2">
                        <img src="img\img-1.jpg" class="img-fluid img-thumbnail" alt="...">
                    </div>


                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-3">
                    <img src="img\img-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="col-md-3">
                    <img src="img\img-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="col-md-3">
                    <img src="img\img-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="col-md-3">
                    <img src="img\img-1.jpg" class="d-block w-100" alt="...">
                </div>
            </div> -->
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-9">

            <div id="articulo_front">
                <?php
                    $articulos = GetArticulos();
                      while($row = $articulos->fetch_assoc()) {
                     echo '<div>
                                <h2>'.$row["Titulo"].'</h2>
                                <p><strong>Lorem Ipsum</strong>'.$row["Contenido"].' </p>
                        </div>' ;
                     }
                ?>




            </div>
        </div>
        <div class="col-md-3">
            <div class="list-group">
                <?php
               
                    $articulos = GetArticulos();
                     while($row = $articulos->fetch_assoc()) {
                     echo ' <a href="#" class="list-group-item list-group-item-action " aria-current="true">
                                <div class="row">
                                    <div class="col-md-5">
                                        <img src="img\img-1.jpg" class="img-fluid img-thumbnail" alt="..." height="100">

                                    </div>
                                    <div class="col-md-7">
                                        <p class="mb-1"><b> '.$row['Titulo'].'</b></p>
                                        <small>'. $row['FechaCreacion'] .'</small>
                                    </div>
                                </div>

                            </a>';
                     }
                ?>

                <!-- <a href="#" class="list-group-item list-group-item-action " aria-current="true">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="img\img-4.jpg" class="img-fluid img-thumbnail" alt="..." height="100">

                        </div>
                        <div class="col-md-7">
                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                            <small>And some small print.</small>
                        </div>
                    </div>

                </a>
                <a href="#" class="list-group-item list-group-item-action " aria-current="true">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="img\img-2.jpg" class="img-fluid img-thumbnail" alt="..." height="100">

                        </div>
                        <div class="col-md-7">
                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                            <small>And some small print.</small>
                        </div>
                    </div>

                </a> -->
                <!-- <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Some placeholder content in a paragraph.</p>
                    <small class="text-muted">And some muted small print.</small>
                </a> -->
            </div>
        </div>


    </div>
</div>