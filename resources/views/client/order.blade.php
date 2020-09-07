@extends('client.nolayout')

@section('title', 'Form Order')
 

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="client">Home</a></li>
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
              <h3 class="card-title">Form Order</h3>
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
                  <form action="/orderadd" method="post"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nama">Nama Lengkap</label>
                          <input type="text" name="nama_customer" class="form-control" placeholder="Nama Lengkap ..." required="required">
                        </div>
                        <div class="form-group">
                          <label for="umur">Wilayah</label>
                          <input type="text" name="wilayah_customer" class="form-control" placeholder="Alamat ..." required="required">
                        </div>
                        <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <input type="text" name="alamat" class="form-control" placeholder="Alamat..." required="required">
                        </div>
                        <div class="form-group">
                          <label for="alamat">Telepon</label>
                          <input type="text" name="telepon" class="form-control" placeholder="Telepon..." required="required">
                        </div>
                        <div class="form-group">
                          <label for="alamat">Email</label>
                          <input type="text" name="email" class="form-control" placeholder="Email..." required="required">
                        </div>              
                      </div>
                      <div class="col-md-6">
                        <div class="card card-success">
                        <div class="card-header">
                          <h3 class="card-title">Data Product</h3>
                        </div>
                            <table id="cart" class="table table-hover table-condensed">
                            <thead>
                            <tr>
                                <th style="width:30%">Product</th>
                                <th style="width:10%">Price</th>
                                <th style="width:8%">Quantity</th>
                            </tr>
                            </thead>
                            <tbody>
                     
                            <?php $total = 0 ?>
                     
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                     
                                    <?php $total += $details['price'] * $details['quantity'] ?>
                     
                                    <tr>
                                        <td data-th="Product">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <p class="nomargin">{{ $details['name'] }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td data-th="Price">Rp {{ $details['price'] }}</td>
                                        <td data-th="Quantity">
                                            {{ $details['quantity'] }}
                                        </td>
                                @endforeach
                            @endif
                     
                            </tbody>
                            <tfoot>
                            <tr class="visible-xs">
                                <td class="text-center"><strong>Total {{ $total }}</strong></td>
                            </tr>
                            </tfoot>
                        </table>
                       </div>           
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

<!--           <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                
              </table>
            </div> -->
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