<html>
<head>
    <title>Profile</title>
    @include('headAssets')
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">

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
    <div class="page-title">Contact Information</div>
    <hr>
    <div class="tabs-container">
        <form class="profile-contact-form profile-form" method="post" action="#">
            @csrf

            <div class="theme-row">
                <div class="inp-group text-inp-group">
                    <label for="profile_email" class="inp-caption">Email Address</label>
                    <div class="inp-wrap">
                        <input type="email" name="email" placeholder="Email" id="input_email">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>

                <div class="inp-group text-inp-group">
                    <label for="profile_full_name" class="inp-caption">Full Name</label>
                    <div class="inp-wrap">
                        <input type="text" name="full_name" placeholder="Full Name" id="input_full_name">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>

            </div>

            <div class="theme-row">
                <div class="inp-group text-inp-group">
                    <label for="input_title" class="inp-caption">Title</label>
                    <div class="inp-wrap">
                        <input type="email" name="title" placeholder="title" id="input_title">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>

                <div class="inp-group text-inp-group">
                    <label for="input_phone" class="inp-caption">Phone Number</label>
                    <div class="inp-wrap">
                        <input type="text" name="phone" placeholder="Phone Number" id="input_phone">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>

            </div>

            <div class="theme-row">
                <div class="inp-group textarea-inp-group">
                    <label for="input_message" class="inp-caption">Message</label>
                    <div class="inp-wrap">
                        <textarea type="text" name="message" placeholder="Write your message here..." id="input_message"></textarea>
                    </div>
                </div>
            </div>



            <div class="theme-row">
                <button class="theme-btn btn-blue" type="submit">Send Message</button>
            </div>

        </form>
    </div>
</div>

@include('scriptAssets')
</body>
</html>
