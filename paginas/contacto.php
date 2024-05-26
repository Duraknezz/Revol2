<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contacto.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="icon" href="logo1.png">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/3e5cca439c.js" crossorigin="anonymous"></script>
    <link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
    <?php require('../layouts/header.php'); ?>
<body>
    <section id="principalContacto">
        <div class="contenedor">
            <div class="medio-circulo">
                <img src="\imagenes\Editadas\_DSC0015.jpg" width="50%" alt="Descripción de la imagen">
                <h1>Horarios</h1>
                <h2>De lunes a domingo de</h2>

                <strong>
                    <h3>1:00 pm a 9:00 pm</h3>
                </strong>
            </div>
    </section>

    <section id="sociales">
        <div class="contacto">
            <h1>CONTACTO</h1>
        </div>

        <div class="redes">
            <div class="whatsapp">
                <a href=""><img src="..\imagenes\whatsapp.png" alt="Icono de WhatsApp"></a>
            </div>
            <div class="facebook">
                <a href=""><img src="..\imagenes\facebook.png" alt="Icono de Facebook"></a>
            </div>
        </div>

    </section>

    <section class="sucursales">
        <h1 class="sucursales">SUCURSALES</h1>
    </section>

    <section id="contacto">

        <div id="mapita">
            <div id="map">
                <!-- Agrega el script de Leaflet -->
                <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

                <script>
                    // Inicializa el mapa con las coordenadas proporcionadas
                    var mymap = L.map('map').setView([19.729943, -101.198902], 16);

                    // Agrega el mapa de OpenStreetMap como capa base
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '© OpenStreetMap contributors'
                    }).addTo(mymap);

                    // Agrega un marcador en las coordenadas proporcionadas
                    L.marker([19.729943, -101.198902]).addTo(mymap)
                        .bindPopup('Encuéntranos!')
                        .openPopup();
                </script>
            </div>
        </div>
    </section>

    <section id="flecha">
        <div class="direccion">
            <P><i class="em em-arrow_right_hook" aria-role="presentation" aria-label="RIGHTWARDS ARROW WITH HOOK"></i> Av. Torreón Nuevo 519, Vicente Riva Palacio, 58116 Morelia, Mich.</P>
        </div>
    </section>

    <?php require('../layouts/footer.php'); ?>

    </body>

</html>