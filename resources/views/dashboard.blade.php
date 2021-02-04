@extends('layouts.ticket')

@section('content')

<div class="page-header header-filter clear-filter" data-parallax="true" style="background-image: url('../../theme/img/bg4.jpg');">
    <div class="container">
        <div class="row">
        <div class="col-md-8 mx-auto text-center">
            <div class="brand">
                <h1 class="title" style="font-size: 100px !important;">Welcome</h1>
                <h3 style="font-size: 30px; font-weight: 70 !important;">A Badass Concert In The World !</h3>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="main main-raised" >
    <div class="section section-tabs" style="background-image: url('../../theme/img/bg-1.png');">
        <div class="container" id="band">
            <div class="text-center">
                <h4 class="title" style="font-size: 50px !important; margin-bottom: 60px;">Band List</h4>
            </div>
            <!-- Tabs with icons on Card -->
            <div class="card card-nav-tabs header-filter clear-filter dark-filter" style="background-image: url('../../theme/img/bg11.jpg');background-repeat: no-repeat; background-position: center center;" >
                <div class="card-header card-header-dark py-0" style="z-index: 21; position: relative;">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <div class="nav-tabs-navigation text-center">
                        <div class="nav-tabs-wrapper">
                            <h3>Hujan</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center" style="height: 400px;" style="z-index: 21; position: relative;">
                    <h6 class="text-white" style="margin-top: 280px; z-index: 21; position: relative;"> Hujan is a Malaysian indie rock band formed in Kuala Lumpur, in 2005. It was founded by vocalist Noh Salleh and lead guitarist AG Coco. Fans of Hujan are dubbed as Raingers, as the band's name translates to rain in Malay. Despite the lack of love from certain quarters at early stage of the band, Hujan has had some of the most successful breakthrough music in Malaysia.
                    </h6>
                </div>
            </div>
            <!-- End Tabs with icons on Card -->
            <div class="space-50"></div>
            <!-- Tabs with icons on Card -->
            <div class="card card-nav-tabs header-filter clear-filter dark-filter" style="background-image: url('../../theme/img/bg14.jfif');background-repeat: no-repeat; background-position: center center; background-size: 100% 100%">
                <div class="card-header card-header-dark py-0" style="z-index: 21; position: relative;">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <div class="nav-tabs-navigation text-center">
                        <div class="nav-tabs-wrapper">
                            <h3>Bunkface</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center"  style="height: 400px;" style="z-index: 21; position: relative;">
                    <h6 class="text-white" style="margin-top: 260px; z-index: 21; position: relative;">Bunkface is a Malaysian rock band from Malaysia formed in 2006. The band consists of lead vocalist and rhythm guitarist Sam (Shamsul Anuar), bass guitarist Youk (Farouk Jaafar), and lead guitarist Paan (Ahmad Farhan). The name Bunkface was suggested by Biak (former drummer) which was influenced from the Sum 41 song titled "Crazy Amanda Bunkface". Popular songs by Bunkface include Silly Lily, Situasi, Revolusi, Prom Queen, Through My Window, Ekstravaganza, Rentak Laguku, Malam Ini Kita Punya, Darah Muda and Masih Di Sini . Their fanbase are called "Bunkers".
                    </h6>
                </div>
            </div>
            <!-- End Tabs with icons on Card -->
            <div class="space-50"></div>
            <!-- Tabs with icons on Card -->
            <div class="card card-nav-tabs  header-filter clear-filter dark-filter" style="background-image: url('../../theme/img/bg17.jpg');background-repeat: no-repeat; background-position: center top; background-size: 100% ">
                <div class="card-header card-header-dark py-0" style="z-index: 21; position: relative;">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-navigation text-center">
                            <div class="nav-tabs-wrapper">
                                <h3>Peterpan</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center"  style="height: 400px;" style="z-index: 21; position: relative;">
                    <h6 class="text-white" style="margin-top: 260px; z-index: 21; position: relative;">Peterpan is an Indonesian alternative pop/rock band. They are well known in Indonesia for their simple (sometimes poetic) lyrics, catchy beats, and Ariel's voice. The band consists of three permanent members, known as Ariel, Loekman Hakim, and David Kurnia Albert. The two members, Andika Naliputra Wirahardja and Hendra Suhendra, split from the band in 2006. David Kurnia Albert joined the band in 2008 as a permanent member bringing new color to their music. Ilsyah Ryan Reza split from the band in 2015, and Mohammad Kautsar Hikmat also split from the band in 2019.
                    </h6>
                </div>
            </div>
            <!-- End Tabs with icons on Card -->
            <div class="space-50"></div>
            <!-- Tabs with icons on Card -->
            <div class="card card-nav-tabs  header-filter clear-filter dark-filter" style="background-image: url('../../theme/img/bg16.jpg');background-repeat: no-repeat; background-position: center top; background-size: 100% ">
                <div class="card-header card-header-dark py-0" style="z-index: 21; position: relative;">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <div class="nav-tabs-navigation text-center">
                        <div class="nav-tabs-wrapper">
                            <h3>Masdo</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center"  style="height: 400px;" style="z-index: 21; position: relative;">
                    <h6 class="text-white" style="margin-top: 270px; z-index: 21; position: relative;">Kugiran Masdo merupakan sebuah kugiran yang berasal dari Malaysia.
                        Mereka menyajikan muzik berasaskan genre pop 60-an dan digubah mengikut cita rasa masa kini. Antara lagu yang masyhur serta menaikkan nama Kugiran Masdo ialah Bunga,Bercanda Di Malam Indah dan yang terbaru Dinda. Kugiran ini juga telah mengeluarkan album pertama mereka iaitu Selamat Tinggal Pujaan pada November 2017 dan album kedua iaitu Jalan Abbey pada Januari 2020..
                    </h6>
                </div>
            </div>
            <!-- End Tabs with icons on Card -->
        </div>

        <div class="space-70"></div>
        <div class="container" id="ticket">
            <div class="text-center">
                <h4 class="title" style="font-size: 50px !important; margin-bottom: 70px;">Ticket List</h4>
            </div>
            @if(Session::has('message'))
                <div class="alert text-dark border mb-4">{{ Session::get('message') }}</div>
            @endif
            <div class="row">
                <div class="col-lg-4 col-md-4 mx-auto">
                    <div class="card card-login">
                        <div class="card-header card-header-dark text-center">
                            <h4 class="card-title">VVIP</h4>
                        </div>
                        <div class="card-body text-center" style="height: 300px;">
                            <div class="text-center" style="margin-top: 180px;">
                                <h4 style="font-size: 30px;">RM 200</h4>
                                <form method="POST" action="{{ route('member.update', Auth::user()) }}">
                                    @csrf @method('PUT')
                                    <button type="submit" value="VVIP" name="ticket_class" class="btn btn-dark btn-round">
                                        <i class="material-icons">unarchive</i> Buy Now
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mx-auto">
                    <div class="card card-login">
                        <div class="card-header card-header-dark text-center">
                            <h4 class="card-title">VIP</h4>
                        </div>
                        <div class="card-body text-center" style="height: 300px;">
                            <div class="text-center" style="margin-top: 180px;">
                                <h4 style="font-size: 30px;">RM 100</h4>
                                <form method="POST" action="{{ route('member.update', Auth::user()) }}">
                                    @csrf @method('PUT')
                                    <button type="submit" value="VIP" name="ticket_class" class="btn btn-dark btn-round">
                                        <i class="material-icons">unarchive</i> Buy Now
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 mx-auto">
                    <div class="card card-login">
                        <div class="card-header card-header-dark text-center">
                            <h4 class="card-title">Normal</h4>
                        </div>
                        <div class="card-body text-center" style="height: 300px;">
                            <div class="text-center" style="margin-top: 180px;">
                                <h4 style="font-size: 30px;">RM 50</h4>
                                <form method="POST" action="{{ route('member.update', Auth::user()) }}">
                                    @csrf @method('PUT')
                                    <button type="submit" value="normal" name="ticket_class" class="btn btn-dark btn-round">
                                        <i class="material-icons">unarchive</i> Buy Now
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="space-70"></div>
    </div>
</div>
@endsection
