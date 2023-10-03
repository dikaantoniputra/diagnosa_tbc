<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true" style="background-color: #000000">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/logo.jpg') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <p class="pt-3 text-white">Admin</p>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
   
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ url('/admin') }}">
                    <div class="parent-icon"><i class='bx bx-home-circle' style="color: white;"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>

            </li>
            <li class="menu-label text-white">Pengguna</li>
            <li>
                <a href="{{ url('admin/user') }}">
                    <div class="parent-icon"><i class="bx bx-category" style="color: white;"></i>
                    </div>
                    <div class="menu-title">DATA USER</div>
                </a>
            </li>

            <li class="menu-label text-white">Penyakit</li>
            
            <li>
                <a href="{{ url('admin/layanan') }}">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart' style="color: white;"></i>
                    </div>
                    <div class="menu-title">Kategori Penyakit</div>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/mpembayaran') }}">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart' style="color: white;"></i>
                    </div>
                    <div class="menu-title">Soal Penyakit</div>
                </a>
            </li>
             <li>
                <a href="{{ url('admin/mpembayaran') }}">
                    <div class="parent-icon"><i class='bx bx-bookmark-heart' style="color: white;"></i>
                    </div>
                    <div class="menu-title">Solusi</div>
                </a>
            </li>

            <li class="menu-label text-white">Laporan</li>
            <li>
                <a href="{{ url('admin/orderan') }}">
                    <div class="parent-icon"><i class="bx bx-user-circle" style="color: white;"></i>
                    </div>
                    <div class="menu-title">Riwayat Penyakit Pasien</div>
                </a>
            </li>

            <li class="menu-label text-white">Menu User</li>

            <li class="menu-label text-white">Pertanyaan</li>
            <li>
                <a href="{{ url('admin/orderan') }}">
                    <div class="parent-icon"><i class="bx bx-user-circle" style="color: white;"></i>
                    </div>
                    <div class="menu-title">Pertanyaan Penyakit</div>
                </a>
            </li>

            <li class="menu-label text-white">Laporan User</li>
            <li>
                <a href="{{ url('admin/orderan') }}">
                    <div class="parent-icon"><i class="bx bx-user-circle" style="color: white;"></i>
                    </div>
                    <div class="menu-title">Riwayat Diagnosa</div>
                </a>
            </li>
           
            

           
        </ul>

    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
