@extends('admin.layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Contact Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                        {{ csrf_field() }}
                          <div class="card-body">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="company_email" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label>Office Address</label>
                                <input type="text" class="form-control" id="office_address" placeholder="Enter Address">
                              </div>

                            <div class="form-group">
                                <label>Company Phone Number</label>
              
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                  </div>
                                  <input type="text" class="form-control"
                                         data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                                </div>
                                <!-- /.input group -->
                              </div>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection