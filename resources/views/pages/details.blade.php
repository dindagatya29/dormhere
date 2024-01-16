@extends('layouts.app')

@section('title')
    Details | DormHere
@endsection


@section('content')

    {{-- @foreach ($data as $kost) --}}
    <div class="page-content page-details">
    <section class="store-gallery mt-5" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="zoom-in">
                    <img src="{{ asset('assets/kamar/depan/' . $kost->img_pertama) }}" class="w-100 main-image" alt="" style="
                    max-height: 460px; 
                    min-height: 460px; 
                    border-radius: 40px;" />
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <!-- Menampilkan thumbnail gambar -->
                        <div class="col-3 col-lg-12 mt-lg-2 mt-2 mt-md-3">
                            <img src="{{ asset('assets/kamar/depan/' . $kost->img_pertama) }}" class="w-100 thumbnail-image" alt="" style="max-height: 110px;" />
                        </div>
                        <div class="col-3 col-lg-12 mt-lg-2 mt-2 mt-md-3">
                            <img src="{{ asset('assets/kamar/dalam/' . $kost->img_kedua) }}" class="w-100 thumbnail-image" alt="" style="max-height: 110px;" />
                        </div>
                        <div class="col-3 col-lg-12 mt-lg-2 mt-2 mt-md-3">
                            <img src="{{ asset('assets/kamar/toilet/' . $kost->img_ketiga) }}" class="w-100 thumbnail-image" alt="" style="max-height: 110px;" />
                        </div>
                        <div class="col-3 col-lg-12 mt-lg-2 mt-2 mt-md-3">
                            <img src="{{ asset('assets/kamar/dapur/' . $kost->img_keempat) }}" class="w-100 thumbnail-image" alt="" style="max-height: 110px;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="kost-name">Kamar No.     {{ $kost->no_kamar }}</h1>
                        <p class="kost-owner">By {{ $kost->datakost->nama_kost }}</p>
                        <p><span class="kost-price">Rp. {{ $kost->harga }} </span>/ Bulan</p>

                    </div>
                    <div class="col-lg-2" data-aos="zoom-in">
                                @if(Auth::user()->role == 'pencari')

                                    @if ($kost->status == 'aktif')
                                    
                                    <a class="btn btn-custom px-4 btn-block mt-2 mb-3" href="{{ $kost->id }}/checkout">Sewa</a>
                                    @else

                                    <button class="btn btn-custom px-4 btn-block mt-2 mb-3" onclick="alert('Kamar kos tidak tersedia')">Sewa</button>
                                    @endif
                                @else
                                <button class="btn btn-custom px-4 btn-block mt-2 mb-3" data-toggle="modal" data-target=".bd-example-modal-sm">Sewa</button>
                                @endif                     
                    </div>
                </div>
            </div>
        </section>
        <section class="store-description">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <h5>Deskripsi Kamar Kost</h5>
                        <hr>
                        <p>
                        {{ $kost->deskripsi_kamar }}</p>
                        <h5>Alamat</h5>
                        <hr>
                        <p>
                           {{ $kost->alamat }}
                        </p>
                        <div id="map" style="width: 100%; height: 400px;"></div>
                        <script>
                            var map = L.map('map').setView([-8.172405053026914, 113.69920589124717], 20);

                            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                            }).addTo(map);

                            L.marker([-8.168230667064604, 113.70215956867177]).addTo(map)
                                .bindPopup('Dorm Here')
                                .openPopup();
                        </script>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- @endforeach --}}

</div>


<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <p class="text-center"><span class="text-danger">Mohon Maaf</span> <br>Fitur Sewa hanya untuk akun pencari!</p>
      </div>
    </div>
  </div>

@endsection



