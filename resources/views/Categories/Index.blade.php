<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Investree Rakamin</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand">CRUD</a>        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="User">User</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="categories">Categories <span class="sr-only">(current)</span></a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="articles">Articles</a>
                    </li>             
                </ul>
            </div>
            <a class="navbar-brand">By Fikri Ramadhan</a>
        </nav>


        <div class="container mt-2">
        <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2> CRUD Tabel Categories</h2>
        </div>
        <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ route('Categories.create') }}"> Create Categories </a>
        </div>
        </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr class="text-center">
                <th>id</th>
                <th>name</th>
                <th>user_id</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($Categories as $categories)
            <tr>
                <td>{{ $categories->id }}</td>
                <td>{{ $categories->name }}</td>
                <td>{{ $categories->user_id }}</td>

                <td>
                <form action="{{ route('categories.destroy',$categories->id) }}" method="Post">
                <a class="btn btn-primary" href="{{ route('categories.edit',$categories->categories) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $categories->links() !!}
    </body>
</html>