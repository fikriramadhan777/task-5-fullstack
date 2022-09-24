<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit Categories</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                <h2>Ubah Data Categories</h2>
                </div>
                <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.index') }}" enctype="multipart/form-data"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('categories.update',$categories->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}">
            @error('name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>User_id</strong>
            <input type="text" name="user_id" value="{{ $categories->user_id }}" class="form-control" placeholder="User ID">
            @error('user_id')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
        </div>
    </body>
</html>