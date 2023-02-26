@extends('alumni.layout.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row pt-4">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Filter Lowongan</h5>

                <p class="card-text">
                  <ul>
                    <li>Web developer</li>
                    <li>desain grafis</li>
                    <li>sales</li>
                    <li>marketing</li>
                    <li>seerfice</li>
                  </ul>
                </p>

                <a href="#" class="card-link"> <i class="fa fa-search"></i>Terapkan Filter </a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
            <!-- /.card -->
          </div>

          <!-- /.col-md-9 -->
          <div class="col-lg-9">
            {{-- top card --}}

            @foreach ($lowongan as $item)
            <div class="card">
              <div class="card-body">
                <div class="card-title">
                <span class="h4 d-block mb-0">{{ $item->nama_lowongan }}</span>
                <span>{{ $item->mitra->nama_mitra }}</span>
                </div>
                <div class="card-body">
                <p class="card-text">
                  <div class="d-flex">
                  <div class="loker-info d-block col-lg-1">
                  </div>
                  <div class="loker-info d-block col-lg-5">
                    <p><i class="fa fa-industry"></i> {{ $item->bidang }}</p>
                    <p><i class="fa fa-map-marker"></i> {{ $item->mitra->alamat_mitra }}</p>
                    <p><i class="fa fa-black-tie"></i> {{ $item->mitra->keterangan }}</p>
                    <p><i class="fa fa-clock-o"></i> {{ $item->tgl_lowongan }}</p>
                    <p><i class="fa fa-clock-o"></i> {{ $item->tgl_habis }}</p>
                  </div>
                  <div class="loker-info d-block col-lg-3">
                  </div>
                  <div class="loker-info d-flex align-items-center justify-content-center col-lg-3">
                    <a href="#" class="btn btn-warning ">Lamar</a>
                  </div>
                  </div>
                </div>
                </p>
              </div>
            </div> 
            @endforeach
          </div>
          
          
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection