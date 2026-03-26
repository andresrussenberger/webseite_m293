<?php include "top.php"; ?>
<main>

<section>
  <h2>Bilder</h2>

  <!-- Lokales Bild -->
  <img src="media/images/coast-img.avif" alt="Küste" width="200" />

  <!-- Externes Bild -->
  <img src="https://images.unsplash.com/photo-1773394494764-ca67f5b978cc?q=80&w=685&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Flugzeugfenster" width="200"/>
</section>

<section>
  <h2>Lokales Jazz Audio</h2>

  <audio controls>
    <source src="media/audio/backgroundmusicforvideos-jazz-background-music-338663.mp3" type="audio/mpeg" />
    Dein Browser unterstützt kein Audio.
  </audio>
</section>

<section>
  <h2>Lokales Video</h2>

  <video width="400" controls>
    <source src="media/video/schnee-landschaft.mp4" type="video/mp4" />
    Dein Browser unterstützt kein Video.
  </video>

  <br /><br />

  <iframe width="560" height="315" src="https://www.youtube.com/embed/9f1xUcB9Q0E?si=WOgckz-P-7GqpInW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</section>

<section>
  <h2>Karte</h2>

  <iframe
    src="https://www.google.com/maps?q=Basel&output=embed"
    width="400"
    height="300"
    style="border:0;"
    allowfullscreen=""
    loading="lazy">
  </iframe>
</section>

<section>
  <h2>Kontakt</h2>

  <p>Email: <a href="mailto:info@example.com">info@example.com</a></p>
  <p>Telefon: <a href="tel:+41791234567">+41 79 123 45 67</a></p>
</section>

<nav>
  <h2>Navigation</h2>


  <p>Externer Link: <a href="https://www.google.com" target="_blank">Google</a></p>
</nav>
</main>

    <footer class="site-footer">
      <p>&copy; 2026 @Andres Russenberger. Alle Rechte vorbehalten.</p>
    </footer>
  </body>
</html>
