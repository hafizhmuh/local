@extends('layouts.main')
<link rel="stylesheet" href="css/style.css">

@section('container')

{{-- <section class="report" id="report">

    <div class="content">
        <h3>Pengaduan <span>#pelecehanseksual</span></h3>
        <p>Hallo #sobatspill, silahkan isi data laporan dengan lengkap untuk melanjutkan ke proses selanjutnya, Terima Kasih</p>
        <a href="#formulir" class="btn">Isi Laporan</a>
    </div>

</section> --}}
    
<section class="formulir" id="formulir">

    <h1 class="heading"> Formulir Laporan <span>#spillaja</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>Pelecehan Seksual</h3>
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
                        <label for="subject">Agama</label>
                        <input type="text" id="" placeholder="Tuliskan Agama">
                    </div>
                    <div class="col">
                        <label for="contact">Alamat</label>
                        <input type="text" id="" placeholder="Tuliskan Alamat Tinggal">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="subject">Nama Pelaku</label>
                        <input type="text" id="" placeholder="Tuliskan Nama Pelaku">
                    </div>
                    <div class="col">
                        <label for="contact">Tanggal Kejadian</label>
                        <input type="date" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Judul Laporan</label>
                        <textarea id="" placeholder="contoh : dugaan pelecehan seksual kepada anak di bawah umur" rows="5"></textarea>
                    </div>
                    <div class="col">
                        <label for="">Alamat Kejadian</label>
                        <textarea id="" placeholder="Tuliskan Alamat Kejadian Perkara" rows="5"></textarea>
                    </div>
                </div>

                <a href="" class="btn kirim-laporan">Kirim Laporan</a>    
                
            </form>
            
        </div>
    </div>

</section>

@endsection