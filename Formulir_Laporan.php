<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard </title>
    <meta charset="utf-8">
    <title>BID TIK POLDA METRO JAYA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/foto_empJAKPUSK.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <div class="navbar-1">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top p-0" style="justify-content: center; margin-right: 150px; background-color= white;">
            <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5 split">
                <img src="img/logo_polisi.jpeg" alt style="margin-left: -548%;">
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.html">Komparasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Formulir_Laporan.php">Formulir Laporan</a>
                </li>
            </ul>
            <form class="">
                <button class="btn btn-outline-success" type="submit" ">Search</button>
            </form>
        </nav>
    </div>
    <div class="w3-container" style="display:flex;flex-wrap:wrap;margin:56px">
        <img class="center" src="img/Lambang_Polri.png" style="display: flex;margin-right: auto;margin-left: auto;margin-top: 218px;">
        <div class="position-absolute top-0 start-0 w-100  d-flex align-items-center" style="justify-content:center;background: rgba(247, 247, 247); opacity: 0.9; height: 129%;">
            <fieldset style="display:flex; justify-content:center;">
                <div class="class="form-lap" style="display:flex;">
                    <form action="contact.php" method="POST" style="display: flex;flex-wrap: wrap;">
                        <legend style="display:flex; justify-content:center; -webkit-text-stroke-width:thin; margin-bottom:52px;">FORMULIR LAPORAN</legend>
                        <div class="colums" style="display: flex;flex-wrap: wrap;flex-direction: column;">
                                <div class="item" style="display: flex;flex-direction: row;justify-content: space-around;">
                                    <label for="fname">Nama Lengkap</label><br>
                                    <input type="text" id="fname" name="fname">
                                    <label for="lname">No.NIK</label><br>
                                    <input type="text" id="lname" name="lname">
                                    <label for="phone">Korban</label><br>
                                    <input id="phone" type="tel"   name="phone">
                                  
                                </div>
                                <br>
                                <div class="item" style="display: flex;flex-direction: row;justify-content: space-around;">
                                    <label for="street">Tempat Lahir</label><br>
                                    <input id="street" type="text"   name="street" required/>
                                    <label>Tanggal Lahir</label><br>
                                    <input type="date" name="tanggal" />
                                    <label for="city">No.Telp<span>*</span></label><br>
                                    <input id="city" type="text"   name="city" required/>
                                    <label for="city">Email<span>*</span></label><br>
                                    <input id="city" type="text"   name="city" required/>
                                </div>
                                <br>
                                <div class="item" style="display: flex;flex-direction: row;justify-content: space-around;">
                                    <label for="cars">Kewarganegaraan:</label>
                                    <select id="cars" name="cars">
                                        <option value="">pilih jenis kelamin</option>
                                        <option value="">Volvo</option>
                                        <option value="">Toyota</option>
                                        <option value="">BMW</option>
                                        <option value="">Audi</option>
                                    </select>
                                    <label for="cars">Jenis Kelamin:</label>
                                    <select id="cars" name="cars">
                                        <option value="">pilih jenis kelamin</option>
                                        <option value="">Volvo</option>
                                        <option value="">Toyota</option>
                                        <option value="">BMW</option>
                                        <option value="">Audi</option>
                                    </select>
                                    <label for="cars">Agama:</label>
                                    <select id="cars" name="cars">
                                        <option value="">pilih jenis kelamin</option>
                                        <option value="">Volvo</option>
                                        <option value="">Toyota</option>
                                        <option value="">BMW</option>
                                        <option value="">Audi</option>
                                    </select>
                                    <label for="city">Pekerjaan</label><br>
                                    <input id="city" type="text"   name="city" required/>
                                </div>
                                <br>
                                <div class="item" style="display: flex;flex-direction: row;justify-content: space-around;">
                                    <label for="city">Alamat Lengkap</label><br>
                                    <textarea name="message1" rows="4" cols="50"></textarea>
                                    <label for="city">Lokasi Kejadian</label><br>
                                    <textarea name="message2" rows="4" cols="50"></textarea>
                                </div>
                                <br>
                                <div class="item" style="display: flex;flex-direction: row;justify-content: space-around;">
                                    <label for="cars">Jenis Kejahatan:</label>
                                    <select id="cars" name="cars">
                                        <option value="">pilih jenis kelamin</option>
                                        <option value="">Volvo</option>
                                        <option value="">Toyota</option>
                                        <option value="">BMW</option>
                                        <option value="">Audi</option>
                                    </select>
                                    <label for="cars">Kerugian</label>
                                    <select id="cars" name="cars">
                                        <option value="">pilih jenis kelamin</option>
                                        <option value="">Volvo</option>
                                        <option value="">Toyota</option>
                                        <option value="">BMW</option>
                                        <option value="">Audi</option>
                                    </select>
                                    <label>Tanggal Kejadian</label><br>
                                    <input type="date" name="tanggal" />
                                    <label for="city">Waktu Kejadian</label><br>
                                    <input id="city" type="text"   name="city" required/>
                                </div>
                                <br>
                                <div class="item" style="display: flex;flex-direction: row;justify-content: space-around;">
                                    <label for="cars">Jenis Kelamin:</label>
                                    <select id="cars" name="cars">
                                        <option value="">pilih jenis kelamin</option>
                                        <option value="">Volvo</option>
                                        <option value="">Toyota</option>
                                        <option value="">BMW</option>
                                        <option value="">Audi</option>
                                    </select>
                                    <label for="cars">Jenis Kelamin:</label>
                                    <select id="cars" name="cars">
                                        <option value="">pilih jenis kelamin</option>
                                        <option value="">Volvo</option>
                                        <option value="">Toyota</option>
                                        <option value="">BMW</option>
                                        <option value="">Audi</option>
                                    </select>
                                    <label for="city">Detail Motif kejadian </label><br>
                                    <textarea name="message1" rows="2" cols="30"></textarea>
                                </div>
                                <br>
                                <div class="item" style="display: flex;flex-direction: row;justify-content: space-around;">
                                    <label for="cars">Jenis Kelamin:</label>
                                    <select id="cars" name="cars">
                                        <option value="">pilih jenis kelamin</option>
                                        <option value="">Volvo</option>
                                        <option value="">Toyota</option>
                                        <option value="">BMW</option>
                                        <option value="">Audi</option>
                                    </select>
                                    <label for="cars">Jenis Kelamin:</label>
                                    <select id="cars" name="cars">
                                        <option value="">pilih jenis kelamin</option>
                                        <option value="">Volvo</option>
                                        <option value="">Toyota</option>
                                        <option value="">BMW</option>
                                        <option value="">Audi</option>
                                    </select>
                                </div>  
                            </div>
                        </div>  
                    </form>
                </div>
            </fieldset>
        </div>
    </div>
                        
                        <!-- <label>Umur:</label>
                        <input type="number" min="10" max="90" name="umur" />

                        <input type="submit" name="submit" value="Send" /> -->
                      
        
                
     
    
</body>
</html>