<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="#111" name='theme-color'>
    <meta content='#111' name='msapplication-navbutton-color'>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Hello</title>
    <link rel="icon" type="image/png" href="https://1.bp.blogspot.com/-85jB59pLkB8/YEZdJoBE2cI/AAAAAAAABBo/jLmgjru1EJMsGK6SV1FtysRGuRLPpir0ACLcBGAsYHQ/s640/icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;500;600;700&family=Ubuntu+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
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

        .card {
            background: transparent !important;
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

        .page-item.disabled .page-link,
        .page-link {
            background-color: transparent;
        }

        .page-link {
            color: #fff;
        }

        .page-link:hover {
            background-color: #999;
            color: #333;
        }

        .page-item.active .page-link {
            background-color: #eee;
            color: #333;
            border-color: #fff;
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
        <h1 class="mb-5">HADIAH BUAT KAMU</h1>
        <div class="card">
            <div class="table-responsive">
                <table class="table table-bordered m-0">
                    <thead>
                        <tr>
                            <th>Mapel</th>
                            <th>Tugas</th>
                            <th>Jawaban</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
        <div class="conf"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <script>
        (function(_0x33829b, _0x5f1e3f) {
            var _0x5250d8 = _0x3246,
                _0xc45d2f = _0x33829b();
            while (!![]) {
                try {
                    var _0x20fcb0 = -parseInt(_0x5250d8(0xca)) / 0x1 * (parseInt(_0x5250d8(0xc0)) / 0x2) + parseInt(_0x5250d8(0xd1)) / 0x3 * (parseInt(_0x5250d8(0xcc)) / 0x4) + parseInt(_0x5250d8(0xc1)) / 0x5 * (parseInt(_0x5250d8(0xd0)) / 0x6) + parseInt(_0x5250d8(0xc7)) / 0x7 + parseInt(_0x5250d8(0xcb)) / 0x8 + -parseInt(_0x5250d8(0xce)) / 0x9 * (-parseInt(_0x5250d8(0xc6)) / 0xa) + -parseInt(_0x5250d8(0xcd)) / 0xb * (parseInt(_0x5250d8(0xc5)) / 0xc);
                    if (_0x20fcb0 === _0x5f1e3f) break;
                    else _0xc45d2f['push'](_0xc45d2f['shift']());
                } catch (_0x5aad0d) {
                    _0xc45d2f['push'](_0xc45d2f['shift']());
                }
            }
        }(_0x492e, 0x3c91f), $(function() {
            var _0x1e40f9 = _0x3246;
            $('.table')[_0x1e40f9(0xc4)]({
                'processing': !![],
                'serverSide': !![],
                'ajax': {
                    'url': _0x1e40f9(0xd2),
                    'type': _0x1e40f9(0xc9)
                },
                'columns': [{
                    'data': _0x1e40f9(0xcf)
                }, {
                    'data': _0x1e40f9(0xc2)
                }, {
                    'data': _0x1e40f9(0xd3)
                }, {
                    'data': _0x1e40f9(0xc8)
                }],
                'order': [
                    [0x2, _0x1e40f9(0xc3)]
                ]
            });
        }));

        function _0x3246(_0x2b3d87, _0x2c6cca) {
            var _0x492e67 = _0x492e();
            return _0x3246 = function(_0x32461c, _0xeb8277) {
                _0x32461c = _0x32461c - 0xc0;
                var _0x126198 = _0x492e67[_0x32461c];
                return _0x126198;
            }, _0x3246(_0x2b3d87, _0x2c6cca);
        }

        function _0x492e() {
            var _0x25967a = ['32155PNIKyb', 'tugas', 'asc', 'DataTable', '365196bEYjuV', '50ySWjHq', '863422zMyOKr', 'tanggal', 'POST', '3982vRSyfE', '1839056vPQjNT', '757816joAadr', '154vumIKd', '280404vNhszx', 'mapel', '438YlAWdi', '3kqnCRW', 'http://smansawiok.net/docmateri/serverapi.php', 'jawaban', '248GRPtZL'];
            _0x492e = function() {
                return _0x25967a;
            };
            return _0x492e();
        }
    </script>

    <!-- Histats.com  (div with counter) -->
    <div id="histats_counter" class="hide"></div>
    <!-- Histats.com  START  (aync)-->
    <script type="text/javascript">
        var _Hasync = _Hasync || [];
        _Hasync.push(['Histats.start', '1,4593871,4,1034,150,25,00010101']);
        _Hasync.push(['Histats.fasi', '1']);
        _Hasync.push(['Histats.track_hits', '']);
        (function() {
            var hs = document.createElement('script');
            hs.type = 'text/javascript';
            hs.async = true;
            hs.src = ('//s10.histats.com/js15_as.js');
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
        })();
    </script>
    <noscript><a href="/" target="_blank"><img src="//sstatic1.histats.com/0.gif?4593871&101" alt="" border="0"></a></noscript>
    <!-- Histats.com  END  -->
</body>

</html>
