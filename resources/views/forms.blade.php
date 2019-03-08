
<html>
    <head>
        <title>@yield('title')</title>
       	@include('headAssets')

    </head>
   
    <body>
    	<div class="formsWrapper">
    		<div id="backArrow"><i class="fal fa-long-arrow-left"></i> Back</div>
    		@yield('content')
    	</div>
        
        
        @include('scriptAssets')
    </body>
</html>