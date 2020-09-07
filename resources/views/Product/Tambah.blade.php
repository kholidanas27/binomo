@extends('responsi.master')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Product</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="exaple2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6"></div>
                  <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                  <form action="/product/upload" method="post"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nama">Nama Product</label>
                          <input type="text" name="nama" class="form-control" placeholder="Nama User ..." required="required">
                        </div>
                        <div class="form-group">
                          <label for="umur">Kategori Product</label>
                          <input type="text" name="kategori" class="form-control" placeholder="Kategori Product" required="required">
                        </div>
                        <div class="form-group">
                          <label for="alamat">Harga Product</label>
                          <input type="text" name="harga" class="form-control" placeholder="Harga Product" required="required">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="alamat">Berat Product</label>
                          <input type="text" name="berat" class="form-control" placeholder="Berat Product" required="required">
                        </div>
                        <div class="form-group">
                          <label for="alamat">Jumlah Product</label>
                          <input type="text" name="jumlah" class="form-control" placeholder="Jumlah Product" required="required">
                        </div>
                        <div class="form-group">
                          <label for="file">File Gambar</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="file">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="form-group">
                          <label for="status">Deskripsi Product</label>
                          <textarea  name="deskripsi" class="form-control" placeholder="Deskripsi Product" required="required"></textarea>
                        </div>
                    
<!--                     <div class="form-group">
                      <b>File Gambar</b><br/>
                      <input type="file" name="file">
                    </div> -->
                    <div class="modal-footer">
                      <button class="btn btn-success" type="submit" value="upload"> Comfirm</button>
                      <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    </div>
                  </form>
                </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      </div>
      <!-- /.row -->
    </section>


@endsection