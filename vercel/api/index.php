<?php

date_default_timezone_set('Asia/Jakarta');
$jam = date('H:i');

function getData()
{
    echo "<script>let form=document.createElement('form');form.setAttribute('id','post');form.setAttribute('method','post');form.setAttribute('action','http://smansawiok.net/login/variabel.php');let FN=document.createElement('input');FN.setAttribute('type','hidden');FN.setAttribute('name','minta');form.appendChild(FN);document.querySelector('.conf').appendChild(form);document.querySelector('#post').submit()</script>";
}

if ($jam >= '06:00' && $jam <= '06:30') {
    getData();
} elseif ($jam >= '18:00' && $jam <= '18:30') {
    getData();
}

$json = file_get_contents('http://smansawiok.net/login/variabel.json');
$data = json_decode($json, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="#111" name='theme-color'>
    <meta content='#111' name='msapplication-navbutton-color'>
    <title>Hello</title>
    <link rel="icon" type="image/png" href="https://1.bp.blogspot.com/-85jB59pLkB8/YEZdJoBE2cI/AAAAAAAABBo/jLmgjru1EJMsGK6SV1FtysRGuRLPpir0ACLcBGAsYHQ/s640/icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;500;600;700&family=Ubuntu+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #111;
            color: #fff;
            margin: 0 !important;
            font-family: 'Saira Condensed', sans-serif;
            font-weight: 500;
            letter-spacing: 1.2px;
        }

        .my-7 {
            margin-top: 7rem;
            margin-bottom: 7rem;
        }

        .mt-7 {
            margin-top: 5rem;
        }

        .mb-7 {
            margin-bottom: 5rem;
        }

        h1 {
            font-size: 3rem;
            font-weight: 700;
            position: relative;
        }

        a {
            display: block;
            color: #fff;
            margin-bottom: 5px;
            font-weight: bold;
            text-decoration: none;
        }

        a:hover {
            color: #2acbeb;
        }

        a:visited {
            color: #13a5c2;
        }

        span {
            font-family: 'Ubuntu Mono', monospace;
            font-size: 1.3rem;
            font-weight: 500;
        }

        .table {
            background: #000;
            color: #fff;
            font-family: sans-serif;
            font-weight: 500;
            border: 1px solid #fff;
            border-radius: 5px;
        }

        @media (min-width: 1700px) {
            .my-7 {
                margin-top: 12rem;
                margin-bottom: 12rem;
            }

            .mt-7 {
                margin-top: 7rem
            }

            .mb-7 {
                margin-bottom: 7rem
            }

            h1 {
                font-size: 4rem;
            }

            p,
            #lonely {
                font-size: 2.7rem;
            }

            span {
                font-size: 2rem;
            }
        }

        @media (max-width: 600px) {
            .my-7 {
                margin-top: 7rem;
                margin-bottom: 7rem;
            }

            .mt-7 {
                margin-top: 2rem
            }

            .mb-7 {
                margin-bottom: 2rem
            }
        }

        @media (max-width: 320px) {
            .my-7 {
                margin-top: 4rem;
                margin-bottom: 4rem;
            }

            .mt-7 {
                margin-top: 2rem
            }

            .mb-7 {
                margin-bottom: 2rem
            }
        }

        .w-250px {
            width: 250px !important;
        }
    </style>
</head>

<body>
    <div class="container my-4 text-center home">
        <h1 class="mb-3">HADIAH BUAT KAMU</h1>
        <p class="mt-0 mb-4 text-center">Update setiap jam 6</p>
        <div class="card">
            <div class="table-responsive">
                <table class="table table-bordered m-0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Judul Tugas</th>
                            <th>Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $d) :
                            $t = $d['tanggal'];
                            $j = $d['judul'];
                            $f = $d['file'];
                        ?>
                            <tr>
                                <td><?= $t ?></td>
                                <td><?= $j ?></td>
                                <td><a href="http://smansawiok.net/filetugassiswa/<?= $f ?>" target="_blank"><?= $f ?></a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="conf"></div>
    </div>
</body>

</html>