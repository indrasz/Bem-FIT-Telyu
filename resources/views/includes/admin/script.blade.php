<!--   Core JS Files   -->
<script src=" {{ asset('admin/assets/js/core/popper.min.js') }}"></script>
<script src=" {{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>
<script src=" {{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src=" {{ asset('admin/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src=" {{ asset('admin/assets/js/plugins/chartjs.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/sweetalert.min.js') }}"></script>

 <!-- instagram load script -->
 <script src="https://cdn2.woxo.tech/a.js#62767a4c46f7cf00284e3501" async data-usrc>
 </script>


<script type="text/javascript" src="{{ url('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>

<script src="{{ url('https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js') }}"></script>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="{{ url('https://buttons.github.io/buttons.js') }}"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('admin/assets/js/soft-ui-dashboard.min.js?v=1.0.5') }}"></script>
