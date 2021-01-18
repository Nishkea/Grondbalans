<?php
//Template name: Contact

get_header();?>

<?php
    $args = array(
        'background' => "https://grondbalans.nl/wp-content/uploads/2020/04/IMG_3091-scaled.jpg",
        'heading' => "Contact",
        'content' => "Kennismaken?",
        'button' => "Neem contact met ons op",
        'link' => get_permalink('contact'),
    );
    get_template_part( 'template-parts/banner', 'general', $args );
?>


<div class="content">
    <div class="content__container">
        <div class="contact__intro">
            <div class="contact__intro--left">
                <h2>
                    WIJ DENKEN GRAAG MET JE MEE
                </h2>
                <p>
                Altijd een onafhankelijk advies en passende oplossing voor iedereen die met grond werkt. Vul ons contactformulier in of neem direct telefonisch contact op. Wij denken graag met je mee.
                </p>
                <h3>Direct de juiste gesprekspartner</h3>
                <p>Klik op de regio en ontdek bij wie jij terecht kunt met jouw vraag.</p>
            </div>
            <div class="contact__intro--right">
                <div class="contact__map">
                    <?php get_template_part('template-parts/map', 'contact');?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact__cards">
    <div class="contact__cards--container">
        <div class="contact__cards--row">
            <div class="contact__cards--item">
                <h3>Landelijk</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Dirkjan Reijersen van Buuren", 
                        'titel' => "Directeur Grondbalans", 
                        'tel' => "06-26 13 61 56", 
                        'email' => "d.vanbuuren@grondbalans.nl")
                    );?>
                </div>

                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-LdWh_uA7/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/02-Edwin.jpg", 
                        'naam' => "Edwin van Venetiën", 
                        'titel' => "Projectmanager", 
                        'tel' => "06-51 51 46 96", 
                        'email' => "e.vanvenetien@grondbalans.nl")
                    );?>
                </div>

                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-PcVLP1ZA/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/11/Koen-scaled-e1604488596733.jpg", 
                        'naam' => "Koen Regensburg", 
                        'titel' => "Coördinator Projectontwikkeling", 
                        'tel' => "06-82 94 51 85", 
                        'email' => "k.regensburg@grondbalans.nl")
                    );?>
                </div>
            </div>

            <div class="contact__cards--item">
                <h3>Regio zuid</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-BsWcSC5U/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/01-Wijnand.jpg", 
                        'naam' => "Wijnand Vink", 
                        'titel' => "Regioverantwoordelijk", 
                        'tel' => "06-22 23 41 23", 
                        'email' => "w.vink@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-sMKro3aj/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/06/Foto-Roel-website-scaled-e1594208518178.jpg", 
                        'naam' => "Roel van Aarle", 
                        'titel' => "Projectcoördinator", 
                        'tel' => "06-12 07 28 01", 
                        'email' => "r.vanaarle@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Dirkjan Reijersen van Buuren", 
                        'titel' => "Directeur Grondbalans", 
                        'tel' => "06-26 13 61 56", 
                        'email' => "d.vanbuuren@grondbalans.nl")
                    );?>
                </div>
            </div>











            <div class="contact__cards--item">
                <h3>Regio Zuidwest</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-BsWcSC5U/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/01-Wijnand.jpg", 
                        'naam' => "Roald Brink", 
                        'titel' => "Regioverantwoordelijk", 
                        'tel' => "06-46 64 85 45", 
                        'email' => "r.brink@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-sMKro3aj/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/06/Foto-Roel-website-scaled-e1594208518178.jpg", 
                        'naam' => "Ronald Kooiman", 
                        'titel' => "(Junior) Projectcoördinator", 
                        'tel' => "06-27 08 88 07", 
                        'email' => "r.kooiman@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Dirkjan Reijersen van Buuren", 
                        'titel' => "Directeur Grondbalans", 
                        'tel' => "06-26 13 61 56", 
                        'email' => "d.vanbuuren@grondbalans.nl")
                    );?>
                </div>
            </div>
        </div>






        <div class="contact__cards--row">
            <div class="contact__cards--item">
                <h3>Regio West</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-BsWcSC5U/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/01-Wijnand.jpg", 
                        'naam' => "Erik Streng", 
                        'titel' => "Regioverantwoordelijk", 
                        'tel' => "06-46 64 85 44", 
                        'email' => "e.streng@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-sMKro3aj/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/06/Foto-Roel-website-scaled-e1594208518178.jpg", 
                        'naam' => "Bart van Meerendonk", 
                        'titel' => "Projectcoördinator", 
                        'tel' => "06-27 08 88 08", 
                        'email' => "b.vanmeerendonk@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Wouter Brak", 
                        'titel' => "Projectcoördinator", 
                        'tel' => "06-55 10 62 57", 
                        'email' => "w.brak@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Ruud Hagen", 
                        'titel' => "Projectmedewerker", 
                        'tel' => "030-237 23 10", 
                        'email' => "r.hagen@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Petra Beun", 
                        'titel' => "Algemene ondersteuning", 
                        'tel' => "030-237 23 00", 
                        'email' => "p.beun@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Wouter Brak", 
                        'titel' => "Projectcoördinator", 
                        'tel' => "06-55 10 62 57", 
                        'email' => "w.brak@grondbalans.nl")
                    );?>
                </div>
            </div>
            <div class="contact__cards--item">
                <h3>Regio Noordwest</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Martien Bos", 
                        'titel' => "Regioverantwoordelijk", 
                        'tel' => "06-45 72 02 13", 
                        'email' => "m.bos@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Bob Schotten", 
                        'titel' => "Regioverantwoordelijk", 
                        'tel' => "06-46 64 85 42", 
                        'email' => "b.schotten@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Noortje van Egmond", 
                        'titel' => "Projectmedewerker", 
                        'tel' => "072-576 32 40", 
                        'email' => "n.vanegmond@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Grondbanken", 
                        'titel' => "Alkmaar | Middenmeer", 
                        'tel' => "072-576 32 40", 
                        'email' => "n.vanegmond@grondbalans.nl")
                    );?>
                </div>
            </div>
            <div class="contact__cards--item">
                <h3>Regio Middenoost</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Joris van den Pol", 
                        'titel' => "Regioverantwoordelijk", 
                        'tel' => "06-27 08 88 09", 
                        'email' => "j.vandenpol@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Coen Rebel", 
                        'titel' => "Projectcoördinator", 
                        'tel' => "06-27 08 88 00", 
                        'email' => "c.rebel@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Hanneke van Ginkel", 
                        'titel' => "Projectmedewerker", 
                        'tel' => "030-237 23 01", 
                        'email' => "h.vanginkel@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Lars Streefland", 
                        'titel' => "Junior Projectcöordinator", 
                        'tel' => "06-82 96 51 48", 
                        'email' => "l.streefland@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Grondbanken", 
                        'titel' => "Almere | Bunnik | Ermelo | Nieuwegein", 
                        'tel' => "06-82 96 51 48", 
                        'email' => "l.streefland@grondbalans.nl")
                    );?>
                </div>
            </div>
        </div>
        <div class="contact__cards--row">
            <div class="contact__cards--item">
                <h3>Regio Noordoost</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Dirk Naberman", 
                        'titel' => "Directeur Noordoost", 
                        'tel' => "06-83 52 30 75", 
                        'email' => "dirk@grondbalansnoordoost.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Rick Jansen", 
                        'titel' => "Projectcoördinator", 
                        'tel' => "06-83 69 52 19", 
                        'email' => "rick@grondbalansnoordoost.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Janneke Knobbe", 
                        'titel' => "Projectmedewerker", 
                        'tel' => "0521-52 19 30", 
                        'email' => "janneke@grondbalansnoordoost.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Grondbanken", 
                        'titel' => "Projectmedewerker", 
                        'tel' => "0521-52 19 30", 
                        'email' => "janneke@grondbalansnoordoost.nl")
                    );?>
                </div>
            </div>
            <div class="contact__cards--item">
                <h3>Regio Noord</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Mimmo Siligato", 
                        'titel' => "Regioverantwoordelijk", 
                        'tel' => "06-51 79 01 92", 
                        'email' => "mimmo@grondbalansnoordoost.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Tamara Bol", 
                        'titel' => "Projectmedewerker", 
                        'tel' => "0521-52 19 30", 
                        'email' => "tamara@grondbalansnoordoost.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Grondbanken", 
                        'titel' => "Franeker | Groningen | Leeuwarden", 
                        'tel' => "0521-52 19 30", 
                        'email' => "tamara@grondbalansnoordoost.nl")
                    );?>
                </div>
            </div>
            <div class="contact__cards--item">
                <h3>Bedrijfsvoering</h3>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Linda Dudink", 
                        'titel' => "Eigenaar/bestuurder", 
                        'tel' => "06-27 08 88 01", 
                        'email' => "l.dudink@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Wendy Stolwijk", 
                        'titel' => "Management assistente", 
                        'tel' => "06-46 64 85 48", 
                        'email' => "w.stolwijk@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Evelyn Praat", 
                        'titel' => "Financiën", 
                        'tel' => "072-576 32 32", 
                        'email' => "e.praat@grondbalans.nl")
                    );?>
                </div>
                <div class="contact__cards--info">
                    <?php get_template_part('template-parts/contact', 'persoon', 
                    $args = array(
                        'foto' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-8wKPrU38/w:250/h:250/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/01/09-Dirkjan.jpg", 
                        'naam' => "Richard Warmenhoven", 
                        'titel' => "ICT", 
                        'tel' => "06-22 23 41 20", 
                        'email' => "r.warmenhoven@grondbalans.nl")
                    );?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>