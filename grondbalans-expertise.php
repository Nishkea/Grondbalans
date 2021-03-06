<?php
// Template name: Expertises
get_header();?>

<?php
    $siteUrl = get_site_url();
    $args = array(
        'background' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-4eGHX1Ws/w:auto/h:auto/q:75/https://grondbalans.nl/wp-content/uploads/2020/04/20191029_082019-scaled.jpg",
        'heading' => "ONZE EXPERTISES",
        'content' => "WIJ DOORGRONDEN ELKE VRAAG",
        'button' => "Neem contact met ons op",
        'link' => $siteUrl . "/contact#contact",
    );
    get_template_part( 'template-parts/banner', 'general', $args );
?>
<div class="content">
    <div class="content__container">
        <div class="content__intro">
            <h1>Zorgvuldige <br/> bodemtoepassing</h1>
            <h2>Én de meest economische en duurzame oplossing</h2>
            <p>Maak jouw grondproject tot een succes!<br/>
Wij beschikken over alle expertises die hiervoor nodig zijn:</p>
            <div class="content__line"></div>
        </div>
    </div>
</div>

<div class="expertise">
    <div class="expertise__container">

    <?php get_template_part('template-parts/expertise', 'links', $args = array(
        'id' => "grondstromen",
        'heading' => "SPECIALIST IN GRONDSTROMEN",
        'content' => "Onze kennis en ervaring zetten wij om in praktische en duurzame oplossingen voor alle soorten en kwaliteiten grond en grondtoepassingen. We weten precies wat er speelt in de wereld van grond- en bodembeheer en zijn continu op de hoogte van de actuele wet- en regelgeving. We blijven projecten optimaliseren en helpen jou aan de beste, onafhankelijke oplossing.",
        'button' => "Neem contact met ons op",
        'right' => array('url' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-Mh4GJjT4/w:575/h:350/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/02/Projectrealisatie-e1586427129190.jpg"),
        'image' => '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="88px" height="88px" viewBox="0 0 88 88" style="enable-background:new 0 0 88 88;" xml:space="preserve">
            <style type="text/css">
                .st0{fill:#000000;}
            </style>
            <path class="st0" d="M29.31,36.47c-2.64-0.16-5.17-1.54-6.69-3.94c-2.14-3.39-1.61-7.81,1.25-10.61c0.45-0.45,0.95-0.84,1.49-1.18
                c3.81-2.4,8.79-1.39,11.4,2.2c0.79-0.75,1.62-1.46,2.5-2.11c-0.31-0.41-0.65-0.81-1.01-1.17c-3.88-3.91-9.95-4.63-14.64-1.73
                c-5.54,3.44-7.24,10.73-3.79,16.27c2.05,3.3,5.47,5.24,9.06,5.53C28.96,38.61,29.1,37.53,29.31,36.47"/>
            <path class="st0" d="M65.48,83.28c0.29-0.3,0.56-0.63,0.83-0.98c0.53-0.7,0.93-1.4,1.24-2.06l6.58,3.03h-8.65V83.28z M41.09,80.22
                c0.3,0.66,0.7,1.36,1.22,2.07c0.26,0.35,0.54,0.68,0.83,0.99h-8.68L41.09,80.22z M66.93,46.46V58c0,6.97-5.67,12.64-12.64,12.64
                S41.65,64.97,41.65,58V46.46H66.93z M39.04,40.2c0-4.14,1.66-7.9,4.35-10.66v3.34c0,1.14,0.92,2.06,2.06,2.06
                c1.14,0,2.06-0.92,2.06-2.06v-6.35c1.46-0.73,3.05-1.23,4.72-1.46v10.34c0,1.14,0.92,2.06,2.06,2.06c1.14,0,2.06-0.92,2.06-2.06
                V25.09c1.68,0.23,3.27,0.73,4.73,1.46v6.35c0,1.14,0.92,2.06,2.06,2.06c1.14,0,2.06-0.92,2.06-2.06v-3.34
                c2.69,2.75,4.35,6.51,4.35,10.65v2.13H39.04V40.2z M45.73,79.97c-0.84-1.08-1.21-2.18-1.36-2.82c0.4-0.83,0.62-1.75,0.62-2.69v-2.52
                c2.66,1.78,5.86,2.82,9.29,2.82s6.63-1.04,9.29-2.82v2.52c0,0.99,0.24,1.95,0.68,2.81c-0.18,0.65-0.56,1.69-1.36,2.7
                c-1.74,2.2-4.64,3.31-8.61,3.31C50.33,83.28,47.45,82.17,45.73,79.97 M84.37,83.47L68.9,76.33c-0.73-0.34-1.2-1.07-1.2-1.87v-6.42
                c2.1-2.8,3.34-6.28,3.34-10.04V46.46h4.35c1.14,0,2.06-0.92,2.06-2.06c0-1.14-0.92-2.06-2.06-2.06h-1.73V40.2
                c0-6.64-3.36-12.51-8.47-16.01v-1.31c0-1.14-0.92-2.06-2.06-2.06c-0.86,0-1.6,0.53-1.91,1.29c-1.54-0.59-3.18-0.99-4.88-1.18v-1.82
                c0-1.14-0.92-2.06-2.06-2.06c-1.14,0-2.06,0.92-2.06,2.06v1.82c-1.7,0.18-3.34,0.58-4.88,1.18c-0.31-0.75-1.05-1.29-1.91-1.29
                c-1.14,0-2.06,0.92-2.06,2.06v1.31c-5.11,3.49-8.47,9.37-8.47,16.01v2.13h-1.73c-1.14,0-2.06,0.92-2.06,2.06
                c0,1.14,0.92,2.06,2.06,2.06h4.35V58c0,3.76,1.25,7.24,3.35,10.04v6.42c0,0.8-0.47,1.54-1.2,1.87L24.2,83.47
                c-0.88,0.41-1.36,1.37-1.15,2.31c0.21,0.94,1.04,1.62,2.01,1.62H83.5c0.97,0,1.81-0.67,2.01-1.62
                C85.73,84.83,85.25,83.87,84.37,83.47"/>
            <path class="st0" d="M31.03,52l-3.86-0.02l0.02-4.48c-0.01-0.79-0.59-1.47-1.37-1.6c-2.16-0.47-4.22-1.33-6.07-2.54
                c-0.63-0.42-1.45-0.36-2.02,0.14l-3.17,3.15l-3.58-3.62l3.17-3.15c0.56-0.55,0.66-1.43,0.22-2.09c-1.19-1.87-2.03-3.94-2.48-6.11
                c-0.17-0.75-0.82-1.28-1.59-1.29l-4.5-0.02l0.02-5.11l4.48,0.02c0.78,0,1.46-0.54,1.63-1.31c0.47-2.16,1.33-4.22,2.54-6.07
                c0.43-0.66,0.34-1.52-0.22-2.07l-3.15-3.17l3.62-3.58l3.15,3.17c0.55,0.56,1.43,0.66,2.09,0.22l0.18-0.11
                c1.82-1.13,3.82-1.93,5.92-2.36c0.76-0.16,1.31-0.84,1.31-1.62l0.02-4.48l5.11,0.02V8.4c-0.02,0.8,0.54,1.49,1.32,1.65
                c2.17,0.47,4.23,1.34,6.08,2.56c0.65,0.43,1.52,0.34,2.07-0.22l3.17-3.15l3.58,3.62l-3.19,3.12c-0.43,0.42-0.58,1.03-0.44,1.59
                c1.64-0.65,3.35-1.13,5.13-1.44l2.02-2c0.65-0.65,0.65-1.7,0-2.34l0,0l-5.93-6.07c-0.64-0.65-1.69-0.65-2.34,0l0,0l-3.45,3.39
                c-1.49-0.85-3.08-1.51-4.72-1.98l0.03-4.84c0.01-0.92-0.73-1.66-1.64-1.67L25.78,0.6c-0.91-0.01-1.66,0.73-1.67,1.64l-0.03,4.84
                c-1.63,0.44-3.2,1.07-4.68,1.88l-3.44-3.4c-0.64-0.65-1.69-0.65-2.34-0.01l0,0L7.57,11.5c-0.65,0.65-0.65,1.69,0,2.34l0,0l3.39,3.43
                c-0.84,1.49-1.5,3.07-1.96,4.72l-4.84-0.03c-0.92-0.01-1.66,0.73-1.67,1.64l-0.05,8.42c-0.01,0.92,0.73,1.66,1.64,1.67l4.84,0.03
                c0.44,1.63,1.07,3.2,1.88,4.68l-3.45,3.39c-0.65,0.65-0.65,1.69-0.01,2.34l0,0l5.95,6.05c0.65,0.65,1.69,0.65,2.34,0.01l0,0
                l3.44-3.41c1.49,0.85,3.08,1.51,4.72,1.98l-0.03,4.84c-0.01,0.91,0.73,1.66,1.64,1.67l7.39,0.04C32.14,54.27,31.54,53.16,31.03,52"
            />
        </svg>',
    ));?>

    <?php get_template_part('template-parts/expertise', 'links', $args = array(
        'id' => "projectrealisatie",
        'heading' => "PROJECTREALISATIE",
        'content' => "Van onderzoek en advies naar voorbereiding en uitvoering: wij regelen het. We coördineren het transport met onze logistieke partners en verzorgen alle nodige documenten, registraties en rapportages. Je hebt dus één aanspreekpunt en bespaart zowel tijd als geld. Hoe eerder we betrokken worden, hoe meer we het verschil kunnen maken.",
        'button' => "Neem contact met ons op",
        'right' => array('url' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-BCzEjw13/w:575/h:349/q:75/https://grondbalans.nl/wp-content/uploads/2020/05/94b3fd3e-ee6d-4372-bc09-c284f646cfa8-e1586425823324.jpg"),
        'image' => '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="88px" height="88px" viewBox="0 0 88 88" style="enable-background:new 0 0 88 88;" xml:space="preserve">
    <style type="text/css">
        .st0{fill:#FFFFFF;}
    </style>
    <path class="st0" d="M76.49,72.81L76.49,72.81l-8.47-8.48c2.25-2.98,3.47-6.6,3.47-10.4c0-4.63-1.81-8.99-5.1-12.26
        c-2.54-2.53-5.75-4.2-9.28-4.81c-0.19-0.03-0.37-0.06-0.56-0.09V11.42l19.94-3.66V72.81z M56.56,80.65v-9.56
        c0.19-0.03,0.37-0.05,0.56-0.09c2.71-0.47,5.22-1.56,7.4-3.18l9.43,9.44L56.56,80.65z M49,65.23c-1.38-0.61-2.62-1.47-3.7-2.55
        c-2.35-2.34-3.64-5.45-3.64-8.75c0-3.31,1.29-6.41,3.64-8.75c1.08-1.08,2.33-1.93,3.71-2.55c1.62-0.72,3.35-1.07,5.07-1.07
        c3.25,0,6.46,1.26,8.84,3.62c2.35,2.34,3.64,5.45,3.64,8.75s-1.29,6.41-3.64,8.75C59.27,66.3,53.68,67.32,49,65.23 M51.6,80.63
        l-19.88-3.96V7.42l19.88,3.97v25.39c-1.59,0.23-3.14,0.67-4.62,1.34c-1.93,0.86-3.67,2.06-5.18,3.56c-3.29,3.27-5.1,7.63-5.1,12.26
        s1.81,8.99,5.1,12.26c1.51,1.5,3.25,2.7,5.18,3.56c1.48,0.66,3.04,1.11,4.62,1.34V80.63z M26.77,76.63L6.83,80.24V11.28L26.77,7.4
        V76.63z M81.45,77.77V1.81L54.1,6.83L29.25,1.88L1.87,7.2v78.97l27.35-4.96l24.32,4.85l0.49,0.12l24.12-4.7l4.62,4.63l3.51-3.5
        L81.45,77.77z"/>
    </svg>
',
    ));?>

    <?php get_template_part('template-parts/expertise', 'rechts', $args = array(
        'id' => "vraagenaanbod",
        'heading' => "VRAAG EN AANBOD",
        'content' => "Sinds onze oprichting in 1997 bemiddelen wij tussen vraag en aanbod van grond en baggerspecie. Onze kennisintensieve netwerkorganisatie met vele partners maakt ons uniek. Hierdoor komen we met slimme oplossingen en kunnen we grond tegen een gunstig tarief leveren en afvoeren. Altijd op het gewenste moment en volgens afspraak.",
        'button' => "Plaats aanvraag",
        'link' => $siteUrl . "/vraag-en-aanbod",
        'right' => array('url' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-i7qq9JuJ/w:575/h:350/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Grondbalans-vraag-aanbod-grond-en-baggerspecie.jpg"),
        'image' => '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="88px" height="88px" viewBox="0 0 88 88" style="enable-background:new 0 0 88 88;" xml:space="preserve">
    <style type="text/css">
        .st0{fill:#E4170E;}
    </style>
    <path class="st0" d="M81.69,19.91c0-3.24-2.57-5.81-5.8-5.81H44.16c-3.24,0-5.95,2.57-5.95,5.81v16.07v19.31l4.16-3.76
        c0.19-0.18,0.41-0.34,0.57-0.48c1.9-1.75,2.39-2.03,4.87-1.98c0.34,0.01,0.74,0.01,1.23,0.01h26.85c3.24,0,5.8-2.62,5.8-5.85V19.91z
        M85.83,19.91v23.31c0,5.52-4.42,9.99-9.94,9.99H49.04c-0.53,0-0.96,0-1.32-0.01c-0.38-0.01-0.81-0.01-0.97,0.01
        c-0.17,0.11-0.6,0.5-1.01,0.88c-0.16,0.15-0.35,0.31-0.54,0.49l-7.6,6.92c-0.61,0.55-1.5,0.7-2.25,0.36
        c-0.75-0.33-1.28-1.07-1.28-1.89V38.03H12.38c-3.24,0-5.92,2.65-5.92,5.89v23.3c0,3.24,2.68,5.78,5.92,5.78h29.99
        c0.52,0,1,0.24,1.38,0.59l6.19,5.71V59.61c0-1.14,0.93-2.07,2.07-2.07c1.14,0,2.07,0.93,2.07,2.07v24.37c0,0.82-0.47,1.55-1.22,1.88
        c-0.27,0.12-0.54,0.16-0.82,0.16c-0.51,0-1.01-0.21-1.4-0.56l-9.08-8.33H12.38c-5.52,0-10.06-4.4-10.06-9.92v-23.3
        c0-5.52,4.54-10.03,10.06-10.03h21.69V19.91c0-5.52,4.57-9.95,10.09-9.95h31.73C81.41,9.96,85.83,14.4,85.83,19.91 M25.02,52.98
        c-1.14,0-2.07,0.93-2.07,2.07c0,1.14,0.93,2.07,2.07,2.07h0.17c1.14,0,2.07-0.93,2.07-2.07c0-1.14-0.93-2.07-2.07-2.07H25.02z
        M17.82,52.98c-1.14,0-2.07,0.93-2.07,2.07c0,1.14,0.93,2.07,2.07,2.07H18c1.14,0,2.07-0.93,2.07-2.07c0-1.14-0.93-2.07-2.07-2.07
        H17.82z M59.56,38.56c-1.14,0-2.02,0.93-2.02,2.07v0.02c0,1.14,0.88,2.06,2.02,2.06s2.07-0.94,2.07-2.08
        C61.63,39.49,60.7,38.56,59.56,38.56 M66.22,27.9c0,2.53-1.84,4.07-3.19,5.2c-0.51,0.43-1.46,1.21-1.46,1.5
        c0.01,1.14-0.91,2.06-2.05,2.06H59.5c-1.14,0-2.06-0.89-2.07-2.02c-0.02-2.24,1.62-3.59,2.93-4.69c1.03-0.87,1.71-1.48,1.71-2.03
        c0-1.13-0.92-2.05-2.05-2.05c-1.13,0-2.05,0.92-2.05,2.05c0,1.14-0.93,2.07-2.07,2.07s-2.07-0.93-2.07-2.07
        c0-3.41,2.78-6.19,6.19-6.19S66.22,24.48,66.22,27.9"/>
    </svg>',
    ));?>

    <?php get_template_part('template-parts/expertise', 'rechts', $args = array(
        'id' => "grondbanken",
        'heading' => "GRONDBANKEN",
        'content' => "Vrijgekomen partijen grond proberen wij direct te hergebruiken. Helaas kan dit niet altijd. Doordat we beschikken over een landelijk netwerk van grondbanken kunnen we altijd alle grond innemen (ook met spoed). Indien nodig wordt de grond hier bewerkt en vervolgens hoogwaardig hergebruikt.",
        'button' => "Bekijk grondbanken",
        'link' => $siteUrl . "/grondbanken",
        'right' => array('url' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-u16B96Ow/w:575/h:350/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/04/Grondbank-e1586268864948.png"),
        'image' => '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="88px" height="88px" viewBox="0 0 88 88" style="enable-background:new 0 0 88 88;" xml:space="preserve">
        <style type="text/css">
            .st0{fill:#E4170E;}
        </style>
        <g>
            <path class="st0" d="M82.74,82.2H5.35c0.13-1.13,0.39-2.24,0.77-3.3h12.76c0.91,0,1.64-0.74,1.64-1.64c0-0.91-0.74-1.64-1.64-1.64
                H7.82c3.06-4.42,8.43-6.92,14.03-6.11c0.7,0.1,1.39-0.26,1.7-0.89c3.51-7.03,10.56-11.39,18.41-11.39c6.56,0,12.79,3.18,16.65,8.5
                c0.43,0.59,1.2,0.83,1.89,0.58c0.36-0.13,0.73-0.25,1.1-0.36c0.01,0,0.02-0.01,0.04-0.01c1.48-0.42,3-0.64,4.56-0.64
                c6.81,0,12.84,4.15,15.33,10.32H40.17c-0.91,0-1.64,0.74-1.64,1.64c0,0.91,0.74,1.64,1.64,1.64h42.32
                c0.17,0.96,0.26,1.93,0.26,2.91C82.74,81.94,82.74,82.07,82.74,82.2 M65.78,51.2l-5.52,11.28c-4.4-5.25-10.91-8.4-17.78-8.55
                l5.57-11.39L65.78,51.2z M56.72,40.46l5.38,2.63l-1.05,2.15l-5.38-2.63L56.72,40.46z M70.91,16.17c0.52,0.32,1.07,0.59,1.64,0.8
                L61.67,39.23l-1.64-0.8L70.91,16.17z M79.88,11.85c-0.65,1.33-1.98,2.25-3.46,2.4c-2.3,0.22-4.5-0.85-5.74-2.8
                c-0.8-1.26-0.89-2.87-0.23-4.2l0.17-0.36l9.43,4.61L79.88,11.85z M85.4,76.84C83.14,68.1,75.25,62,66.21,62
                c-0.71,0-1.41,0.04-2.11,0.11l4.63-9.47l0.01,0c0.23,0.11,0.48,0.17,0.72,0.17c0.61,0,1.19-0.34,1.48-0.92
                c0.4-0.81,0.06-1.8-0.75-2.19l-6.18-3.02l1.77-3.62c0.19-0.39,0.22-0.84,0.08-1.25s-0.44-0.75-0.83-0.94l-0.39-0.19l11.3-23.11
                c0.27,0,0.55-0.02,0.83-0.04c2.61-0.25,4.94-1.87,6.09-4.22l0.2-0.41c0.1,0.02,0.2,0.03,0.3,0.03c0.61,0,1.19-0.34,1.48-0.92
                c0.4-0.81,0.06-1.8-0.76-2.2L69.51,2.69c-0.82-0.4-1.8-0.06-2.2,0.76c-0.33,0.68-0.15,1.47,0.39,1.95L67.5,5.8
                c-1.15,2.35-0.99,5.19,0.41,7.4c0.15,0.23,0.3,0.45,0.47,0.67l-11.3,23.11l-0.39-0.19c-0.81-0.4-1.8-0.06-2.19,0.75l-1.77,3.62
                l-6.18-3.02c-0.81-0.4-1.8-0.06-2.19,0.76c-0.4,0.81-0.06,1.8,0.76,2.2l0,0l-6.38,13.05c-3.36,0.46-6.59,1.63-9.47,3.45
                c-3.37,2.13-6.15,5.06-8.09,8.52c-0.47-0.04-0.94-0.06-1.4-0.06c-7,0-13.37,4.13-16.23,10.51c-1.03,2.29-1.55,4.73-1.55,7.26
                c0,0.44,0.17,0.85,0.48,1.16c0.31,0.31,0.73,0.48,1.16,0.48h80.65c0.84,0,1.54-0.63,1.63-1.46c0.08-0.75,0.13-1.5,0.13-2.21
                C86.02,80.13,85.81,78.45,85.4,76.84"/>
            <path class="st0" d="M50.37,70.2c-0.51,0-1.01-0.23-1.33-0.68c-2.65-3.65-6.91-5.83-11.41-5.83c-0.91,0-1.64-0.74-1.64-1.64
                s0.73-1.64,1.64-1.64c5.54,0,10.8,2.68,14.06,7.18c0.53,0.73,0.37,1.76-0.36,2.29C51.04,70.09,50.7,70.2,50.37,70.2"/>
            <path class="st0" d="M44,78.89c-0.11,0-0.22-0.01-0.32-0.03c-0.11-0.02-0.21-0.05-0.31-0.09c-0.1-0.04-0.2-0.09-0.28-0.15
                c-0.09-0.06-0.17-0.13-0.25-0.2c-0.31-0.31-0.48-0.73-0.48-1.16c0-0.11,0.01-0.22,0.03-0.32c0.02-0.1,0.05-0.21,0.09-0.31
                c0.04-0.1,0.09-0.19,0.15-0.28c0.06-0.09,0.13-0.17,0.2-0.25c0.08-0.08,0.16-0.14,0.25-0.21c0.09-0.06,0.18-0.11,0.28-0.15
                c0.1-0.04,0.2-0.07,0.31-0.09c0.53-0.11,1.1,0.07,1.48,0.45c0.08,0.08,0.14,0.16,0.2,0.25c0.06,0.09,0.11,0.18,0.15,0.28
                c0.04,0.1,0.07,0.2,0.1,0.31c0.02,0.11,0.03,0.22,0.03,0.32c0,0.43-0.18,0.86-0.48,1.16C44.86,78.72,44.43,78.89,44,78.89"/>
        </g>
        </svg>',
    ));?>

    <?php get_template_part('template-parts/expertise', 'links', $args = array(
        'id' => "baggerbalans",
        'heading' => "BAGGERBALANS",
        'content' => "Ons bedrijfsonderdeel Baggerbalans beschikt over verregaande lokale marktkennis en kennis van wet- en regelgeving als het gaat om baggerstromen. Hierdoor kunnen wij altijd voorzien in een juiste oplossing voor vrijgekomen baggerspecie. Wij bemiddelen, beheren, coördineren en certificeren.",
        'button' => "Meer informatie",
        'link' => "/baggerbalans",
        'right' => array('url' => "https://mlmotgafwbhj.i.optimole.com/u0PFPh0-fWfjytCu/w:575/h:350/q:75/rt:fill/g:ce/https://grondbalans.nl/wp-content/uploads/2020/06/werken-bij-grondbalans-1920-01.jpg"),
        'image' => '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="88px" height="88px" viewBox="0 0 88 88" style="enable-background:new 0 0 88 88;" xml:space="preserve">
        <style type="text/css">
            .baggerbalansfill{fill:#069 !important;}
        </style>
        <g>
            <path class="baggerbalansfill" d="M83.65,85.94c-0.94,0-1.82-0.56-2.2-1.47c-0.87-2.13-3.54-8.14-5.38-10.3c-2.05-2.4-4.46-2.04-8.89-1.13
                c-5.56,1.14-13.18,2.71-19.69-6.82c-1.45-2.13-2.82-3.29-3.76-3.26c-2.14,0.12-4.99,5.51-7.07,9.44
                c-2.41,4.55-4.69,8.85-7.73,10.54c-6.2,3.43-9.36,0.51-12.15-2.07c-1.24-1.15-2.52-2.34-4.24-3.22c-1.15-0.59-2.16-0.74-3.09-0.44
                c-1.55,0.5-2.69,2.18-2.99,2.78c-0.59,1.16-2.01,1.64-3.18,1.05c-1.17-0.58-1.65-1.99-1.07-3.16c0.2-0.4,2.03-3.96,5.74-5.18
                c2.15-0.71,4.49-0.46,6.77,0.73c2.28,1.18,3.94,2.72,5.28,3.96c2.56,2.37,3.43,3.17,6.63,1.4c1.81-1,3.95-5.04,5.84-8.6
                c3.18-6.01,6.19-11.69,11-11.96c2.79-0.17,5.39,1.58,7.95,5.32c4.72,6.92,9.4,5.96,14.81,4.85c4.45-0.91,9.49-1.95,13.45,2.7
                c2.67,3.13,5.81,10.73,6.16,11.58c0.5,1.21-0.09,2.6-1.3,3.09C84.25,85.88,83.95,85.94,83.65,85.94z M70.21,41.25H50.24
                c-1.31,0-2.37-1.06-2.37-2.37c0-1.31,1.06-2.37,2.37-2.37h19.98c1.31,0,2.37,1.06,2.37,2.37C72.59,40.19,71.52,41.25,70.21,41.25z
                M40.55,41.25H20.57c-1.31,0-2.37-1.06-2.37-2.37c0-1.31,1.06-2.37,2.37-2.37h19.98c1.31,0,2.37,1.06,2.37,2.37
                S41.86,41.25,40.55,41.25z M83.65,26.8H63.67c-1.31,0-2.37-1.06-2.37-2.37s1.06-2.37,2.37-2.37h19.98c1.31,0,2.37,1.06,2.37,2.37
                S84.96,26.8,83.65,26.8z M53.99,26.8H34.01c-1.31,0-2.37-1.06-2.37-2.37s1.06-2.37,2.37-2.37h19.98c1.31,0,2.37,1.06,2.37,2.37
                C56.36,25.74,55.3,26.8,53.99,26.8z M24.33,26.8H4.35c-1.31,0-2.37-1.06-2.37-2.37s1.06-2.37,2.37-2.37h19.98
                c1.31,0,2.37,1.06,2.37,2.37S25.64,26.8,24.33,26.8z"/>
        </g>
        </svg>',
    ));?>


    </div>
</div>
<?php get_footer();?>