
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DTLKT - History</title>
    <link rel="icon" type="images/png" href="images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #60B578">
        <div class="container" style="margin-left: 3%">
            <a class="navbar-brand" style="margin: 0.5%" href="home">
                <img src="images/logo.png" alt="Logo" width="60" height="60">
                <a class="navbar-brand" style="color: black" href="home">
                    <span style="font-size: 24px; font-weight: 500;">Early Warning System</span> <br>
                    <span style="font-size: 18px; font-weight: 500;">Tanah Longsor</span>
                </a>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 10%">
                <ul class="navbar-nav column-gap-3" style="font-size: 20px">
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="monitoring">Monitoring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mitigasi">Langkah Mitigasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Peta Pesebaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    
    <a href="monitoring">Kembali</a>
    <h1>History Bacaan Sensor</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Status Siaga</th>
                <th>Status Tanah</th>
                <th>Status Hujan</th>
                <th>Kecepatan Sumbu X</th>
                <th>Kecepatan Sumbu Y</th>
                <th>Kecepatan Sumbu Z</th>
                <th>Gyro Sumbu X</th>
                <th>Gyro Sumbu Y</th>
                <th>Gyro Sumbu Z</th>
                <th>Curah Hujan</th>
                <th>Tip Hujan</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->statuss_siaga }}</td>
                    <td>{{ $item->statuss_mpu }}</td>
                    <td>{{ $item->statuss_hujan }}</td>
                    <td>{{ $item->mpus_accelerationx }}</td>
                    <td>{{ $item->mpus_accelerationy }}</td>
                    <td>{{ $item->mpus_accelerationz }}</td>
                    <td>{{ $item->mpus_gyrox }}</td>
                    <td>{{ $item->mpus_gyroy }}</td>
                    <td>{{ $item->mpus_gyroz }}</td>
                    <td>{{ $item->rains_curah }}</td>
                    <td>{{ $item->rains_tip }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
