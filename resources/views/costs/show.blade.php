<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>支出詳細画面</title>
</head>
<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
   
    <tr>
        <td>{{ $cost->title }}</td>
        <td>¥{{ $cost->amount }}</td>
        <td>{{ $cost->memo}}</td>
    </tr>
    
</body>

</html>