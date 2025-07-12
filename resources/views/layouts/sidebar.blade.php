<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <span class="brand-text font-weight-light">Rumah Sakit</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Profile -->
        <div class="p-3 mb-2 bg-white rounded shadow-sm d-flex align-items-center">
            <div class="me-2">
                <i class="fas fa-user-circle fa-2x text-primary"></i>
            </div>
            <div>
                <div class="fw-bold">{{ Auth::user()->name }}</div>
                <div class="text-muted small">{{ Auth::user()->email }}</div>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('dokter.index') }}" class="nav-link {{ request()->is('dokter*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>Daftar Dokter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pasiens.index') }}" class="nav-link {{ request()->is('pasiens*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Daftar Pasien</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kunjungans.index') }}" class="nav-link {{ request()->is('kunjungans*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-notes-medical"></i>
                        <p>Daftar Kunjungan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kunjungans.create') }}" class="nav-link {{ request()->is('kunjungans/create') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-plus-circle"></i>
                        <p>Tambah Kunjungan</p>
                    </a>
                </li>
            </ul>
            <form method="POST" action="{{ route('logout') }}" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-danger w-100">
                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                </button>
            </form>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Modal dr. Andi -->
<div class="modal fade" id="dokterAndiModal" tabindex="-1" role="dialog" aria-labelledby="dokterAndiModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dokterAndiModalLabel">dr. Andi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Spesialis Anak. Berpengalaman dalam menangani kesehatan anak dan tumbuh kembang.
      </div>
    </div>
  </div>
</div>
<!-- Modal dr. Budi -->
<div class="modal fade" id="dokterBudiModal" tabindex="-1" role="dialog" aria-labelledby="dokterBudiModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dokterBudiModalLabel">dr. Budi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Spesialis Bedah. Ahli dalam tindakan operasi dan penanganan kasus bedah umum.
      </div>
    </div>
  </div>
</div>
<!-- Modal dr. Citra -->
<div class="modal fade" id="dokterCitraModal" tabindex="-1" role="dialog" aria-labelledby="dokterCitraModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="dokterCitraModalLabel">dr. Citra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Spesialis Penyakit Dalam. Fokus pada diagnosis dan pengobatan penyakit organ dalam.
      </div>
    </div>
  </div>
</div> 