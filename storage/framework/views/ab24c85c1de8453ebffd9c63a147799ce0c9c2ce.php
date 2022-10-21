<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('assets-real/css/bootstrap.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets-real/css/all.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets-real/css/fontawesome.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets-real/css/custom.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets-real/css/responsive.css')); ?>" rel="stylesheet" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Nunito&family=Oswald:wght@400;600;700&display=swap" rel="stylesheet"> 
    <title>Kartu Rencana Studi</title>
    <style>
        body{
            background-color : #fff;
        }
        #headerKrs hr{
            border: 1px solid black;
            width
        }
        .krs {
            font-family: sans-serif;
            color: #232323;
            border-collapse: collapse;
        }
        .krs, .krs th, .krs td {
            border: 1px solid #999;
            padding: 3px 15px;
        }
        .jabatan{
            margin-top:-20px;
            font-size:12px;
        }
        .col-md-2.photo{
            margin-right: -25px;
            margin-left: 35px;
        }
    </style>
  </head>
    <body>
        <div id="headerKrs">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 offset-md-1">
                        <img src="<?php echo e(asset('assets-real/img/logo.png')); ?>" alt="" width="150" height="150">
                    </div>
                    <div class="col-md-8 text-center align-self-center">
                        <h4>Universitas Terbuka</h4>
                        <small>Jl. Sultan Adam No.128, Surgi Mufti, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70122, Telp: 0511-11111, Fax: 11111-111</small>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <hr>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
        </div>

        <div id="isiKrs">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="mt-3 mb-5"><u>Kartu Rencana Studi </u></h4>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-10 offset-md-1">
                        <table>
                            <tr>
                                <td>Tahun Akademik</td>
                                <td>:</td>
                                <td><?php echo e($ta->tahun_akademik); ?></td>
                            </tr>
                            <tr>
                                <td>NIM</td>
                                <td>:</td>
                                <td><?php echo e($mahasiswa->nim); ?></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?php echo e($mahasiswa->nama); ?></td>
                            </tr>
                            <tr>
                                <td>Program Studi</td>
                                <td>:</td>
                                <td><?php echo e($mahasiswa->prodis->prodi); ?></td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td><?php echo e($mahasiswa->kelas->nama); ?></td>
                            </tr>
                            <tr>
                                <td>Dosen PA</td>
                                <td>:</td>
                                <td><?php echo e($mahasiswa->kelas->dosen->nama); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <table border="1" class="krs">
                            <thead>
                                <th>
                                No
                                </th>
                                <th>
                                Smt
                                </th>
                                <th>
                                Matakuliah
                                </th>
                                <th>
                                SKS
                                </th>
                                <th>
                                Dosen
                                </th>
                                <th>
                                Kelas
                                </th>
                                <th>
                                Hari
                                </th>
                                <th>
                                Waktu
                                </th>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td>
                                    <?php echo e($index+1); ?>

                                    </td>
                                    <td>
                                    <?php echo e($item->schedule['matkul']['smt']); ?>

                                    </td>
                                    <td>
                                    <?php echo e($item->schedule['matkul']['matkul']); ?>

                                    </td>
                                    <td>
                                    <?php echo e($item->schedule['matkul']['sks']); ?>

                                    </td>
                                    <td>
                                    <?php echo e($item->schedule['dosen']['nama']); ?>

                                    </td>
                                    <td>
                                    <?php echo e($item->schedule['kelas']['nama']); ?>

                                    </td>
                                    <td>
                                    <?php echo e($item->schedule['hari']); ?>

                                    </td>
                                    <td>
                                    <?php echo e($item->schedule['waktu']); ?>

                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td>
                                        Matakuliah tidak ada
                                    </td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6 offset-md-1">
                        <table border="0">
                            <tbody>
                                <tr>
                                <td>Total SKS yang diambil</td>
                                <td>:</td>
                                <td><?php echo e($totalSks); ?></td>
                                </tr>
                                <tr>
                                <td>Maximal SKS yang diambil</td>
                                <td>:</td>
                                <td><?php echo e($maxSks); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-3 offset-md-1 text-center">
                        <p>Mengetahui,</p>
                        <br><br>
                        <p class="font-weight-bold"><u><?php echo e($mahasiswa->prodis->dosen->nama); ?></u></p>
                        <p class="jabatan">Ka. Prodi <?php echo e($mahasiswa->prodis->prodi); ?></p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>Menyetujui,</p>
                        <br><br>
                        <p class="font-weight-bold"><u><?php echo e($mahasiswa->kelas->dosen->nama); ?></u></p>
                        <p class="jabatan">Pembimbing Akademik</p>
                    </div>
                    <div class="col-md-2 photo">
                    <img src="/image/mahasiswa/<?php echo e($mahasiswa->photo); ?>" class="img-thumbnail" alt="...">
                    </div>
                    <div class="col-md-2 text-center">
                        <p>Banjarmasin, </p>
                        <br><br>
                        <p class="font-weight-bold"><u><?php echo e($mahasiswa->nama); ?></u></p>
                        <p class="jabatan">Mahasiswa</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-10 offset-md-1">
                        <p>Catatan :</p>
                        <ul>
                            <li>1 Lembar untuk Mahasiswa</li>
                            <li>1 Lembar untuk Akademik</li>
                            <li>Simpan KRS ini sebaik mungkin di tempat yang aman</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="<?php echo e(asset('assets-real/js/jquery-3.5.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-real/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-real/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-real/js/script.js')); ?>"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> -->
    <script src="js/script.js"></script>
    <script>
      window.print()
    </script>
  </body>
</html><?php /**PATH C:\laragon\www\portalut\resources\views/user/krs/cetak.blade.php ENDPATH**/ ?>