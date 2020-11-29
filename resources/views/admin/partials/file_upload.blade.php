<div class="card card-primary">
    <form role="form" action="{{ route('media.store') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="exampleInputFile">
              <label for="file" type="button" class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
              <span type="submit" class="input-group-text" id="">Upload</span>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>