<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Articles</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Tambah Data Articles</h2>
                </div>

                <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('articles.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">           
        @csrf
            <div class="row">
                
                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Title</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                    @error('title')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Content</strong>
                    <input type="text" name="content" class="form-control" placeholder="Content">
                    @error('content')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Image</strong>
                    <input type="text" name="image" class="form-control" placeholder="Image">
                    @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>User_id</strong>
                    <input type="text" name="user_id" class="form-control" placeholder="User ID">
                    @error('user_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Category_id</strong>
                    <input type="text" name="category_id" class="form-control" placeholder="Category ID">
                    @error('category_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

            <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </body>
</html>