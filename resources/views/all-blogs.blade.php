<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Post List</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th, td{
            text-align: center;
            padding: 8px;
            border: 1px solid #000;
        }
        a.btn.btn-info{
            color: #fff;
        }
    </style>
</head>
<body>
    <a style="float:right;margin-right:10px" href="{{ route('blog-post') }}" class="btn btn-success mt-2 mb-3">Add Post</a>
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach($blogPosts as $blogPost)
        <tr>
            <td class="text-success"><b>{{ $blogPost->title }}</b></td>
            <td class="text-warning">{{ $blogPost->description }}</td>
            <td>
                <a href="{{ route('edit-blog',['blogPost' => $blogPost->id]) }}" class="btn btn-info">Edit</a> |
                <a href="{{ route('delete-blog',['blogPost' => $blogPost->id]) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>