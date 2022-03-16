 <?php

    include('queryrdf/dataBestBook.php');

    ?>
 <!-- Paralex Scroll-->
 <div class="konten1" id="irfan">
     <div class="penjelas">
         <div class="ket1">
             <h2>YOK Baca BUKU</h2>
         </div>
         <div class="ket2">
             <h2>
                 "Makin aku banyak membaca, makin aku banyak berpikir; makin aku banyak belajar, makin aku sadar bahwa aku tak mengetahui apa pun." - Voltaire
             </h2>
         </div>
     </div>
 </div>
 <br>
 <!-- Top Book -->
 <div id="topBook" class="container slidertop">
     <div class="row row-cols-md-2 row-cols-sm-1">
         <div class="col-md-12 col-sm-12">
             <h3 class="onetitle">8 Buku Best Seller yang Harus Kamu Baca</h3>
         </div>
     </div>
 </div>
 <div class="container">
     <div class="row kerenbanget row-cols-2 row-cols-sm-3 row-cols-md-4 g-4">
         <?php $indeks = 0; ?>
         <?php foreach ($data as $key) : ?>
             <div class="col">
                 <div id="<?= $indeks ?>" class="card bestbookmodal mb-5"><img style="background-size:cover;" src="<?= $key['cover'] ?>" class="card-img-top" alt="...">
                     <div class="card-body" style=" padding-bottom:5px;">
                         <h5 style="height:40px" class="card-title"><?= $key['name'] ?></h5>
                         <p class="card-text" style="margin-bottom:4px;color:blue;font-size:14px;white-space:normal;overflow: hidden;text-overflow: ellipsis;">Pengarang : <?= $key['author'] ?> </p>
                         <p class="card-text" style="margin-top:5px;color:blue;font-size:14px;white-space:normal;overflow: hidden;text-overflow: ellipsis;"><?= $key['price'] ?></p>
                     </div>
                 </div>
             </div>
             <!-- modal topbook -->
             <div class="modal fade" id="myModal2<?= $indeks ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                         <div class="modal-body">
                             <div class="container">
                                 <div class="card">
                                     <div class="card-body">
                                         <div class="row">
                                             <div class="col-lg-5 col-md-5 col-sm-6 mb-5">
                                                 <div class="white-box text-center"><img src="<?= $key['cover'] ?>" width="250" height="300" class="img-responsive"></div>
                                             </div>
                                             <div class="col-lg-7 col-md-7 col-sm-6" style="color: black;">
                                                 <div class="table-responsive">
                                                     <table class="table table-striped">
                                                         <tr>
                                                             <td>Judul</td>
                                                             <td><?= $key['name'] ?></td>
                                                         </tr>
                                                         <tr>
                                                             <td>Author</td>
                                                             <td><?= $key['author'] ?></td>
                                                         </tr>
                                                         <tr>
                                                             <td>Price</td>
                                                             <td><?= $key['price'] ?></td>
                                                         </tr>
                                                     </table>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="row">
                                             <p><?= $key['sinopsis'] ?></p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
             <?php $indeks++; ?>
         <?php endforeach; ?>
     </div>
 </div>



 <!-- Recommended Novel -->
 <div id="topNovel" class="container recommended slidertop">
     <div class="row">
         <div class="col-md-6">
             <h3 class="onetitle">Recommended Book</h3>
         </div>
     </div>
     <div class="row novelkeren row-cols-2 row-cols-sm-2 row-cols-md-2 g-4">



     </div>
 </div>
 <!-- List -->

 <br><br>

 <div class="container" id="bookList">
     <div class="row">
         <div class="col-md-6">
             <h3 class="onetitle">List Book</h3>
         </div>
     </div>
     <div class="col-md-12 col-sm-12 col-lg-12">
         <div>
             <table class="table listing table-hover table-bordered">
                 <thead style="background-color: lightskyblue; color:white">
                     <tr class="text-center info" style="font-size:24px">
                         <td scope="col"><b>Judul Buku</b></td>
                         <td scope="col"><b>Author</b></td>
                         <td scope="col"><b>Tanggal Rilis</b></td>
                         <td scope="col"><b>Detail</b></td>
                     </tr>
                 </thead>
                 <tbody>

                 </tbody>
             </table>
         </div>
     </div>
 </div>
 <div id="quote" class="gugur">
     <center>
         <h2>
             Kuasailah Semua Buku,Tapi Jangan Biarkan<br />Buku Menguasai
             Anda.Membacalah Untuk<br />Hidup,Bukan Hidup Untuk Membaca<br />-Owen
             Meredith-
         </h2>
     </center>
     <div class="set">
         <div><img src="gambar/leaves1.png" /></div>
         <div><img src="gambar/leaves2.png" /></div>
         <div><img src="gambar/leaves3.png" /></div>
         <div><img src="gambar/leaves4.png" /></div>
         <div><img src="gambar/leaves1.png" /></div>
         <div><img src="gambar/leaves2.png" /></div>
         <div><img src="gambar/leaves3.png" /></div>
         <div><img src="gambar/leaves4.png" /></div>
     </div>
     <div class="set set2">
         <div><img src="gambar/leaves2.png" /></div>
         <div><img src="gambar/leaves1.png" /></div>
         <div><img src="gambar/leaves3.png" /></div>
         <div><img src="gambar/leaves4.png" /></div>
         <div><img src="gambar/leaves1.png" /></div>
         <div><img src="gambar/leaves2.png" /></div>
         <div><img src="gambar/leaves3.png" /></div>
         <div><img src="gambar/leaves4.png" /></div>
     </div>
     <div class="set set3">
         <div><img src="gambar/leaves2.png" /></div>
         <div><img src="gambar/leaves1.png" /></div>
         <div><img src="gambar/leaves3.png" /></div>
         <div><img src="gambar/leaves4.png" /></div>
         <div><img src="gambar/leaves1.png" /></div>
         <div><img src="gambar/leaves2.png" /></div>
         <div><img src="gambar/leaves3.png" /></div>
         <div><img src="gambar/leaves4.png" /></div>
     </div>
 </div>