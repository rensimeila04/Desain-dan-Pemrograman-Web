<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Info Dosen</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 20px;
            }
            .info-container {
                border: 1px solid #ddd;
                padding: 10px;
                border-radius: 5px;
                max-width: 300px;
                background-color: #f9f9f9;
            }
            .info-container p {
                margin: 5px 0;
            }
            .info-container span {
                font-weight: bold;
                color: #333;
            }
        </style>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];
        ?>
        
        <div class="info-container">
            <p><span>Nama:</span> <?php echo $Dosen['nama']; ?></p>
            <p><span>Domisili:</span> <?php echo $Dosen['domisili']; ?></p>
            <p><span>Jenis Kelamin:</span> <?php echo $Dosen['jenis_kelamin']; ?></p>
        </div>
    </body>
</html>
