<br><br>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box"><img src="<?= $_POST['index']['cover'] ?>" width="250" height="300" class="img-responsive"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6" style="color: black;">
                    <h4 class="box-title mt-5 mb-3"><?= $_POST['index']['name'] ?></h4>
                    <p><?= $_POST['index']['sinopsis'] ?></p>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="box-title mt-5">General Info</h3>
                    <div class="table-responsive">
                        <table class="table table-striped table-product">
                            <tbody>
                                <tr>
                                    <td width="390">Judul</td>
                                    <td><?= $_POST['index']['name'] ?></td>
                                </tr>
                                <tr>
                                    <td>Author</td>
                                    <td><?= $_POST['index']['author'] ?></td>
                                </tr>
                                <tr>
                                    <td>Negara</td>
                                    <td><?= $_POST['index']['country'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tahun Rilis</td>
                                    <td><?= $_POST['index']['rilis'] ?></td>
                                </tr>
                                <tr>
                                    <td>Bahasa</td>
                                    <td><?= $_POST['index']['language'] ?></td>
                                </tr>
                                <tr>
                                    <td>Publisher</td>
                                    <td><?= $_POST['index']['publisher'] ?></td>
                                </tr>
                                <tr>
                                    <td>literary Genre</td>
                                    <td><?= $_POST['index']['literaryGenre'] ?></td>
                                </tr>
                                <tr>
                                    <td>Page</td>
                                    <td><?= $_POST['index']['numberOfPage'] ?></td>
                                </tr>
                                <tr>
                                    <td>ISBN</td>
                                    <td><?= $_POST['index']['isbn'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>