<!doctype html>
<html @lang('en')>
<head>
 @include('layouts/head')
</head>

<body id="page-top" class="bg-zinc-700 min-h-screen flex flex-col" >
   @include('layouts/header')

<div>
  @yield('content')
</div>

  {{-- @include('partials/_footer') --}}
  {{-- @include('partials/_script') --}}

@yield('script')
@include('layouts/footer')
 </body>

</html>