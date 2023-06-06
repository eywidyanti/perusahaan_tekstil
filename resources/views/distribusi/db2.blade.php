<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /><title>Laravel Multiple Database Connections</title>
  
    <title>Laravel Multiple Database Connections</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light shadow">
        <a class="navbar-brand" href="#">
            <img src="../img/logo.png" width="80" height="30" class="d-inline-block align-top" alt="">
            Perusahaan Tekstil
        </a>
    </nav>
  <div class="row bg-light ">
        <div class="col-lg-3 col-sm-3 col-md-3 mt-3">
            <div class="list-group">
            <a href="../y" class="list-group-item list-group-item-action">Data Pegawai</a>
                <a href="../distribusi" class="list-group-item list-group-item-action">Data Distribusi</a>
                <a href="logout" class="list-group-item list-group-item-action bg-secondary text-white">Logout</a>
              </div>
        </div>
       
        <div class="col-lg-9 col-sm-9 col-md-9 mt-3 mb-3">
            <div class="row d-flex">
                <div class="col-12 mr-5">
                    <div class="card shadow">
                        <div class="card-body p-3 ">
                            <h1 class="fs-5 fw-bold my-3 text-center">Divisi Distribusi</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex mt-1">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-3">
                            <h3>Data Pegawai</h3>
                            <br>
                            
                            <table class="table">
                            <thead>
                    <tr>
                    <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gaji</th>
                        <th scope="col">Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pics as $key => $item)
                        <tr>
                        <th scope="row">{{ ++$key }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->gaji }}</td>
                            <td>{{ $item->jabatan }}</td>
                            </tr>
                                    @endforeach
                                </tbody>
                            </table>
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white shadow">
        <section class="p-3">
            <div class="p-3" style="color: black;">© 2022 Copyright:
                <a style="color: black;" href="login.html">Perusahaan Tekstil</a>
            </div>
        </section>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    
  </body>
</html>