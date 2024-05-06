@extends('layouts.main')

@section('container')
<h1>Monitoring</h1>
<br>
<!-- panggil file jquery untuk proses realtime -->
<script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>

<!-- ajax untuk realtime -->
<script type="text/javascript">
    $(document).ready( function() {
        setInterval( function() {
            $("#accelerationx").load("{{ url('bacampu_accx') }}");
            $("#accelerationy").load("{{ url('bacampu_accy') }}");
            $("#accelerationz").load("{{ url('bacampu_accz') }}");
            $("#gyrox").load("{{ url('bacampu_gyrox') }}");
            $("#gyroy").load("{{ url('bacampu_gyroy') }}");
            $("#gyroz").load("{{ url('bacampu_gyroz') }}");
            $("#rain_curah").load("{{ url('bacarain_curah') }}");
            $("#rain_tip").load("{{ url('bacarain_tip') }}");
            $("#statussiaga").load("{{ url('statussiaga') }}");
            $("#statusmpu").load("{{ url('statusmpu') }}");
            $("#statushujan").load("{{ url('statushujan') }}");
        }, 1000);
    });
</script>



<h4>Status Siaga = </h4>
<span id="statussiaga">0</span>
<br>
<h4>Status Kemiringan = </h4>
<span id="statusmpu">0</span>
<br>
<h4>Status Hujan = </h4>
<span id="statushujan">0</span>
<br>
<h4>Kecepatan Sumbu X = </h4>
<span id="accelerationx">0</span>
<br>
<h4>Kecepatan Sumbu Y = </h4>
<span id="accelerationy">0</span>
<br>
<h4>Kecepatan Sumbu Z = </h4>
<span id="accelerationz">0</span>
<br>
<h4>Gyro Sumbu X = </h4>
<span id="gyrox">0</span>
<br>
<h4>Gyro Sumbu Y = </h4>
<span id="gyroy">0</span>
<br>
<h4>Gyro Sumbu Z = </h4>
<span id="gyroz">0</span>
<br>
<h4>Curah Hujan = </h4>
<span id="rain_curah">0</span>
<br>
<h4>Tip Hujan = </h4>
<span id="rain_tip">0</span>
<br>
<a href="data">Lihat Data History Bacaan Sensor</a>



@endsection