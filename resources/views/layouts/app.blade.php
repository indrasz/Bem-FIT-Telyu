<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.admin.meta')

  <title>
    @yield('title') | BEM FIT Telkom University
  </title>

  @stack('before-style')

  @include('includes.admin.style')

  @stack('after-style')

</head>

<body class="g-sidenav-show bg-gray-100">



    {{-- sidebar --}}
    @include('includes.admin.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        {{-- navbar --}}
        @include('includes.admin.navbar')

        <div class="container-fluid py-4">

            @include('sweetalert::alert')

            {{-- content --}}
            @yield('content')

            {{-- footer --}}
            @include('includes.admin.footer')

        </div>

    </main>

    @include('includes.admin.setting')

    @stack('before-script')

    @include('includes.admin.script')

    @stack('after-script')

</body>

</html>
