<section class="booking-section section-padding" id="booking-section">
    <div class="container">
    <div class="row">

        <div class="col-lg-10 col-12 mx-auto">
            <form action="#" method="post" class="custom-form booking-form" id="bb-booking-form" role="form">
                <div class="text-center mb-5">
                    <h2 class="mb-2">Reservar Turno</h2>

                    <p>Reserva tu turno para y obten descuentos</p>
                    <p>Recibe la confirmación a tu whatsapp</p>
                </div>

                <div class="booking-form-body">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <input type="text" name="bb-name" id="bb-name" class="form-control" placeholder="Nombre" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <input type="tel" class="form-control" name="bb-phone" placeholder=" N° Whatssapp 310 2121 231" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <input class="form-control" type="time" name="bb-time" value="18:30" />
                        </div>

                        <div class="col-lg-6 col-12">
                            <select class="form-select form-control" name="bb-branch" id="bb-branch" aria-label="Default select example">
                                <option selected="">Seleccionar Local</option>
                                <option value="Grünberger">Local calle 116</option>
                                <option value="Behrenstraße">Local unicentro</option>
                                <option value="Weinbergsweg">Local modelia</option>
                            </select>

                        </div>
                        <div class="col-lg-6 col-12">
                            <select class="form-select form-control" name="bb-branch" id="bb-branch" aria-label="Default select example">
                                <option selected="">Servicio</option>
                                <option value="Grünberger">Corte de Cabello</option>
                                <option value="Behrenstraße">Afetada y barberia</option>
                                <option value="Weinbergsweg">Corte para niños</option>
                            </select>

                        </div>
                        <div class="col-lg-6 col-12">
                            <input type="date" name="bb-date" id="bb-date" class="form-control" placeholder="Date" required>
                        </div>

                    </div>

                    <textarea name="bb-message" rows="3" class="form-control" id="bb-message" placeholder="Adicionales Ej: Necesito parqueadero para mi vehiculo"></textarea>

                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                        <button type="submit" class="form-control">Reservar</button>
                    </div>
                </div>
            </form>
    </div>
</div>
</section>
