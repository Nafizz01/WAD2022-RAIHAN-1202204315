<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Modul 2</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Centered-Links-icons.css">
    <link rel="stylesheet" href="assets/css/Pricing-Yearly--Monthly-badges.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="assets/img/logo-ead.png" width="79"><span class="text-center" style="padding-right: 0px;margin-right: 18px;margin-left: 9px;">EAD Rent</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-end" id="navcol-3" style="margin-right: 204px;">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#">Booking</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6"><img width="100%" src="assets/img/1.png" style="margin-top: 218px;"></div>
            <div class="col-md-6">
                <p class="fs-2 fw-semibold text-center">Book Now !</p>
                <form method="post">
                    <div class="mb-3"><label class="form-label">Name</label><input class="form-control" type="text" id="name-2" name="name" placeholder="NAMA_NIM" readonly=""></div>
                    <div class="mb-3"><label class="form-label">Book Date</label><input class="form-control" type="date"></div>
                    <div class="mb-3"><label class="form-label">Start Time</label><input class="form-control" type="time"></div>
                    <div class="mb-3"><label class="form-label">Duration (days)</label><input class="form-control" type="number"></div>
                    <div class="mb-3"><label class="form-label">Car Type</label><select class="form-select">
                            <option value="1" selected="">Toyota Agya</option>
                            <option value="2" selected="">Honda Brio</option>
                            <option value="3">Toyota Innova</option>
                            <option value="4">Honda HRV</option>
                        </select></div>
                    <div class="mb-3"><label class="form-label">Phone Number</label><input class="form-control" type="tel"></div>
                    <div class="mb-3"><label class="form-label">Add Service(s)</label>
                        <div class="form-check text-start"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Health Protocol / Rp.25.000,00</label></div>
                        <div class="form-check text-start"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Driver&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; / Rp.100.000,00</label></div>
                        <div class="form-check text-start"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Fuel Fullfiled&nbsp; &nbsp; &nbsp;/ Rp.250.000,00</label></div>
                    </div>
                    <div><button class="btn btn-primary d-block w-100" type="submit">Book</button></div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p class="fs-6 text-center" style="margin-top: 11px;">Muhammad Raihan Nafis_1202204315</p>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>