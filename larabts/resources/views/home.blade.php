@extends('layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height:960px ;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-archive"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>



    <!-- Main content -->
    <div class="row" style="padding: 20px 20px 20px 20px">
      <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Tabel Satwa TNBTS</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="table-responsive">
                  <table class="table no-margin">
                    <thead>
                    <tr>                  
                      <th rowspan="2">No</th>
                      <th rowspan="2">Famili</th>
                      <th colspan="2">Spesies</th>                    
                      <th rowspan="2">Deskripsi Singkat</th>
                      <th colspan="2">Status Migrasi</th>                    
                      <th colspan="2">Status Konservasi</th>                    
                      <th rowspan="2">Koordinat Perjumpaan</th>
                      <th rowspan="2">Dokumentasi</th>
                      <th rowspan="2">Ket</th>                    
                      <th rowspan="2">Option</th>
                    </tr>
                    <tr>
                      <th>Nama Ilmiah</th>
                      <th>Nama Lokal</th>
                      <th>Lokal (menetap)</th>
                      <th>Migran</th>
                      <th>IUCN</th>
                      <th>Peraturan RI</th>                
                      
                    </tr>
                    </thead>
                    <tbody class="datasatwa">

                    @foreach ($satwa as $post)                    
                    <tr>  
                    <td>{{ $post->id }}</a></td>
                    <td>{{ $post->Famili }}</td>
                    <td>{{ $post->Namailmiah }}</td>
                    <td>{{ $post->Namalokal }}</td>
                    <td>{{ $post->Deskripsi }}</td>
                    <td>{{ $post->Lokal }}</td>
                    <td>{{ $post->Migran }}</td>
                    <td>{{ $post->IUCN }}</td>
                    <td>{{ $post->Peraturan }}</td>
                    <td>{{ $post->Koordinat }}</td>
                    <td>{{ $post->Dokumentasi }}</td>
                    <td>{{ $post->Ket }}</td>                      
                    <td><i class="fa fa-trash"></i>  |  <i class="fa fa-pencil"></i></td>
                    </tr>
                    @endforeach

                    <!-- 
                        HTML DataSatwa Tabel
                      <tr>
                      <td><a href="pages/examples/invoice.html">1</a></td>
                      <td>  Accipitridae</td>
                      <td>Nisaetus bartelsi</td>
                      <td>Elang Jawa</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>                              
                      <td><i class="fa fa-trash"></i>  |  <i class="fa fa-pencil"></i></td>                       

                      
                    </tr> -->
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                <a href="#" class="btn btn-sm btn-success btn-flat pull-left">Tambah Baru</a>
                <a href="#" class="btn btn-sm btn-default btn-flat pull-right">Lihat Keseluruhan</a>
              </div>
              <!-- /.box-footer -->
      </div>

        <!-- /.col -->
        
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>


        <!-- /.col -->
        
        <!-- /.col -->
      </div>

         
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
