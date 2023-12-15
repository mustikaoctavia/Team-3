<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="prof.css"/>
    <link rel="stylesheet" href="table.css"/>
 </head>
<body>
<nav class= "container" style align = "center"> 
        <nav class="navbar navbar-expand-lg bg-body fixed-top" >
            <div class="container">
              <a class="navbar-brand">Kuas.id</a>
                  <div class="btn-group"> 
                    <button type="button" class="btn btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                          </svg>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="profile.html">Edit Profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="volunteer.php">Logout</a></li>
                    </ul>
                  </div>
            </div>
            </div>
        </nav>
    </nav>  
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
          <br>
        <div class="container text-center pb-3 "><b><h3>Upcoming Program dan project</h3></b></div><br>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
              <div class="card">
                <img src="bersamakuas.jpg" class="card-img-top">
                <div class="card-body ">
                  <h5 class="card-title"><b>BERSAMA KUAS</b></h5>
                  <p class="card-text">Ekspedisi Edukasi kali ini Kuas.Id mengajak teman-teman sekalian untuk bergabung
                    bersama adik-adik lucu ini untuk mengenal peta Indonesia. Yang akan dilaksanakan pada:</p>
                    <br>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">                   <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path> 
                      </svg> <b>Sabtu, 16 Desember 2023</b> </p>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                      </svg> <b>Loc: SDN4 Makassar</b>
                      <a href="daftarevent.html">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-warning">Daftar</button></a>
                        </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="belajarmelalui.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title"><b>BELAJAR MELALUI SENI (Artfull Education Inisiatif)</b></h5>
                  <p class="card-text">Ayo, Ikuti keseruan bermain dan menggambar layang-layang bersama adik-adik yang lucu ini dengan Kuas.Id, tunggu apa lagi, ayo daftar!</p> <br>
                  <br>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">                   <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path> 
                  </svg> <b>Senin, 18 Desember 2023</b> </p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                  </svg> <b>Loc: Baruga Antang</b>
                  <a href="daftarevent.html">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-warning">Daftar</button></a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="kuaskolaboratif.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title"><b>KUAS KOLABORATIF</b></h5><p></p>
                  <p class="card-text">Ulurkan tanganmu dan bantulah mereka.</p> <br>
                  <br>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">                   <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path> 
                  </svg> <b>Kamis-Minggu, 21-22 Desember 2023</b></p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                  </svg> <b>Loc: Universitas Muslim Indonesia</b>
                  <a href="daftarevent.html">
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="button" class="btn btn-warning">Daftar</button></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="kuasinspiratif.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title"><b>KUAS INSPIRATIF</b></h5>
                  <p class="card-text">Kuas.id mengajak teman-teman untuk bergabung bersama kami dengan melestarikan lingkungan dengan menjaga kebersihan dan melakukan penanaman kembali.</p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">                   <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path> 
                  </svg> <b>Jumat, 29 Desember 2023</b> </p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                  </svg> <b>Loc: Malino</b></p>
                  <a href="daftarevent.html">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-warning">Daftar</button></a>
                    </div>
                </div>
              </div>
            </div> 
            <br>
            <div class="container-fluid pt-5 pb-5">
              <div class="container text-center">
              </div>
          </div>
        </div> 
    <section class="bg-light p-5">
        <h3 class="pb-2">Agenda Rutin Kuas.id</h3>
        <div class="table-responsive" id="no-more-tables">
            <table class="table bg-white">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>Tanggal</th>
                        <th>Nama Kegiatan</th>
                        <th>Tempat</th>
                        <th>Keterangan</th>
                        <th>Koordinator</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-title="Tanggal">01-12-2023</td>
                        <td data-title="Nama Kegiatan">Rapat Rutin</td>
                        <td data-title="Tempat"> Meeting Room</td>
                        <td data-title="Keterangan"> Membahas Hasil Galang Dana</td>
                        <td data-title="Koordinator">Muh. Amaar</td>
                    </tr>
                    <tr>
                        <td data-title="Tanggal">03-12-2023</td>
                        <td data-title="Nama Kegiatan"> Pertemuan dengan WCD sulsel</td>
                        <td data-title="Tempat"> Aula gedung</td>
                        <td data-title="Keterangan"> Membahas kolaborasi dengan pandawara</td>
                        <td data-title="Koordinator">Deena</td>
                    </tr>
                    <tr>
                        <td data-title="Tanggal">07-12-2023</td>
                        <td data-title="Nama Kegiatan">Persiapan penggalangan dana</td>
                        <td data-title="Tempat">kantor pusat</td>
                        <td data-title="Keterangan">pembagian tim baru</td>
                        <td data-title="Koordinator">Rita rugiarto</td>
                    </tr>
                    <tr>
                        <td data-title="Tanggal">09-12-2023</td>
                        <td data-title="Nama Kegiatan">panitia WCD</td>
                        <td data-title="Tempat">Masjid Agung Al-Falah</td>
                        <td data-title="Keterangan"> membahas seputar kegiatan bersama WCD</td>
                        <td data-title="Koordinator">Hijraa</td>
                    </tr>
                    <tr>
                        <td data-title="Tanggal">12-12-2023</td>
                        <td data-title="Nama Kegiatan">Bazar</td>
                        <td data-title="Tempat">lokasi bazar</td>
                        <td data-title="Keterangan">Penggalangan dana</td>
                        <td data-title="Koordinator">Tri Anita</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>