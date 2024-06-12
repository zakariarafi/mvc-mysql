<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ganteng Chat App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <header class="header">
        KELOMPOK 5 GANTENG CHAT APP
    </header>

    <!-- tombol untuk membuka modal -->
    <button class="btn btn-primary fixed-bottom-right" data-bs-toggle="modal" data-bs-target="#chatModal">
        CHAT
        <i class="bi bi-chat-dots"></i>
    </button>

    <!-- Chat Modal -->
    <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chatModalLabel">Ganteng Chat App</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="chatbox"></div>
                    <input type="text" id="username" class="form-control mb-2" placeholder="Masukkan nama pengguna...">
                    <input type="text" id="message" class="form-control mb-2" placeholder="Masukkan pesan...">
                    <button onclick="sendMessage()" class="btn btn-primary btn-kirim">Kirim</button>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="public/js/chat.js"></script>
</body>

</html>
