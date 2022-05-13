@extends('layouts.main')
<link rel="stylesheet" href="css/style.css">

@section('container')

{{-- <section class="report" id="report">

    <div class="content">
        <h3>Pengaduan <span>#perundungan</span></h3>
        <p>Hallo #sobatspill, silahkan isi data laporan dengan lengkap untuk melanjutkan ke proses selanjutnya, Terima Kasih</p>
        <a href="#formulir" class="btn">Isi Laporan</a>
    </div>

</section> --}}
    
<section class="formulir" id="formulir">

    <h1 class="heading"> Formulir Laporan <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Perundungan</h3>
            <form>
                <div class="row">
                    <div class="col">
                        <label for="name">Nama Korban</label>
                        <input type="text" id="" placeholder="Tuliskan Nama Lengkap">
                    </div>
                    <div class="col">
                        <label for="email">Tempat/Tanggal Lahir</label>
                        <input type="text" id="" placeholder="Contoh : Kota, 01 Mei 2000">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Jenis Kelamin</label>
                        <input type="text" id="" placeholder="Perempuan / Laki-laki">
                    </div>
                    <div class="col">
                        <label for="contact">Agama</label>
                        <input type="text" id="" placeholder="Tuliskan Agama">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Pekerjaan</label>
                        <input type="text" id="" placeholder="Tuliskan Pekerjaan">
                    </div>
                    <div class="col">
                        <label for="subject">Alamat</label>
                        <input type="text" id="" placeholder="Tuliskan Alamat Lengkap">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="contact">Waktu Kejadian</label>
                        <input type="date" id="">
                    </div>
                    <div class="col">
                        <label for="subject">Tempat Kejadian</label>
                        <input type="text" id="" placeholder="Tuliskan Tempat Kejadian Perkara">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Perkara</label>
                        <textarea id="" placeholder="Tuliskan Perkara" rows="5"></textarea>
                    </div>
                    <div class="col">
                        <label for="subject">Nama Pelaku</label>
                        <input type="text" id="" placeholder="Tuliskan Nama Pelaku">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Saksi</label>
                        <textarea id="" placeholder="Tuliskan Nama Saksi" rows="5"></textarea>
                    </div>
                    <div class="col">
                        <label for="">Kerugian</label>
                        <textarea id="" placeholder="Tuliskan Kerugian" rows="5"></textarea>
                    </div>
                </div>

                <a href="" class="btn kirim-laporan">Kirim Laporan</a>    
                
            </form>
            
        </div>
    </div>

</section>

@endsection