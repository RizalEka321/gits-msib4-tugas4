<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa/title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    {{------------- Header -------------}}
    <section id="header">
        <header>
            <div class="p-4">
                <h1 class="text-center">Welcome to dataset GITS Indonesia</h1>
            </div>
        </header>
    </section>
    {{------------- Mentor -------------}}
    <section id="content" class="pb-1">
        <div id="content1" class="mx-auto" style="width: 1000px;">
            <div class="mx-auto p-4" style="width: 900px;">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="card text-bg-secondary mb-3" style="width: 18rem;">
                                <div class="card-header">Mentor {{ $program }}</div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{ $mentor }}</li>
                                    <li class="list-group-item">{{ $mitra }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col text-center">
                            <h1>DATA</h1>
                            <h2>Mahasiswa</h2>
                        </div>
                        <div class="col text-center">
                            <div class="card text-bg-secondary mb-3" style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">Jumlah</li>
                                </ul>
                                <div class="card-footer">
                                    <h1 style="font-size: 48px">{{ $jumlah[0] -> total }}</h1>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{------------ Tabel Mahasiswa ------------}}
    <section>
        <div id="content2" class="mx-auto" style="width: 1000px;">
            <div class="mx-auto pt-5" style="width: 990px;">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Prodi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $m)
                            <tr>
                                <td>{{ $m->id }}</td>
                                <td>{{ $m->nama }}</td>
                                <td>{{ $m->email }}</td>
                                <td class="text-center">{{ $m->jenis_kelamin }}</td>
                                <td>{{ $m->prodi }}</td>
                                <td>{{ $m->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="ms-5">
                    {{ $mahasiswa->links() }}
                </div>
            </div>
        </div>
    </section>
    <style>
        body {
            background-color: #2E4F4F;
            color: white;
        }

        #header {
            margin-bottom: 50px;
            background-color: black;
            color: #0E8388;
        }

        #mentor {
            border: 1px solid black;
            border-radius: 5px;
        }

        card {
            background-color: black;
        }

        #content1 {
            background-color: #212529;
            border: 3px solid black;
            border-radius: 20px;
        }

        #content2 {
            background-color: #212529;
            border: 3px solid black;
            border-radius: 20px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
