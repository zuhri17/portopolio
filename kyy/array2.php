<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php 
                $dataSiswa = [
                    [
                        "nama_siswa" => "John Doe",
                        "nilai_mtk" => 85,
                        "nilai_bindo" => 78,
                        "nilai_bing" => 90,
                        "nilai_kewarganegaraan" => 88,
                    ],
                    [
                        "nama_siswa" => "Jane Smith",
                        "nilai_mtk" => 92,
                        "nilai_bindo" => 87,
                        "nilai_bing" => 78,
                        "nilai_kewarganegaraan" => 90,
                    ],
                    [
                        "nama_siswa" => "Michael Johnson",
                        "nilai_mtk" => 80,
                        "nilai_bindo" => 75,
                        "nilai_bing" => 82,
                        "nilai_kewarganegaraan" => 85,
                    ],
                    // Tambahkan siswa lainnya di sini hingga 10 data siswa
                    [
                        "nama_siswa" => "Sarah Williams",
                        "nilai_mtk" => 88,
                        "nilai_bindo" => 92,
                        "nilai_bing" => 85,
                        "nilai_kewarganegaraan" => 78,
                    ],
                    [
                        "nama_siswa" => "David Brown",
                        "nilai_mtk" => 78,
                        "nilai_bindo" => 84,
                        "nilai_bing" => 75,
                        "nilai_kewarganegaraan" => 90,
                    ],
                    [
                        "nama_siswa" => "Emily Anderson",
                        "nilai_mtk" => 95,
                        "nilai_bindo" => 88,
                        "nilai_bing" => 92,
                        "nilai_kewarganegaraan" => 85,
                    ],
                    [
                        "nama_siswa" => "Robert Lee",
                        "nilai_mtk" => 72,
                        "nilai_bindo" => 80,
                        "nilai_bing" => 65,
                        "nilai_kewarganegaraan" => 78,
                    ],
                    [
                        "nama_siswa" => "Emma Davis",
                        "nilai_mtk" => 87,
                        "nilai_bindo" => 84,
                        "nilai_bing" => 80,
                        "nilai_kewarganegaraan" => 92,
                    ],
                    [
                        "nama_siswa" => "William Wilson",
                        "nilai_mtk" => 90,
                        "nilai_bindo" => 92,
                        "nilai_bing" => 85,
                        "nilai_kewarganegaraan" => 78,
                    ],
                    [
                        "nama_siswa" => "Olivia Martin",
                        "nilai_mtk" => 82,
                        "nilai_bindo" => 85,
                        "nilai_bing" => 78,
                        "nilai_kewarganegaraan" => 90,
                    ],
                ];
                function average($nilai)
                {
                    $rata2= array_sum($nilai) / count($nilai);
                    return $rata2;
                }
                ?>

                <table class="table table-light">
                    <thead class="thead-light">
                <tr>
                <th>No</th>
                <th>Nama</th>
                    <th>MM</th>
                    <th>Bindo</th>
                    <th>Bing</th>
                    <th>kewarganegaraan</th>
                    <th>rata rata</th>
            </tr>
            </thead>

            <tbody>
                <?php $no =1;
                foreach ($dataSiswa as $value) :
                $mtk = $value['nilai_mtk'];
                $bind = $value['nilai_bindo'];
                $bing = $value['nilai_bing'];
                $kwn = $value['nilai_kewarganegaraan'];
                $nilai = [$mtk, $bind, $bing, $kwn];

                ?>
                <tr>
                    <td><?= $no++?></td>
                    <td><?= $value['nama_siswa']?></td>
                    <td><?= $value['nilai_mtk']?></td>
                    <td><?= $value['nilai_bindo']?></td>
                    <td><?= $value['nilai_bing']?></td>
                    <td><?= $value['nilai_kewarganegaraan']?></td>
                    <td><?= average($nilai) ?></td>
                    <td></td>
                    <td></td>
            </tr>
            <?php endforeach ?>
            </tbody>
                </table>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
