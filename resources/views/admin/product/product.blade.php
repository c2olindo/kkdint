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
                @foreach ($product as $item)
                <tr>
                    <td>
                        {{ $item['id'] }}
                    </td>
                    <td>
                        <a>
                            {{ $item['product_name'] }}
                        </a>
                        <br/>
                    </td>
                    <td>
                        <ul class="list-inline">
                           {{ $item['description'] }}
                        </ul>
                    </td>
                    <td>
                        <img src="{{ asset($item['image']) }}" alt="" style="height: 50px; width: auto;">
                        
                    </td>
                    <td class="project_progress">
                        @if ($item['is_featured'] == '1')
                            Yes
                        @else
                            No
                        @endif
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
                @endforeach
                
            </tbody>
        </table>
      </div>
    </div>
</section>
@endsection