@extends('admin.layout')

@section('content')
<section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Products</h3>
        <div class="card-tools">
            <a class="btn btn-primary btn-sm" href="{{ route('product.create') }}">
                Add New Product
            </a>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        ID
                    </th>
                    <th style="width: 20%">
                        Product Name
                    </th>
                    <th style="width: 30%">
                        Description
                    </th>
                    <th>
                        Product Image
                    </th>
                    <th style="width: 8%" class="text-center">
                        Is featured
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <a>
                            AdminLTE v3
                        </a>
                        <br/>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <p>&#9830;  48V12Ah Battery Capacity</p>
                            <p>&#9830;  16" Wheels with Tubeless Tire</p>
                            <p>&#9830;  Lead acid battery </p>
                            <p>&#9830;  350W Motor</p>
                            <p>&#9830;  Top Speed: 35 km/h+</p>
                            <p>&#9830;  Range: 40 km</p>
                        </ul>
                    </td>
                    <td>
                        IMAGE
                    </td>
                    <td class="project_progress">
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="customSwitch1">
                              <label class="custom-control-label" for="customSwitch1"></label>
                            </div>
                          </div>
                    </td>

                    <td class="project-actions text-right" >
                        <a class="btn btn-primary btn-sm" style="width: 100%;  margin-bottom: 5px;" href="#">
                            <i class="fas fa-pencil">
                            </i>
                            Edit Product
                        </a>
                        <a class="btn btn-success btn-sm" style="width: 100%;  margin-bottom: 5px;" href="#">
                            <i class="fas fa-folder-alt">
                            </i>
                            Product Image
                        </a>
                        <a class="btn btn-danger btn-sm" style="width: 100%;  margin-bottom: 5px;" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete Product
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
</section>
@endsection