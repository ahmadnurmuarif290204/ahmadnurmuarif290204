<?php
if (isset($_POST['proses'])) {
    $input = $_POST['input1'];
    if ($input == "Hallo") {
        $hasil = "Hallo juga";
    } elseif ($input == "Apakah kamu bisa membantu saya?") {
        $hasil = "Saya sedang siap untuk membantu Anda dengan pertanyaan Anda.";
    } elseif ($input == "Sebutkan apa itu AI?") {
        $hasil = "AI (Artificial Intelligence) adalah bidang dalam ilmu komputer yang berfokus pada pengembangan sistem yang dapat melakukan tugas-tugas yang biasanya memerlukan kecerdasan manusia.";
    } elseif ($input == "Sejak kapan AI itu muncul?") {
        $hasil = "AI muncul sebagai bidang studi yang terorganisir pada pertengahan abad ke-20.";
    } elseif ($input == "Sebutkan ada berapa AI itu?") {
        $hasil = "Narrow AI ANI  Artificial Narrow Intelligence:
            AI ini dirancang dan dilatih untuk melakukan tugas tertentu dengan sangat baik.
            Contoh: Asisten virtual Siri, Alexa, pengenalan wajah, sistem rekomendasi Netflix, Amazon.";
    } elseif ($input == "Malih terima kasih atas bantuan nya") {
        $hasil = "Baik, terima kasih telah menggunakan layanan kami.";
    } elseif ($input == "Hai malih coba buka google") {
        header("Location: https://www.google.com/");
    } elseif ($input == "Hai malih coba buka youtube") {
        header("Location: https://www.youtube.com/");
    } else {
        $hasil = "Mohon maaf, penulisan anda kurang akurat, mohon coba kembali.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malih AI Assistant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            background-color: blanchedalmond;
            animation: fadeIn 1s ease-in-out;
            font-family: 'Times New Roman', Times, serif;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .container {
            margin-top: 50px;
        }

        .card {
            margin-bottom: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: slideIn 1s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .card-header {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            background-color: #007bff;
            color: white;
            text-align: center;
            font-size: 1.25rem;
        }

        .card-body {
            padding: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .form-control {
            width: 80%;
            margin: auto;
            transition: box-shadow 0.3s;
        }

        .form-control:focus {
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        .card-text {
            font-size: 1.25rem;
            font-weight: bold;
            animation: textAppear 0.5s ease-in-out;
        }

        @keyframes textAppear {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .navbar {
            background-color: #007bff;
            padding: 10px;
            color: white;
            text-align: center;
            font-size: 1.5rem;
            border-bottom: 2px solid #0056b3;
        }

        .footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
            border-top: 2px solid #0056b3;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo svg {
            width: 100px;
            height: 100px;
        }

        /* Welcome message animation */
        .welcome-message {
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            color: black;
            animation: welcomeSlideIn 2s ease-out;
            opacity: 0;
        }

        @keyframes welcomeSlideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
    <script>
        function speak(text) {
            var msg = new SpeechSynthesisUtterance();
            msg.text = text;
            window.speechSynthesis.speak(msg);
        }

        // Show welcome message when the page loads
        window.onload = function() {
            document.getElementById('welcome-message').style.opacity = 1;
        };
    </script>
</head>

<body>
    <div class="navbar">
        Malih AI Assistant
    </div>
    <div class="container">
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="45" fill="#007bff" />
                <text x="50%" y="50%" text-anchor="middle" dy=".3em" fill="white" font-family="Arial" font-size="40">AI</text>
            </svg>
        </div>
        <!-- Welcome message section -->
        <div id="welcome-message" class="welcome-message">
            Selamat Datang di Malih AI Assistant!
        </div>
        <form action="" method="post">
            <div class="card">
                <div class="card-header">
                    Pertanyaan
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Masukan perintah</h5>
                    <div class="mb-3 text-center">
                        <input type="text" name="input1" class="form-control" placeholder="Tulis perintah di sini...">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit" name="proses">Proses</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-success text-white">
                    Jawaban
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Asisten AI</h5>
                    <p class="card-text text-center">
                        <?php
                        if (isset($_POST['proses'])) {
                            echo $hasil;
                            echo "<script> speak('$hasil'); </script>";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </form>
    </div>
    <div class="footer">
        © 2024 Malih AI Assistant
    </div>
</body>

</html>