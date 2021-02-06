<section id="about">
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Evaluar acceso de crédito</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium
                    doloremque laudantium, totam rem aperiam</p>
            </div>
        </div>
    </div>
    <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-md-6">
                <h2 class="about-title">Pre-Requisitos</h2>
                <form class="mb-3">
                    <label>A) ¿Cuenta con una tarjeta multired débito?</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1">Si</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">No</label>
                    </div>
                </form>
                <form class="mb-3">
                    <label>B) ¿Cuenta con DNI original vigente?</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio3">Si</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio4">No</label>
                    </div>
                </form>
                <div>
                    <button type="submit" id="pre" class="bn632-hover bn26">Consultar</button>
                </div>
            </div>
            <div class="d-none d-md-block col-md">
                <img src="img/about.jpg" alt="" width="100%">
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-blue-w">
                <h5 class="modal-title" id="exampleModalLabel">Opciones de crédito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="body-options">
                <div class="row justify-content-center mb-1">
                    <div class="col-md-10 col-lg-5">
                        <div class="card">
                            <img src="img/Préstamos-multired.jpg" class="card-img-top" alt="...">
                            <div class="card-body body-card">
                                <h6 class="card-title">Prestamo Multired</h6>
                                <button type="button" class="btn btn-sm btn-outline-info"
                                    id="btn-multired">Empezar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-5">
                        <div class="card">
                            <img src="img/Tarjetas-de-credito-Banco-Nacion.jpg" class="card-img-top" alt="...">
                            <div class="card-body body-card">
                                <h6 class="card-title">Obten una tarjeta de crédito</h6>
                                <button type="button" class="btn btn-sm btn-outline-info"
                                    id="btn-tarjeta">Empezar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-5">
                        <div class="card">
                            <img src="img/credito-hipotecario.png" class="card-img-top" alt="...">
                            <div class="card-body body-card">
                                <h6 class="card-title">Prestamo Hipotecario</h6>
                                <button type="button" class="btn btn-sm btn-outline-info"
                                    id="btn-hipotecario">Empezar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body" id="body-q1">
                @include('questions.multired')
                <section class="d-flex float-lg-right">
                    <button class="btn btn-sm btn-primary" id="btn-ev1">Evaluar</button>
                    <button class="btn btn-sm btn-outline-secondary ml-2 btn-reg">Regresar</button>
                </section>
            </div>
            <div class="modal-body" id="body-q2">
                @include('questions.tarjetas')
                <section class="d-flex float-lg-right">
                    <button class="btn btn-sm btn-primary" id="btn-ev2">Evaluar</button>
                    <button class="btn btn-sm btn-outline-secondary ml-2 btn-reg">Regresar</button>
                </section>
            </div>
            <div class="modal-body" id="body-q3">
                @include('questions.hipotecario')
                <section class="d-flex float-lg-right">
                    <button class="btn btn-sm btn-primary" id="btn-ev3">Evaluar</button>
                    <button class="btn btn-sm btn-outline-secondary ml-2 btn-reg">Regresar</button>
                </section>
            </div>
        </div>
    </div>
</div>