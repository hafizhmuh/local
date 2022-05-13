<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Daftar</title>
</head>
<body>
    <section class="welcome" id="welcome">

        <div class="box-container">
    
            <div class="box">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <img src="/images/welcomevector.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 px-5 pt-5">
                        <form action="{{ route('register') }}" class="login-form" method="POST">
                            {{ csrf_field() }}
                            <h3>Daftar</h3>
                            <div class="row baris-daftar">
                                <div class="col">
                                    <input type="text" name="firstname" placeholder="Nama Depan" class="formbox" required>
                                </div>
                                <div class="col">
                                    <input type="text" name="lastname" placeholder="Nama Belakang" class="formbox" required>
                                </div>
                            </div>
                            <div class="row baris-daftar">
                                <div class="col">
                                    <input type="email" name="email" placeholder="Email" class="formbox" required>
                                </div>
                                <div class="col">
                                    <input type="text" name="username" placeholder="Username" class="formbox" required>
                                </div>
                            </div>
                            <div class="row baris-daftar">
                                <div class="col">
                                    <input type="password" name="password" placeholder="Password" class="formbox" required>
                                </div>
                                <div class="col">
                                    <input type="password" name="repeat_password" placeholder="Verifikasi Password" class="formbox" required>
                                </div>
                            </div>
                            <div class="row baris-daftar">
                                <div class="col-6">
                                    <input type="number" name="no_hp" placeholder="Nomor Handphone" class="formbox" required>
                                </div>
                            </div>
                            <div class="row punya-akun">
                                <button type="submit" class="btn">Daftar</button>   
                            </div>
                            <div class="row punya-akun">
                                <p>Sudah punya akun? <a href="login">Masuk Sekarang</a></p>    
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
</body>
</html>