<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/common.css') }}" rel="stylesheet">
  <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
  <title>Admin panel</title>
</head>
<body>
  <div id="admin"></div>
  <script src="/js/admin.js" charset="utf-8"></script>
</body>
</html>
