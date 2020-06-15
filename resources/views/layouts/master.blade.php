<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Blank Page</title>
  <link href="{{ asset('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="{{asset('img/logo.png')}}">
        </div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.home') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('mobil.index') }}" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-car"></i>
          <span>Mobil</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('mobil.index') }}">List Mobil</a>
            <a class="collapse-item" href="{{ route('jenismobil.index') }}">Jenis Mobil</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('sewa.index') }}" data-toggle="collapse" data-target="#collapsePage2" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-list-ul"></i>
          <span>Penyewaan</span>
        </a>
        <div id="collapsePage2" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('sewa.index') }}">List Sewa</a>
            <a class="collapse-item" href="{{ route('sewa.pending') }}">Sewa Pending</a>
            <a class="collapse-item" href="{{ route('sewa.berjalan') }}">Sewa Berjalan</a>
            <a class="collapse-item" href="{{ route('sewa.selesai') }}">Sewa Selesai</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('list.index') }}" data-toggle="collapse" data-target="#collapsePage3" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fas fa-fw fa-user-tie"></i>
          <span>Admin</span>
        </a>
        <div id="collapsePage3" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('list.index') }}">List Admin</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle fa-2x"></i>
                <span class="ml-2 d-none d-lg-inline text-white">{{ Auth::user()->name }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('home') }}">
                  <i class="fas fa-columns fa-sm fa-fw mr-2 text-gray-400"></i>
                  Website Home
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        @yield('content')
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{ asset('js/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('js/app.js')}}"></script>
  <script src="{{ asset('js/ruang-admin.min.js')}}"></script>
  <script>
    $('#customFile').on('change',function(){
        //get the file name
        var fileName = $(this).val().replace('C:\\fakepath\\', " ");
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
    function getDiff() { 
      let polos1 = document.getElementById("tgl_sewa").value.replace(/-/g,'/');
      let polos2 = document.getElementById("tgl_selesai").value.replace(/-/g,'/');
      let date1 = new Date(polos1);
      let date2 = new Date(polos2);
      let diff = Math.abs(date2.getTime() - date1.getTime());
      let diff2 = diff / (1000 * 3600 * 24);
      if (isNaN(diff2)) {
        diff2 = '0';
      }
      $('#jml_sewa').val(diff2+' Hari');
      $('#jml_sewaHidden').val(diff2);
      var envelope = {};
      envelope.id= $('#mobil_id').val();
      $.ajax({
          type:'GET',
          url:'{{url("getHarga")}}',
          data: envelope,
          success:function(data) {
            $("#total").val(parseInt(diff2) * data.harga);
            $("#totalHidden").val(parseInt(diff2) * data.harga);
          }
      });
    }
  </script>
</body>

</html>