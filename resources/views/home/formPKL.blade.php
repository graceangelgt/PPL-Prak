<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: #EBDFD7;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            background-color: #EBDFD7;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            color: black;
            border-bottom: 1px solid #D9CEC6 !important;
        }

        .left-header h1 {
            margin: 0;
        }

        .right-header {
            display: flex;
            align-items: center;
        }

        .user-info {
            margin-right: 20px;
            text-align: right;
        }

        .user-info p {
            margin: 0;
            font-weight: bold;
        }

        .form-container {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"],
        .form-group input[type="file"],
        .form-group input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group input[type="file"] {
            background-color: #f9f9f9;
        }

        .form-group textarea {
            resize: vertical;
            height: 100px;
        }

        .form-group button {
            padding: 10px 15px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #1c60a7;
        }

        .button-link {
            display: inline-block;
            padding: 10px 15px;
            background-color: #D9CEC6;
            color: black;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            transition: background-color 0.3s ease;
        }

        .button-link::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background-color: rgba(0, 0, 0, 0.1);
            z-index: -1;
            border-radius: 8px;
        }

        .button-link:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <x-sidebar></x-sidebar>

    <div class="content">
        <x-header>Seminar</x-header>

        <div class="main-content">
            <div class="form-container">
                <form id="pkl-form">
                    <div class="form-group">
                        <label for="topik-pkl">Judul PKL:</label>
                        <input type="text" id="topik-pkl" name="topik-pkl" value="Analisis xyszds" readonly>
                    </div>
                    <div class="form-group">
                        <label for="alamat-perusahaan">Tempat PKL:</label>
                        <input type="text" id="alamat-perusahaan" name="alamat-perusahaan" value="BCA" readonly>
                    </div>
                    <div class="form-group">
                        <label for="role">Dosen Pembimbing PKL:</label>
                        <input type="text" id="role" name="role" value="Pak xysaidai" readonly>
                    </div>
                    <div class="form-group">
                        <label for="durasi-pkl-start">Tanggal Seminar:</label>
                        <input type="date" id="durasi-pkl-start" name="durasi-pkl-start" value="2024-10-12" readonly>
                    </div>
                    <div class="form-group">
                        <label for="surat-permohonan">Surat Permohonan PKL:</label>
                        <input type="file" id="surat-permohonan" name="surat-permohonan" disabled style="background-color: #f9f9f9;">
                        <input type="text" value="laporan.pdf" readonly style="background-color: #f9f9f9;">
                    </div>
                    <div class="form-group">
                        <label for="surat-penerimaan">Surat Penerimaan PKL:</label>
                        <input type="file" id="surat-penerimaan" name="surat-penerimaan" disabled style="background-color: #f9f9f9;">
                        <input type="text" value="laporan.pdf" readonly style="background-color: #f9f9f9;">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
