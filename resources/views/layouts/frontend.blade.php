<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.admin.meta')

  <title>
    @yield('title') | BEM FIT Telkom University
  </title>

  @stack('before-style')

  @include('includes.frontend.style')

  @stack('after-style')

</head>

<body >

    {{-- navbar --}}
    @include('includes.frontend.navbar')


    @include('sweetalert::alert')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('includes.frontend.footer')



    @stack('before-script')

    @include('includes.frontend.script')

    @stack('after-script')

</body>

</html>
