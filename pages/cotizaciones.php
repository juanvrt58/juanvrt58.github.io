<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PPM9KBKB');</script>
  <!-- End Google Tag Manager -->
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PGM6XX7LRG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PGM6XX7LRG');
</script>
    <meta charset="UTF-8">
    <link rel="icon" href="../Logo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salsa y Miga</title>
    
    <link rel="stylesheet" href="../styles/cotizaciones/cotizaciones-styles.css">
   

    <link rel="stylesheet" href="../recursos/footer.css">
    <link rel="stylesheet" href="../recursos/footer-responsive.css">

    <link rel="stylesheet" href="../recursos/nav.css">

    <!--Links externos-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Yuji+Boku&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PPM9KBKB"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
   

  <header class="header">
    <div class="logo">
      <h1>Salsa&Miga</h1>
    </div>
    <nav class="navbar">
      <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="services.php">Servicios</a></li>
        <li><a href="nosotros.html">Nosotros</a></li>
        <li><a href="menu.html">Menú</a></li>
        <li><a href="cotizaciones.php">Cotizar</a></li>
        <li><a href="galeriasym.html">Galería</a></li>
      </ul>
    </nav>
  </header>
  
  <header class="header-salsa">
    <div class="logo-salsa">
      <h1>Salsa&Miga</h1>
    </div>
    <nav class="navbar-salsa">
      <!-- Botón para activar el menú móvil -->
      <button class="navbar-toggler-salsa" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon-salsa">☰</span>
      </button>
  
      <!-- Menú desplegable -->
      <div class="collapse navbar-collapse-salsa" id="navbarMenu">
        <ul>
        <li><a href="../index.php">Inicio</a></li>
          <li><a href="services.php">Servicios</a></li>
          <li><a href="nosotros.html">Nosotros</a></li>
          <li><a href="menu.html">Menú</a></li>
          <li><a href="cotizaciones.php">Cotizar</a></li>
          <li><a href="galeriasym.html">Galería</a></li>
        </ul>
      </div>
    </nav>
  </header>
      
      

  <div class="form-container" id="form-container">
        <h2>Cotiza tu Catering de <strong>Pizzas ilimitadas </strong></h2>
        <p class="subtitulo">Rellena todos los campos.</p>

        <form action="../app/procesar_formulario.php" method="POST">

            <!-- Tipo de Cliente -->
            <label>Tipo de Cliente:</label>
            <div class="radio-group">
                <input type="radio" name="tipo_cliente" value="Empresa" required> Empresa
                <input type="radio" name="tipo_cliente" value="Particular"> Particular
            </div>

            <input type="text" name="rut" placeholder="RUT" required>
            <input type="text" name="nombre" placeholder="Nombre y Apellido" required>
            <input type="email" name="email" placeholder="Email" required>

            <input type="tel" name="telefono" placeholder="Teléfono" required>
            <input type="text" name="motivo" placeholder="Motivo del Catering" required>

            <input type="number" name="personas" placeholder="N° de Personas" required>
            <input type="text" name="direccion" placeholder="Dirección" required>
            <input type="text" name="comuna" placeholder="Comuna" required>

            <label>Fecha del Servicio:</label>
            <input type="date" name="fecha_servicio" required>

            <label>Hora de Inicio:</label>
            <input type="time" name="hora_inicio" required>

            <label>Hora de Término:</label>
            <input type="time" name="hora_termino" required>

             <!-- Selección de Pizzas 
        <label>Selecciona las pizzas para tu evento:</label>
        <p class="info">Mientras más variedades incluyas, podríamos ajustar el presupuesto para garantizar una experiencia personalizada.</p>

        <fieldset>
        <fieldset>
        <fieldset class="pizzas-selection">
    <legend>Pizzas Clásicas</legend>
    <p class="info">Selecciona las pizzas que te interesan. Recibirás las instrucciones en tu correo.</p>

    <div class="checkbox-group scrollable">
        <label>
            <input type="checkbox" name="pizzas_clasicas[]" value="Margarita">
            <span class="pizza-nombre">Margarita</span>
            <div class="descripcion">Salsa Pomodoro, Mozzarella, Albahaca y Parmesano</div>
        </label>
        <label>
            <input type="checkbox" name="pizzas_clasicas[]" value="Hawaiana">
            <span class="pizza-nombre">Hawaiana</span>
            <div class="descripcion">Salsa Pomodoro, Mozzarella, Jamón de pierna y Piña</div>
        </label>
        <label>
            <input type="checkbox" name="pizzas_clasicas[]" value="Pepperoni">
            <span class="pizza-nombre">Pepperoni</span>
            <div class="descripcion">Salsa Pomodoro, Mozzarella y rodajas de Pepperoni</div>
        </label>
        <label>
            <input type="checkbox" name="pizzas_clasicas[]" value="Del Mar">
            <span class="pizza-nombre">Del Mar</span>
            <div class="descripcion">Salsa Pomodoro, Mozzarella, Queso Azul, Cebolla Caramelizada</div>
        </label>
    </div>
</fieldset>

<fieldset class="pizzas-selection">
    <legend>Pizzas Especiales</legend>

    <div class="checkbox-group scrollable">
        <label>
            <input type="checkbox" name="pizzas_premium[]" value="Carbonara">
            <span class="pizza-nombre">Carbonara</span>
            <div class="descripcion">Salsa Bechamel, Mozzarella, Tocino, Queso Ahumado, Fior di Latte, Rúcula, Parmesano y Oliva</div>
        </label>
        <label>
            <input type="checkbox" name="pizzas_premium[]" value="Norteña">
            <span class="pizza-nombre">Norteña</span>
            <div class="descripcion">Salsa Pomodoro, Mozzarella, Pollo BBQ, Pimentón, Toques de Cilantro, Parmesano y Oliva</div>
        </label>
        <label>
            <input type="checkbox" name="pizzas_premium[]" value="Diablo">
            <span class="pizza-nombre">Diablo</span>
            <div class="descripcion">Salsa Pomodoro, Mozzarella, Chorizo Picante, Ají, Cebolla Morada y Oliva</div>
        </label>
    </div>
</fieldset> -->

<!-- Confirmación de selección -->
<div class="seleccion-confirmacion">
    <p><strong>Importante:</strong> Recibirás un correo con más instrucciones sobre como funciona el proceso de selección de menú.</p>
</div>

  

            <textarea name="comentarios" placeholder="Cuéntanos más"></textarea>

            <label>Sube un documento descriptivo (opcional):</label>
            <input type="file" name="archivo">

             <!-- Aquí se integra el reCAPTCHA -->
  <div class="g-recaptcha" data-sitekey="6Lfmt8oqAAAAAIi08_i5uUTRO0I424nNG5lX6CRq"></div>

<button type="submit">Enviar</button>
</form>

<!-- Script para cargar el widget reCAPTCHA -->

        </form>
    </div>





  <div class="quote-info">
<h2>Contáctanos para cotizaciones</h2>
<p>
    Si prefieres hablar directamente con nosotros, no dudes en contactarnos a través de nuestras redes sociales o por WhatsApp. Estamos aquí para ayudarte a organizar tu evento perfecto.
</p>

<div class="contact-buttons">
    <a href="https://wa.me/56991999301?text=Hola, estoy interesado en sus servicios de catering." rel="noopener" target="_blank" class="btn-contact whatsapp">
        <i class="fab fa-whatsapp"></i> WhatsApp
    </a>
    <a href="https://www.instagram.com/salsaymiga" target="_blank" rel="noopener" class="btn-contact instagram">
        <i class="fab fa-instagram"></i> Instagram
    </a>
</div>
</div>
</section>

<script>
  function toggleNavbar() {
      const navbar = document.querySelector('.navbar ul');
      navbar.classList.toggle('active');
  }
</script>
   
      
      
      <!--Sección Footer-->
      <footer class="footer">
        <div class="footer-columns">
          <!-- Información principal -->
          <div class="footer-column">
            <h3>Salsa y Miga</h3>
            <p>Tu aliado en la creación de eventos inolvidables, con servicios de catering, banquetería y más.</p>
          </div>
          <!-- Enlaces rápidos -->
          <div class="footer-column">
            <h3>Enlaces rápidos</h3>
            <ul>
              <li><a href="../index.html">Inicio</a></li>
              <li><a href="services.html">Servicios</a></li>
              <li><a href="nosotros.html">Nosotros</a></li>
              <li><a href="cotizaciones.html">Cotizaciones</a></li>
              <li><a href="menu.html">Menú</a></li>
            </ul>
          </div>
          <!-- Contacto -->
          <div class="footer-column">
            <h3>Contacto</h3>
            <p>📞 +56 9 91999301</p>
            <p>✉️ <a href="mailto:salsaymiga@gmail.com">contacto@salsaymiga.cl</a></p>
            <p>📍 Santiago, Chile</p>
          </div>
          <!-- Redes sociales -->
          <div class="footer-column">
            <h3>Síguenos</h3>
            <div class="social-buttons">
              <a href="https://www.instagram.com/salsaymiga" rel="noopener noreferrer" target="_blank" class="btn-social instagram">
                <i class="fab fa-instagram"></i> Instagram
              </a>
              <a href="https://www.facebook.com/salsaymiga" rel="noopener noreferrer" target="_blank" class="btn-social facebook">
                <i class="fab fa-facebook-f"></i> Facebook
              </a>
              <a href="https://www.twitter.com/salsaymiga" rel="noopener noreferrer" target="_blank" class="btn-social twitter">
                <i class="fab fa-twitter"></i> Twitter
              </a>
            </div>
          </div>
        </div>
      
      </footer>

  <script src="../js/script.js"></script>
  <script src="../js/services-js.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>



