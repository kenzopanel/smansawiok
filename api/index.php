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
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
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
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <div class="conf"></div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(function(){
           $('.table').DataTable({
              "processing": true,
              "serverSide": true,
              "ajax":{
                       "url": "http://smansawiok.net/docmateri/serverapi.php",
                       "dataType": "json",
                       "type": "POST"
                     },
              "columns": [
                  { "data": "mapel" },
                  { "data": "tugas" },
                  { "data": "jawaban" },
                  { "data": "tanggal" },
              ]
          });
        });
    </script>
    
    <!-- Histats.com  (div with counter) -->
    <div id="histats_counter" class="hide"></div>
    <!-- Histats.com  START  (aync)-->
    <script type="text/javascript">var _Hasync= _Hasync|| [];
    _Hasync.push(['Histats.start', '1,4593871,4,1034,150,25,00010101']);
    _Hasync.push(['Histats.fasi', '1']);
    _Hasync.push(['Histats.track_hits', '']);
    (function() {
    var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
    hs.src = ('//s10.histats.com/js15_as.js');
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
    })();</script>
    <noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4593871&101" alt="" border="0"></a></noscript>
    <!-- Histats.com  END  -->
</body>

</html>
