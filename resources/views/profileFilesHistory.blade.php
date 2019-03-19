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
        <div class="page-title">Files History</div>
        <hr>
        <div class="tab-switchers">
          <div class="item active">All</div>
          <div class="item">Processed</div>
          <div class="item">Pending</div>
        </div>
        <div class="tabs-container">
          <div class="tab-item active">
            <table class="table alternate-rows-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Date Issued</th>
                  <th>Phone</th>
                  <th class="text-center">Download PDF</th>
                  <th class="text-center">Approved</th>
                  <th class="text-center">Amount</th>
                </tr>
              </thead>
              <tbody>
              @foreach($files as $file)
                  <tr>
                      <th>{{\App\User::where('id', $file->user_id)->first()->firstName.' '.\App\User::where('id', $file->user_id)->first()->lastName}}</th>
                      <th>{{$file->created_at}}</th>
                      <th>{{\App\User::where('id', $file->user_id)->first()->mobile}}</th>
                      @if($file->approved == 'yes')
                          <th class="text-center">
                              <a href="/getPdfFromProfile/{{$file->id}}" class="theme-btn btn-blue">Download</a>
                          </th>
                          @elseif($file->approved == '-')
                          <th class="text-center">
                              Please Wait
                          </th>
                          @else
                          <th class="text-center">
                              Your file was not approved :(
                          </th>
                      @endif
                      <th class="text-center">{{$file->approved}}</th>
                      <th class="text-center">50$</th>
                  </tr>
              @endforeach

                {{--<tr>--}}
                  {{--<th>Member One</th>--}}
                  {{--<th>02 / 02 /2019</th>--}}
                  {{--<th>+380557744876</th>--}}
                  {{--<th class="text-center">--}}
                    {{--<a href="#" class="theme-btn btn-blue">Download</a>--}}
                  {{--</th>--}}
                  {{--<th class="text-center">No</th>--}}
                  {{--<th class="text-center">50$</th>--}}
                {{--</tr>--}}
                {{--<tr class="amount-col">--}}
                  {{--<th>Member One</th>--}}
                  {{--<th>02 / 02 /2019</th>--}}
                  {{--<th>+380557744876</th>--}}
                  {{--<th class="text-center">--}}
                    {{--<a href="#" class="theme-btn btn-blue">Download</a>--}}
                  {{--</th>--}}
                  {{--<th class="text-center">Yes</th>--}}
                  {{--<th class="text-center">50$</th>--}}
                {{--</tr>--}}
              </tbody>
            </table>
          </div>
        </div>
      </div>

      @include('scriptAssets')
    </body>
</html>
