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
                    <li class="nav-item active">
                        <a class="nav-link" href="user">User <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories">Categories</a>
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
        <h2> CRUD Tabel User</h2>
        </div>
        <div class="pull-right mb-2">
        <a class="btn btn-success" href="{{ route('user.create') }}"> Create User </a>
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
                <th>user_id</th>
                <th>name</th>
                <th>password</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($User as $user)
            <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->password }}</td>

                <td>
                <form action="{{ route('user.destroy',$user->user_id) }}" method="Post">
                <a class="btn btn-primary" href="{{ route('user.edit',$user->user) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $User->links() !!}
    </body>
</html>