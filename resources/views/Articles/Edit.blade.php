<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit Articles</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                <h2>Ubah Data Articles</h2>
                </div>
                <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.index') }}" enctype="multipart/form-data"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('articles.update',$articles->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>title</strong>
            <input type="text" name="title" class="form-control" placeholder="title" value="{{ $articles->title }}">
            @error('name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>content</strong>
            <input type="text" name="content" value="{{ $articles->content }}" class="form-control" placeholder="Content">
            @error('content')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>image</strong>
            <input type="text" name="image" value="{{ $articles->image }}" class="form-control" placeholder="Image">
            @error('image')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>user_id</strong>
            <input type="text" name="user_id" value="{{ $articles->user_id }}" class="form-control" placeholder="User ID">
            @error('user_id')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            </div>
            </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>category_id</strong>
            <input type="text" name="category_id" value="{{ $articles->category_id }}" class="form-control" placeholder="Category ID">
            @error('category_id')
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