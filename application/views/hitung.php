<html>
    <head>
        <title>Perhitungan</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <br/><br/>
    <div class="container">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Form Perhitungan
                </div>
                <div class="card-body">
                    <form action="http://localhost/p4_1218624/ci/welcome/jumlah" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Panjang</label>
                            <input type="number" name="panjang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Lebar</label>
                            <input type="number" name="lebar" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <button type="submit" name="post" value="Hitung" class="btn btn-primary btn-block">Hitung</button>
                    </form>
                </div>
            </div> 
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>