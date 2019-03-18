<html>
    <head>
        <title>Profile</title>
        @include('headAssets')
        <link href="{{ asset('css/common.css') }}" rel="stylesheet">
        <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
        <link href="{{ asset('css/faq.css') }}" rel="stylesheet">

    </head>
   
    <body>
      
      <header id="profile_header">
        <div class="logo-wrap">
          <img src="/img/logo.png" alt="">
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
        <div class="page-title"><b>FAQ</b> - Support Panel</div>
        <hr>
        <div class="tab-switchers faq-tab-switchers">
          <div class="item active">General</div>
          <div class="item">Exchange</div>
          <div class="item">Digital Currency</div>
          <div class="item">Merchant Services</div>
          <div class="item">Custom API</div>
        </div>
        <div class="tabs-container">
          <div class="tab-item active">

            <div class="faq-question-wrap">
              <div class="faq-question">At lobortis inceptos semest velit hendrerit ligula, consectetur siggitis dui congue eu  accumsan magna</div>
              <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis nulla purus, id posuere augue hendrerit sit amet. Aliquam et lectus bibendum, euismod velit vitae, consequat nibh. 
              </div>
            </div>
            <div class="faq-question-wrap">
              <div class="faq-question">At lobortis inceptos semest velit hendrerit ligula, consectetur siggitis dui congue eu  accumsan magna</div>
              <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis nulla purus, id posuere augue hendrerit sit amet. Aliquam et lectus bibendum, euismod velit vitae, consequat nibh. 
              </div>
            </div>
            <div class="faq-question-wrap">
              <div class="faq-question">At lobortis inceptos semest velit hendrerit ligula, consectetur siggitis dui congue eu  accumsan magna</div>
              <div class="faq-answer">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis nulla purus, id posuere augue hendrerit sit amet. Aliquam et lectus bibendum, euismod velit vitae, consequat nibh. 
              </div>
            </div>

          </div>
          <div class="tab-item"></div>
          <div class="tab-item"></div>
          <div class="tab-item"></div>
          <div class="tab-item"></div>
        </div>
      </div>

      @include('scriptAssets')
    </body>
</html>