<html>
    <head>
        <title>Profile</title>
        @include('headAssets')
        <link href="{{ asset('css/profile.css') }}" rel="stylesheet">

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
            Exchange
          </li>
          <li class="link-item">
            <i class="fas fa-exchange"></i>
            Currancy Rate
          </li>
          <li class="link-item">
            <i class="fas fa-chart-bar"></i>
            Transition
          </li>
          <li class="link-item">
            <i class="fas fa-envelope"></i>
            Contact
          </li>
          <li class="link-item">
            <i class="fas fa-question"></i>
            FAQ
          </li>
          <li class="link-item">
            <i class="fas fa-cog"></i>
            Settings
          </li>
        </ul>
      </aside>

      <div class="profile-content">
        <div class="page-title">Files History</div>
        <hr>
        <div class="tab-switchers">
          <div class="item active">All</div>
          <div class="item">Processed</div>
          <div class="item">Pending</div>
        </div>
        <div class="tabs-container">
          <div class="tab-item">
            <table class="table alternate-rows-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Date Issued</th>
                  <th>Phone</th>
                  <th class="text-center">Download PDF</th>
                  <th class="text-center">Aproved</th>
                  <th class="text-center">Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Member One</th>
                  <th>02 / 02 /2019</th>
                  <th>+380557744876</th>
                  <th class="text-center">
                    <a href="#" class="theme-btn btn-blue">Download</a>
                  </th>
                  <th class="text-center">-</th>
                  <th class="text-center">50$</th>
                </tr>
                <tr>
                  <th>Member One</th>
                  <th>02 / 02 /2019</th>
                  <th>+380557744876</th>
                  <th class="text-center">
                    <a href="#" class="theme-btn btn-blue">Download</a>
                  </th>
                  <th class="text-center">No</th>
                  <th class="text-center">50$</th>
                </tr>
                <tr class="amount-col">
                  <th>Member One</th>
                  <th>02 / 02 /2019</th>
                  <th>+380557744876</th>
                  <th class="text-center">
                    <a href="#" class="theme-btn btn-blue">Download</a>
                  </th>
                  <th class="text-center">Yes</th>
                  <th class="text-center">50$</th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      @include('scriptAssets')
    </body>
</html>