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
// Array objek data siswa
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
?>
                ];
            ?>

            <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                <th scope="col">No. </th>
                <th scope="col">Nama siswa</th>
                <th scope="col">nilai mtk</th>
                <th scope="col">nilai b.indo</th>
                <th scope="col">nilai b.ing</th>
                <th scope="col">nilai kewarganegaraan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) :?>
                <tr>
                <th scope="row"><?= $key+1?></th>
                
                <td><?= $value['nama siswa']?></td>
                <td><?= $value['nilai mtk']?></td>
                <td><?= $value['nilai b.indo']?></td>
                <td><?= $value['nilai b.ing']?></td>
                <td><?= $value['nilai kewarganegaraan']?></td>
                <td><?= $value['nilai mtk']?></td>
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