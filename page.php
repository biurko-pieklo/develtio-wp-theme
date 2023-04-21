<?php

get_header();

?>

<div class="section section-1">
    <div class="section-wrapper">
        <div class="container">
            <div class="section-content">
                <h1>Ubezpieczenie majątkowe</h1>
                <h3>Skontaktuj się z nami i skorzystaj
                    <br>ze specjalnej oferty!</h3>
            </div>

            <div class="form-wrapper">
                <form action="/">
                    <h4>Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę</h4>
                    <input type="text" name="name" id="form_name" class="text-input" placeholder="Imię i nazwisko">
                    <input type="email" name="email" id="form_email" class="text-input" placeholder="Adres e-mail">
                    <input type="tel" name="phone" id="form_phone" class="text-input" placeholder="Nr telefonu">
                    <input type="text" name="city" id="form_city" class="text-input" placeholder="Miejscowość">
                    <input type="text" name="postal" id="form_postal" class="text-input" placeholder="Kod pocztowy">

                    <span class="checkbox">
                        <input type="checkbox" name="rodo" id="form_rodo">
                        <label for="form_rodo">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</label>
                    </span>

                    <button type="submit" class="btn">Wyślij</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="section section-2">
    <div class="container">
        <div class="section-content">
            <h2>Ubezpieczenia majątkowe</h2>
            <h3>Co oferują?</h3>
            <p><b>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</b></p>
            <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
            <a href="#" class="btn">Zamów ubezpieczenie</a>
        </div>
    </div>
</div>

<?php
get_footer();