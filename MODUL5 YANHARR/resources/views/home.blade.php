
    @extends('layout')
    @section('title','Home')

    @section('main-content')
    <div class="container">
        <div class="row text-center mb-5">
            <h3>About Us</h3>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5">
                <img src="{{ asset('img/illustration.jpg') }}" class="" alt="Illustration" height="250px">
            </div>
            <div class="col-md-7">
                <p>Vaksin dibuat untuk mencegah penyakit. Vaksin COVID-19 adalah harapan terbaik untuk menekan penularan virus corona. Mendapatkan vaksin COVID-19 maka bisa melindungi tubuh dengan menciptakan respons antibodi di tubuh tanpa harus sakit karena virus corona. vaksin COVID-19 mampu mencegah seseorang terkena virus corona. Atau, apabila kamu tertular COVID-19, vaksin dapat mencegah tubuh dari sakit parah atau potensi hadirnya komplikasi serius. Dengan mendapatkan vaksin, kamu juga akan membantu melindungi orang-orang di sekitar dari virus corona. Terutama orang-orang yang berisiko tinggi terkena penyakit parah akibat COVID-19.</p>
            </div>
        </div>
    </div>

    @endsection
