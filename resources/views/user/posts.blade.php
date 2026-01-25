<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <title>Posts</title>
</head>

<body class="m-5">
    <table class="table  table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($posts as $post)
            <tr class="{{ $loop->even ? 'table-secondary' : '' }}">
                <th>{{ $post['id'] }}</th>
                <th>{{ $post['title'] }}</th>
                <th>{{ $post['content'] }}</th>
            </tr>
            @empty
            <td colspan='3'>No Data Found</td>
            @endforelse

        </tbody>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </script>
</body>

</html>
