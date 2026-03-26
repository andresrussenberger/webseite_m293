<?php include "top.php"; ?>

    <form action="https://gibm.becknet.ch/formular/formular.php" method="POST" class="container my-5">
  <fieldset class="border p-4 rounded-3 bg-light">
    <legend class="mb-4 h4">Bei mir bewerben</legend>

    <div class="mb-3">
      <label for="fullname" class="form-label">Vollständiger Name:</label>
      <input type="text" id="fullname" name="fullname" required minlength="5" maxlength="100" placeholder="Max Mustermann" autofocus class="form-control" />
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">E-Mail:</label>
      <input type="email" id="email" name="email" required placeholder="example@mail.com" class="form-control" />
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Passwort:</label>
      <input type="password" id="password" name="password" required minlength="6" class="form-control" />
    </div>

    <div class="mb-3">
      <label for="age" class="form-label">Alter:</label>
      <input type="number" id="age" name="age" required min="16" max="65" class="form-control" />
    </div>

    <div class="mb-3">
      <label for="birthdate" class="form-label">Geburtsdatum:</label>
      <input type="date" id="birthdate" name="birthdate" required class="form-control" />
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Telefonnummer:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9+\s]{6,15}" placeholder="+41 79 123 45 67" class="form-control" />
    </div>

    <div class="mb-3">
      <label for="website" class="form-label">Webseite / Portfolio:</label>
      <input type="url" id="website" name="website" placeholder="https://example.com" class="form-control" />
    </div>

    <div class="mb-3">
      <label for="country" class="form-label">Land:</label>
      <select id="country" name="country" required class="form-select">
        <option value="">Bitte wählen</option>
        <option value="ch">Schweiz</option>
        <option value="de">Deutschland</option>
        <option value="at">Österreich</option>
      </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Geschlecht:</label><br />
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="male" name="gender" value="männlich" required />
        <label class="form-check-label" for="male">Männlich</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="female" name="gender" value="weiblich" />
        <label class="form-check-label" for="female">Weiblich</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" id="other" name="gender" value="divers" />
        <label class="form-check-label" for="other">Divers</label>
      </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Interessen:</label><br />
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="interests" value="programmieren" id="int-programmieren" />
        <label class="form-check-label" for="int-programmieren">Programmieren</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="interests" value="design" id="int-design" />
        <label class="form-check-label" for="int-design">Design</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="interests" value="netzwerke" id="int-netzwerke" />
        <label class="form-check-label" for="int-netzwerke">Netzwerke</label>
      </div>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Motivationsschreiben:</label>
      <textarea id="message" name="message" required minlength="20" maxlength="500" placeholder="Warum willst du dich bewerben?" class="form-control"></textarea>
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status:</label>
      <input type="text" id="status" value="Wird geprüft" readonly class="form-control-plaintext" />
    </div>

    <div class="mb-3">
      <label for="internal" class="form-label">Interner Code:</label>
      <input type="text" id="internal" value="ABC123" disabled class="form-control-plaintext" />
    </div>

    <button type="submit" class="btn btn-primary w-100">Bewerbung absenden</button>
  </fieldset>
</form>

    <footer class="site-footer">
      <p>&copy; 2026 @Andres Russenberger. Alle Rechte vorbehalten.</p>
    </footer>
  </body>
</html>
