<main>
    <div class="container mt-5 p-3 shadow-lg" id="pass-gen">

        <!-- FORM -->
        <form method="GET">
            <div class="form-group">
                <label for="inputNumber" class="fw-bold">Lunghezza password:</label>
                <input type="number" class="form-control mt-2" id="inputNumber" name="number" required>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-info" id="submitBtn">Invia</button>
                <button type="button" class="btn btn-danger ms-2" id="denyBtn" onclick="window.location.href='index.php'">Annulla</button>
            </div>
        </form>

        <?php
        // Verifica se il form è stato inviato correttamente
        if (isset($_GET['number'])) {
            $password_length = (int)$_GET['number'];

            // Genera la password casuale
            $random_password = generateRandomPassword($password_length);

            // Mostra l'alert con la password generata
            echo '<div class="alert bg-success bg-opacity-50 text-white mt-3" role="alert">';
            echo 'La password generata è: ' . $random_password;
            echo '</div>';
        }
        ?>

    </div>
</main>