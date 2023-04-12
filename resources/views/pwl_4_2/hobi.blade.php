@extends('layout.template')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Hobi</h1>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Hobi Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Hobi</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
          <table class="table table-bordered tabel-hover">
            <thead class="table">
              <tr class="text-center bg-secondary">
                <td>No</td>
                <td>Nama</td>
                <td>Hobi</td>
                <td>Deskripsi Hobi</td>
              </tr>
            </thead>
            <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($data as $h)
            <tr>
              <td class="text-center">{{ $no++ }}</td>
              <td>{{ $h->nama }}</td>
              <td>{{ $h->hobi }}</td>
              <td>{{ $h->deskripsi_hobi }}</td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        muhammadhaikalbuldan@gmail.com
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>

@endsection

@push('custom_js')
<script>
  alert("Assalamualaikum")
</script>
@endpush('custom_js')