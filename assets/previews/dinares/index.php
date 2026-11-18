<?php
// Iniciar sesión para verificar si el usuario ya está logueado
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/png" href="./src/IMG/logopanchis.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Panachi's Restaurante - La mejor gastronomía Santandereana. Platos típicos, menú ejecutivo y eventos especiales.">
  <title>Panachi's Restaurante | Sabor Santandereano</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="./src/CSS/style-landing.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <nav class="navbar">
    <div class="container">
      <a href="#" class="logo">
        <img src="./src/IMG/logopanchis.png" alt="Panachi's"
          style="position: absolute; top: -30px; left: 0; height: 100px; max-width: none; filter: drop-shadow(2px 2px 2px #000000);">
        <span class="logo-text">Restaurante</span>
      </a>
      <button class="hamburger" aria-label="Abrir menú">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="nav-links">
        <a href="#nosotros" class="nav-link">Nosotros</a>
        <a href="#menu" class="nav-link">Menú</a>
        <a href="#eventos" class="nav-link">Eventos</a>
        <a href="#reservas" class="nav-link">Cotizaciones</a>
        <a href="#horario" class="nav-link">Horario</a>
        <?php if (isset($_SESSION['logueado']) && $_SESSION['logueado'] === true): ?>
          <a href="src/PHP/dash.php" class="btn btn-primary nav-btn">Dashboard</a>
        <?php else: ?>
          <button id="loginBtn" class="btn btn-primary nav-btn">Iniciar Sesión</button>
        <?php endif; ?>
      </div>
    </div>
  </nav>

  <section class="hero">
    <div class="container hero-content">
      <h1>Sabor Santandereano</h1>
      <p>Tradición, cultura y el mejor sazón de la región en tu mesa.</p>
      <a href="#menu" class="btn btn-primary">Ver Menú</a>
    </div>
  </section>

  <section id="nosotros" class="about">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Nuestra Historia</h2>
        <p class="section-subtitle">Más que un restaurante, somos una tradición familiar dedicada a preservar los
          sabores auténticos de Santander.</p>
      </div>
      <div class="about-grid">
        <div class="about-text">
          <p>En Panachi's Restaurante, nos enorgullece ofrecer lo mejor de la gastronomía de Santander. Desde nuestra
            famosa carne oreada hasta el tradicional mute, cada plato está preparado con recetas ancestrales y los
            ingredientes más frescos de la región.</p>
          <p style="margin-top: 1rem;">Con más de 15 años de experiencia, hemos construido una reputación basada en la calidad, 
            el sabor auténtico y la atención personalizada. Nuestro compromiso es hacer que cada visita sea una 
            experiencia memorable, donde la tradición culinaria santandereana cobra vida en cada bocado.</p>
        </div>
        <div class="about-images" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
          <img src="./src/IMG/481998915_1197675082360421_3217062390045456536_n.jpg" alt="Interior del restaurante" class="about-img" style="width: 100%; height: 200px; object-fit: cover; border-radius: var(--radius-md); box-shadow: var(--shadow-md);">
          <img src="./src/IMG/WhatsApp Image 2025-08-02 at 6.16.50 PM.jpeg" alt="Ambiente acogedor" class="about-img" style="width: 100%; height: 200px; object-fit: cover; border-radius: var(--radius-md); box-shadow: var(--shadow-md);">
          <img src="./src/IMG/WhatsApp Image 2025-08-02 at 6.19.09 PM.jpeg" alt="Detalles del restaurante" class="about-img" style="width: 100%; height: 200px; object-fit: cover; border-radius: var(--radius-md); box-shadow: var(--shadow-md);">
          <img src="./src/IMG/WhatsApp Image 2025-08-02 at 6.19.09 PM (1).jpeg" alt="Espacio familiar" class="about-img" style="width: 100%; height: 200px; object-fit: cover; border-radius: var(--radius-md); box-shadow: var(--shadow-md);">
        </div>
      </div>
    </div>
  </section>

  <section id="menu" class="menu">
    <div class="container">
      <h2 class="section-title">Nuestro Menú</h2>
      <p class="section-subtitle">Descubre nuestros platos típicos y la variedad de cada día.</p>

      <div class="menu-tabs">
        <button class="tab-btn active" data-tab="fijo">Carta Tradicional</button>
        <button class="tab-btn" data-tab="diario">Menú del Día</button>
      </div>

      <div id="menu-content" class="menu-grid">
        <!-- Contenido JS -->
      </div>
    </div>
  </section>

  <section id="eventos" class="events">
    <div class="container">
      <h2 class="section-title">Eventos Especiales</h2>
      <p class="section-subtitle">Celebra tus momentos más importantes con nosotros.</p>
      <div id="eventos-content" class="events-grid">
        <!-- Contenido JS -->
      </div>
      <div style="text-align: center; margin-top: 3rem;">
        <a href="#reservas" class="btn btn-secondary"
          style="border-color: var(--color-secondary); color: var(--color-secondary);">Cotizar Evento</a>
      </div>
    </div>
  </section>

  <section id="reservas" class="contact">
    <div class="container">
      <div class="contact-grid" style="grid-template-columns: 1fr;">
        <div class="reservation-form">
          <h2 class="section-title" style="text-align: center;">Cotiza tu Evento</h2>

          <form id="quoteForm" class="form-container active-form">

            <p style="margin-bottom: 2rem; text-align: center;">Cotiza tu evento especial: cumpleaños, corporativos,
              cenas navideñas y más.</p>

            <div class="form-grid">
              <div class="form-group">
                <label class="form-label">Nombres</label>
                <input type="text" class="form-input" name="nombres" pattern="^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$" title="Solo se permiten letras y espacios" maxlength="100" required>
              </div>

              <div class="form-group">
                <label class="form-label">Apellidos</label>
                <input type="text" class="form-input" name="apellidos" pattern="^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$" title="Solo se permiten letras y espacios" maxlength="100" required>
              </div>

              <div class="form-group">
                <label class="form-label">Número de Documento</label>
                <input type="text" inputmode="numeric" class="form-input" name="documento" pattern="^[0-9]{7,15}$" title="El documento debe tener entre 7 y 15 números" maxlength="15" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
              </div>

              <div class="form-group">
                <label class="form-label">Teléfono</label>
                <input type="text" inputmode="numeric" class="form-input" name="telefono" placeholder="+57 300 123 4567" pattern="^\+?[0-9\s]{7,15}$" title="Ingrese un número telefónico válido, puede incluir '+' al inicio" maxlength="15" oninput="this.value = this.value.replace(/[^\+0-9\s]/g, '')" required>
              </div>

              <div class="form-group">
                <label class="form-label">Correo Electrónico</label>
                <input type="email" class="form-input" name="email" maxlength="100" required>
              </div>

              <div class="form-group">
                <label class="form-label">Fecha del Evento</label>
                <input type="date" class="form-input" name="fecha" required>
              </div>

              <div class="form-group">
                <label class="form-label">Número de Personas</label>
                <input type="text" inputmode="numeric" class="form-input" name="personas" pattern="^(1[0-9]|[2-9][0-9]|[1-9][0-9]{2}|1000)$" title="Debe ser entre 10 y 1000 personas" maxlength="4" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
              </div>

              <div class="form-group">
                <label class="form-label">Tipo de Evento</label>
                <select class="form-input" name="tipo" required>
                  <option value="">Seleccione...</option>
                  <option>Cumpleaños</option>
                  <option>Evento Corporativo</option>
                  <option>Cena Navideña</option>
                  <option>Bautizo/Primera Comunión</option>
                  <option>Reunión Familiar</option>
                  <option>Otro</option>
                </select>
              </div>

              <div class="form-group form-group-full">
                <label class="form-label">Detalles del Evento</label>
                <textarea class="form-input" name="detalles" rows="5" maxlength="500" required
                  placeholder="Describe tu evento: tipo de comida deseada, decoración, música, servicios adicionales, presupuesto estimado, etc."></textarea>
              </div>

              <div class="form-group form-group-full">
                <button type="submit" class="btn btn-primary" style="width: 100%;">Solicitar Cotización</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div id="horario" class="info-box">
        <h2 class="section-title" style="text-align: left;">Horarios y Contacto</h2>
        <div class="hours-box">
          <div class="hours-row">
            <span>Lunes a Viernes</span>
            <span id="hours-lv">11:00 AM - 02:30 PM</span>
          </div>
          <div class="hours-row">
            <span>Sábados y Domingos</span>
            <span id="hours-sd">10:00 AM - 03:00 PM</span>
          </div>
          <div class="hours-row" style="margin-top: 2rem; border-bottom: none; font-weight: 700;">
            <span>Teléfono:</span>
            <span>+57 320 4156 818</span>
          </div>
          <div class="hours-row" style="border-bottom: none; font-weight: 700;">
            <span>Dirección:</span>
            <span>Calle 32 # 32-90, Bucaramanga</span>
          </div>
        </div>

        <div class="map-container"
          style="margin-top: 2rem; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
          <iframe
            src="https://maps.google.com/maps?q=Calle+32+%23+32-90,+Bucaramanga,+Santander&t=&z=15&ie=UTF8&iwloc=&output=embed"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2025 Panachi's Restaurante. Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- Login Modal -->
  <div id="loginModal" class="modal">
    <div class="modal-content">
      <span class="close-modal">&times;</span>
      <h2 style="text-align: center; margin-bottom: 2rem;">Iniciar Sesión</h2>
      <p style="text-align: center; margin-bottom: 1.5rem; color: var(--color-text);">
        Accede al sistema de gestión DINARES
      </p>
      <div style="text-align: center;">
        <a href="src/PHP/Login.php" class="btn btn-primary" style="width: 100%; display: inline-block;">
          Ir al Login
        </a>
      </div>
    </div>
  </div>

  <script type="module" src="./src/JS/landing.js"></script>
</body>

</html>
