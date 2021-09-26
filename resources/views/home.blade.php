<html>
    <head>
        <title>Halaman Home</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
            </tr>
                @foreach($article as $art)
                <tr>
                    <td>{{$art['id']}}</td>
                    <td>{{$art['title']}}</td>
                    <td>{{$art['content']}}</td>
                    <td>{{$art['image']}}</td>
                </tr>
                @endforeach
        </table>
</html>