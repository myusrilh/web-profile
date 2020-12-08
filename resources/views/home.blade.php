@extends('master')

@section('judul_halaman', 'Home')

@section('konten')

    <div class="profile-container">
        <div class="profpic">
            <img src="{{ URL::to('/') }}/images/profpic-yusril.png" alt="">
        </div>
        <div class="description">
            <h3>Muhammad Yusril Hasriansyah</h3>
            <p>(20 Tahun) <br> <span style="color: white;" id="android">Mahasiswa</span></p>

            <div class="summary">
                <h5 style="text-align:left;color:#9bc7ff;">Deskripsi Singkat</h5>
                <p style="text-align:left;color: white;">Saya adalah mahasiswa D-IV Teknik Informatika di salah satu
                    universitas di Kota Malang.
                    Saya menyukai tantangan, jadi setiap ada kesempatan untuk mencoba hal baru, maka saya akan melakukannya.
                    Saat ini saya sedang berfokus
                    dalam pengembangan mobile terutama <b>Android</b></p>
            </div>
        </div>
        <div class="contact">
            <table>
                <tr>
                    <td>
                        <h4 style="color:white">Kontak :</h4>
                    </td>
                    <td>
                        <h4 style="color:white">Portfolio :</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a target="_blank" href="mailto:yusrilhasriansyah@gmail.com" id="email"><i class="fa fa-envelope"></i></a>
                        <a target="_blank" href="https://wa.me/6285856455582" id="whatsapp"><i class="fa fa-whatsapp"></i></a>
                        <a target="_blank" href="https://www.facebook.com/muhammad.hasriansyah/" id="facebook"><i class="fa fa-facebook-square"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/in/myusrilh/" id="linkedin"><i class="fa fa-linkedin"></i></a>
                        
                    </td>
                    <td>
                        <a target="_blank" href="https://github.com/myusrilh" id="github"><i class="fa fa-github"></i></a>
                        <a target="_blank" href="https://www.behance.net/yusrilhasrian" id="behance"><i class="fa fa-behance"></i></a>
                    </td>
                </tr>
            </table>


        </div>
    </div>

@endsection
