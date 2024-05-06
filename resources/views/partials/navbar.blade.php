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
                    <a class="nav-link {{ $title === "Home" ? 'active' : '' }}" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Monitoring" ? 'active' : '' }}" href="monitoring">Monitoring</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === "Mitigasi" ? 'active' : '' }}" href="mitigasi">Langkah Mitigasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Peta Pesebaran</a>
                </li>
            </ul>
        </div>
    </div>
</nav>