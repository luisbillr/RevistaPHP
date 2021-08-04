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
                        <img src="img\img-4.jpg" class="d-block w-100" alt="..." height="350">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Robert Downey Jr</h5>
                            <p>Nacido para ser Iron Man</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img\img-2.jpg" class="d-block w-100" alt="..." height="350">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Lakers, "El Escuadron Del Miedo" </h5>
                            <p>Los Lakers, causan panico...</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img\img-3.jpg" class="d-block w-100" alt="..." height="350">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Yadier Molina</h5>
                            <p>Ha superado al jugador Albert Pujols en Hits</p>
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
        <div class="col-md-6 img-principal-derecha">
            <div class="row">
                <div class="col-md-6">
                    <div class="contenedor">
                        <img src="img\pujols.jpg" class="img-fluid img-thumbnail img-notice" alt="...">
                        <!-- <div class="texto-encima">Texto</div>
                        <div class="centrado">Centrado</div> -->
                        <a href="#" class="debajo">Albert Pujols</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contenedor">
                        <img src="img\goku.jpg" class="img-fluid img-thumbnail img-notice" alt="...">
                        <!-- <div class="texto-encima">Texto</div>
                        <div class="centrado">Centrado</div> -->
                        <a href="#" class="debajo "> Vuelve DBZ</a>
                    </div>
                </div>
            </div>

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
                                <h2 class="article-title">'.$row["Titulo"].'</h2>
                                <small class="text-muted" style="font-size: 12px;">'.$row["FechaCreacion"].' <i class="fa fa-eye"></i> 12 </small>
                                <p>'.$row["Contenido"].' </p>
                        </div>' ;
                     }
                ?>
            </div>
        </div>
        <div class="col-md-3">

            <?php
               
                    $articulos = GetArticulosAside();
                     while($row = $articulos->fetch_assoc()) {
                          echo '
                            <div class="card">
                            <div class="card-body">
                                <a href="#" class="link-card" aria-current="true">
                                <div class="row">
                                        <div class="col-md-5">
                                            <img src="img\img-1.jpg" class="img-fluid img-thumbnail" alt="..." height="100">

                                        </div>
                                        <div class="col-md-7">
                                            <h6><b> '.$row['Titulo'].'</b></h6>
                                            <span class="aside-date">'. $row['FechaCreacion'] .'</span>
                                            <span><i class="fa fa-eye"></i> 12</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                           
                            </div>';
                    //  echo ' <a href="#" class="list-group-item list-group-item-action " aria-current="true">
                    //             <div class="row">
                    //                 <div class="col-md-5">
                    //                     <img src="img\img-1.jpg" class="img-fluid img-thumbnail" alt="..." height="100">

                    //                 </div>
                    //                 <div class="col-md-7">
                    //                     <h6><b> '.$row['Titulo'].'</b></h6>
                    //                     <span class="aside-date">'. $row['FechaCreacion'] .'</span>
                    //                     <span><i class="fa fa-eye"></i> 12</span>
                    //                 </div>
                    //             </div>

                    //         </a>';
                     }
                ?>

        </div>


    </div>
</div>