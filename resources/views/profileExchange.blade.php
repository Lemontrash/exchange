<html>
<head>
    <title>Profile</title>
    @include('headAssets')
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/deposit.css') }}" rel="stylesheet">

</head>

<body>

<header id="profile_header">
    <div class="logo-wrap">
        <a href="{{route('home')}}">
            <img src="/img/logo.png" alt="">
        </a>
    </div>

    <div class="header-search-wrapper">
        <form class="header-search">
            <input type="text" name="search" placeholder="Search...">
            <button type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="profile-avatar profile-header-btn">
        <div class="img-wrap">
            <img src="/img/profile-avatar.png" alt="">
        </div>
    </div>

    <div class="notifications profile-header-btn">
        <div class="ico-wrap">
            <i class="fas fa-bell"></i>
        </div>
    </div>

    <div class="dots-wrapper profile-header-btn">
        <div class="ico-wrap">
            <i class="fas fa-ellipsis-h"></i>
        </div>
    </div>
</header>

<aside class="profile-nav">
    <ul class="links-container">
        <li class="link-item">
            <i class="fas fa-check-circle"></i>
            <a style="text-decoration: none; color: rgba(255, 255, 255, 0.5);" href="{{route('home')}}">Exchange</a>

        </li>
        <li class="link-item">
            <i class="fas fa-exchange"></i>
            <a style="text-decoration: none; color: rgba(255, 255, 255, 0.5);" href="{{route('home')}}">Currancy Rate</a>

        </li>
        <li class="link-item">
            <i class="fas fa-chart-bar"></i>
            <a style="text-decoration: none; color: rgba(255, 255, 255, 0.5);" href="{{route('filesHistory')}}"> Transition</a>

        </li>
        <li class="link-item">
            <i class="fas fa-envelope"></i>
            <a style="text-decoration: none; color: rgba(255, 255, 255, 0.5);" href="{{route('contactUs')}}">Contact</a>

        </li>
        <li class="link-item">
            <i class="fas fa-question"></i>
            <a style="text-decoration: none; color: rgba(255, 255, 255, 0.5);" href="{{route('faq')}}">FAQ</a>

        </li>
        <li class="link-item">
            <i class="fas fa-cog"></i>
            <a style="text-decoration: none; color: rgba(255, 255, 255, 0.5);" href="{{route('profileSettings')}}">Settings</a>
        </li>
        <li class="link-item">
            <i class="fas fa-cog"></i>
            <a style="text-decoration: none; color: rgba(255, 255, 255, 0.5);" href="{{route('home')}}">Admin</a>
        </li>
    </ul>
</aside>

<div class="profile-content">
    <div class="page-title">Deposit</div>
    <hr>
    <div class="tabs-container">

        <p>
            <span class="text-gray">Beneficiary name:</span><br>
            <b>Fxglobe LTD</b>
        </p>
        <hr>
        <p>
            <span class="text-gray">Beneficiary Address: </span><br>
            <b>7 Omirou Street, 2nd Floor Limassol 3095, Cyprus</b>
        </p>
        <hr>
        <p>
            <span class="text-gray">Currency: </span><br>
            EUR
        </p>
        <hr>
        <p>
            <span class="text-gray">Bank name: </span><br>
            <b>Powszechna Kasa Oszczednosci Bank Polski Sa</b>
        </p>
        <hr>
        <p>
            <span class="text-gray">Bank address:</span><br>
            <b>Nowogrodzka 35/41, 00-950 , Warszawa, Poland</b>
        </p>
        <hr>
        <p>
            <span class="text-gray">IBAN:</span><br>
            <b>PL97 1020 1026 0000 1402 0275 9900</b>
        </p>
        <hr>
        <p>
            <span class="text-gray">Swift:</span><br>
            <b>BPKOPLPW</b>
        </p>
        <hr>
        <p>
            <span class="text-gray">Reference:</span><br>
            <b>Sean shtern</b>
        </p>
        <form class="profile-exchange-form profile-form" method="post" action="#">
            @csrf

            <div class="theme-row">
                <div class="inp-wrap amount-inp">
                    <input type="text" placeholder="Amount to purchase" name="amount">
                </div>
            </div>
            <div class="theme-row">
                <button class="theme-btn btn-blue ttu" type="submit">Continue</button>
            </div>

        </form>
    </div>
</div>

@include('scriptAssets')
</body>
</html>