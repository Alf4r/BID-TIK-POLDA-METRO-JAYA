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
    <div style="display:flex;">
        <form action="contact.php" method="POST" style="display: flex;flex-wrap: wrap;">
            <legend style="display:flex; justify-content:center; -webkit-text-stroke-width:thin; margin-bottom:52px;">FORMULIR LAPORAN</legend>
            <div style="display: flex;flex-wrap: wrap;flex-direction: column;">
                <div style="display: flex;flex-direction: row;justify-content: space-around;">
                    <div style="display: flex;flex-direction: column; margin: 0 10px;">
                        <label for="fname">Nama Lengkap</label>
                        <input type="text" id="fname" name="fname" style="width:100px">
                    </div>
                    <div style="display: flex;flex-direction: column; margin: 0 10px;">
                        <label for="lname">No.NIK</label>
                        <input type="text" id="lname2" name="lname">
                    </div>
                    <div style="display: flex;flex-direction: column; margin: 0 10px;">
                        <label for="phone">Korban</label>
                        <input id="phone" type="tel" name="phone">
                    </div> 
                </div>
                
                <div class="item" style="display: flex;flex-direction: row;justify-content: space-around;">

                    <div style="display: flex;flex-direction: column; margin: 0 10px;">
                        <label for="street">Tempat Lahir</label>
                        <input id="street" type="text" name="street" required/>
                    </div>

                    <div style="display: flex;flex-direction: column; margin: 0 10px;">
                        <label for="tanggal">Tanggal Lahir</label>
                        <input id="tanggal" type="date" name="tanggal" />
                    </div>

                    <div style="display: flex;flex-direction: column; margin: 0 10px;">
                        <label for="tel">No.Telp<span>*</span></label>
                        <input id="tel" type="text" name="tel" required/>
                    </div>

                    <div style="display: flex;flex-direction: column; margin: 0 10px;">
                        <label for="email">Email<span>*</span></label>
                        <input id="email" type="text" name="email" required/>
                    </div>
                </div>
                <div class="item" style="display: flex;flex-direction: row;justify-content: space-between; align-items: center;">            
    <div style="display: flex;flex-direction: column; margin: 0 10px;">
        <label for="nationality">Kewarganegaraan:</label>
        <select id="nationality" name="nationality">
            <option value="">pilih kewarganegaraan</option>
            <option value="volvo">Volvo</option>
            <option value="toyota">Toyota</option>
            <option value="bmw">BMW</option>
            <option value="audi">Audi</option>
        </select>
    </div>
    
    <div style="display: flex;flex-direction: column; margin: 0 10px;">
        <label for="gender">Jenis Kelamin:</label>
        <select id="gender" name="gender">
            <option value="">pilih jenis kelamin</option>
            <option value="male">Laki-laki</option>
            <option value="female">Perempuan</option>
        </select>
    </div>
    
    <div style="display: flex;flex-direction: column; margin: 0 10px;">
        <label for="religion">Agama:</label>
        <select id="religion" name="religion">
            <option value="">pilih agama</option>
            <option value="islam">Islam</option>
        </select>
    </div>

    <div style="display: flex;flex-direction: column; margin: 0 10px;">
        <label for="occupation">Pekerjaan</label>
        <input id="occupation" type="text" name="occupation" required/>
    </div>
</div>

<div class="item" style="display: flex;flex-direction: row;justify-content: space-between; align-items: center;">            

<div style="display: flex;flex-direction: column; margin: 0 10px;">
    <label for="address">Alamat Lengkap</label>
    <textarea id="address" name="message1" rows="4" cols="50"></textarea>
</div>

<div style="display: flex;flex-direction: column; margin: 0 10px;">
    <label for="incidentLocation">Lokasi Kejadian</label>
    <textarea id="incidentLocation" name="message2" rows="4" cols="50"></textarea>
</div>
</div>


<div class="item" style="display: flex; flex-direction: row; justify-content: space-around; align-items: center;">

<div style="display: flex; flex-direction: column; margin: 0 10px;">
    <label for="crimeType">Jenis Kejahatan:</label>
    <select id="crimeType" name="crimeType">
        <option value="">pilih jenis kejahatan</option>
        <option value="">Volvo</option>
        <option value="">Toyota</option>
        <option value="">BMW</option>
        <option value="">Audi</option>
    </select>
</div>

<div style="display: flex; flex-direction: column; margin: 0 10px;">
    <label for="loss">Kerugian</label>
    <select id="loss" name="loss">
        <option value="">pilih kerugian</option>
        <option value="">Volvo</option>
        <option value="">Toyota</option>
        <option value="">BMW</option>
        <option value="">Audi</option>
    </select>
</div>

<div style="display: flex; flex-direction: column; margin: 0 10px;">
    <label for="incidentDate">Tanggal Kejadian</label>
    <input type="date" id="incidentDate" name="tanggal" />
</div>

<div style="display: flex; flex-direction: column; margin: 0 10px;">
    <label for="incidentTime">Waktu Kejadian</label>
    <input id="incidentTime" type="text" name="city" required/>
</div>
</div>


<div class="item" style="display: flex;flex-direction: row;justify-content: flex-start;">
    <div style="display: flex;flex-direction: column;margin-right: 10px;">
        <label for="provinsi">Detail Lokasi Kejadian:</label>
        <select id="provinsi" name="provinsi">
            <option value="">Provinsi</option>
            <option value="Volvo">Volvo</option>
            <option value="Toyota">Toyota</option>
            <option value="BMW">BMW</option>
            <option value="Audi">Audi</option>
        </select>
    </div>

    <div style="display: flex;flex-direction: column;margin-right: 10px;">
        <label for="kabupaten" style="visibility: hidden;">Dummy</label> <!-- Menggunakan visibility hidden agar elemen tetap memakan tempat tetapi tidak terlihat -->
        <select id="kabupaten" name="kabupaten">
            <option value="">Kabupaten/kota</option>
            <option value="Volvo">Volvo</option>
            <option value="Toyota">Toyota</option>
            <option value="BMW">BMW</option>
            <option value="Audi">Audi</option>
        </select>
    </div>

    <div style="display: flex;flex-direction: column;margin-right: 10px;">
        <label for="detailMotif">Detail Motif kejadian</label>
        <textarea id="detailMotif" name="message1" rows="2" cols="60" style="width: 579px;height: 63px;"></textarea>
    </div>
</div>


<div style="display: flex;flex-direction: row;justify-content: flex-start;">
    
    <select id="kecamatan" name="kecamatan" style="margin-left: 0px;width: 166px;">
        <option value="">Kecamatan</option>
        <option value="Volvo">Volvo</option>
        <!--...-->
    </select>
    <label for="kabupaten" style="visibility: hidden;">Dummy</label>
    <select id="kodePos" name="kodePos" style="margin-left: -49px;width: 140px;">

        <option value="">Kode Pos</option>
        <option value="Volvo">Volvo</option>
        <!--...-->
    </select>

</div>
<div style="display: flex; justify-content: center; margin-top: 20px;">
    <button type="submit">Selanjutnya</button>
</div>

                            <!-- </div> -->
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