<!DOCTYPE>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>都道府県リスト</title>
    </head>
    <body>
        <h1>都道府県リスト</h1>
        <ul>
           @foreach ($prefectures as $prefecture)
                <div class="prefectures">
                    <button><a href="{{ route('record',['name'=>$prefecture]) }}">{{ $prefecture }}</a></button>
                </div>
           @endforeach
        </ul>
        <a href="{{route('logout')}}">ログアウト</a>
    </body>
</html>