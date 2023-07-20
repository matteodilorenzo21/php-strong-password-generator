<main>
    <div class="container mt-5 p-3 shadow-lg" id="pass-gen">

        <form method="GET" action="password-display.php">
            <div class="form-group">
                <label for="inputNumber" class="fw-bold">Lunghezza password:</label>
                <input type="number" class="form-control mt-2" id="inputNumber" name="number" value="<?php echo isset($_GET['number']) ? (int)$_GET['number'] : ''; ?>" required>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-info" id="submitBtn">Invia</button>
                <button type="button" class="btn btn-danger ms-2" id="denyBtn" onclick="window.location.href='index.php'">Annulla</button>
            </div>
        </form>

    </div>
</main>