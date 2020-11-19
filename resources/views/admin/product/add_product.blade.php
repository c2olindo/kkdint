@extends('admin.layout')

@section('content')
<section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-outline card-info">
          <div class="card-header">
            <h3 class="card-title">
              Add New Product
            </h3>
          </div>
          <div class="card-body pad">
          <form role="form" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box-body">
              <div class="col-lg-6">

                <div class="form-group">
                  <label for="pname">Product Name</label>
                  <input type="text" class="form-control" id="title" name="pname" placeholder="Product Name">
                </div>

                <div class="form-group">
                  <label for="slug">Product Slug</label>
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                </div>

              </div>
              <div class="col-lg-6">
                            <br>
                              <div class="form-group">
                                <div class="pull-right">
                                  <label for="image">File input</label>
                                  <input type="file" name="image" id="image">
                                </div>
                                <div class="checkbox pull-left">
                                  <label>
                                    <input type="checkbox" name="pfeature" value="1"> Is Featured?
                                  </label>
                                </div>
                              </div>
                              <br>
                            </div>
            </div>
            <!-- /.box-body -->

            <div class="box">
             <div class="box-header">
               <h3 class="box-title">Product Description
               </h3>
               </div>
               <!-- /.box-header -->
               <div class="card-body pad">
                <div class="mb-3">
                  <textarea class="textarea" name="pdescripion" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
                <p class="text-sm mb-0">
                  Editor <a href="https://github.com/summernote/summernote">Documentation and license
                  information.</a>
                </p>
              </div>

             </div>

             <div class="box-footer">
              <input type="submit" class="btn btn-primary">
              <a href='{{ route('product.index') }}' class="btn btn-warning">Back</a>
            </div>
          </form>
          </div>
        </div>
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
@endsection
