<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>支出入力画面</title>
</head>
<body>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('cost') }}"  method="post">
        {{ csrf_field() }}
    <dl>
        <dt>タイトル</dt>
        <dd><input type="text" name="title" size="30" value="{{ old('title') }}">
    </dl>
    <dl>
        <dt>金額</dt>
        <dd><input type="number" name="amount" size="30" value="{{ old('amount') }}">
    </dl>
    <dl>
        <dt>メモ</dt>
        <dd><textarea type="text" name="memo" rows="5" cols="20" value="{{ old('memo') }}"></textarea>
    </dl>
    
        <button type="submit">記帳</button>
    </form>
</body>

</html>