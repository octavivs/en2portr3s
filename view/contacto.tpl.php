<div class="row">
    <div class="large-8 columns"><!-- Contact form -->
        <h3>Contáctanos</h3><br />
        <div class="section-container tabs" data-section>
            <section class="section">
                <div class="content" data-slug="panel1">
                    <form method="post" action="promen.php">
                        <div class="row collapse">
                            <div class="medium-2 columns">
                                <label class="inline">Nombre</label>
                            </div>
                            <div class="medium-10 columns">
                                <input type="text" id="nombre" name="Nombre" autofocus />
                            </div>
						 </div>
						 <div class="row collapse">
							<div class="medium-2 columns">
                                <label class="inline">Apellidos</label>
                            </div>
                            <div class="medium-10 columns">
                                <input type="text" id="Apellidos" name="Apellidos" />
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="medium-2 columns">
                                <label class="inline">Email</label>
                            </div>
                            <div class="medium-10 columns">
                                <input type="text" id="Email" name="Email" />
                            </div>
                        </div>
                        <div class="row collapse">
                            <label class="inline">Mensaje</label>
                            <textarea rows="4" id="mensaje" name="mensaje"></textarea>
                            <input type="button" class="button tiny" name="enviar" value="Enviar">
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div><!-- End of contact form -->

    <div class="large-4 columns"><!-- Map -->
        <h5>Estamos ubicados en </h5>
        <p><a href="" data-reveal-id="mapModal"><img src="view/img/lugar.png" /></a></p>
        <p>Norte 12 entre Oriente 3 y Colón Oriente.</p>
    </div><!-- End of map -->
</div>

<div class="row">
    <div class="medium-2 columns">
        <img src="view/img/mail.png" />
    </div>
    <div class="medium-10 columns">
        <h5> Buzón de sugerencias</h5>
        <textarea  rows="2" id="buzon" name="buzon"></textarea>
        <input type="button" class="button tiny" name="enviar" value="Enviar">
    </div>
</div>