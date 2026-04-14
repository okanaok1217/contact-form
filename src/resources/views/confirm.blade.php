<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm - FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    <header class="header">
        <h1>FashionablyLate</h1>
    </header>

    <main class="container">
        <h2 class="title">Confirm</h2>

        <form action="{{ route('thanks') }}" method="post" class="form">
            @csrf

            <div class="form-group">
                <label class="form-label">お名前</label>
                <div class="form-item">
                    <p>{{ $inputs['last-name'] }} {{ $inputs['first-name'] }}</p>
                    <input type="hidden" name="last-name" value="{{ $inputs['last-name'] }}">
                    <input type="hidden" name="first-name" value="{{ $inputs['first-name'] }}">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">性別</label>
                <div class="form-item">
                    <p>{{ $inputs['gender'] == 'male' ? '男性' : ($inputs['gender'] == 'female' ? '女性' : 'その他') }}</p>
                    <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">メールアドレス</label>
                <div class="form-item">
                    <p>{{ $inputs['email'] }}</p>
                    <input type="hidden" name="email" value="{{ $inputs['email'] }}">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">電話番号</label>
                <div class="form-item">
                    <p>{{ $inputs['tel1'] }}-{{ $inputs['tel2'] }}-{{ $inputs['tel3'] }}</p>
                    <input type="hidden" name="tel1" value="{{ $inputs['tel1'] }}">
                    <input type="hidden" name="tel2" value="{{ $inputs['tel2'] }}">
                    <input type="hidden" name="tel3" value="{{ $inputs['tel3'] }}">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">住所</label>
                <div class="form-item">
                    <p>{{ $inputs['address'] }}</p>
                    <input type="hidden" name="address" value="{{ $inputs['address'] }}">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">建物名</label>
                <div class="form-item">
                    <p>{{ $inputs['building'] }}</p>
                    <input type="hidden" name="building" value="{{ $inputs['building'] }}">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">お問い合わせ内容</label>
                <div class="form-item">
                    <p>{{ $inputs['detail'] }}</p>
                    <input type="hidden" name="detail" value="{{ $inputs['detail'] }}">
                </div>
            </div>

            <div class="form-button">
                <button type="submit">送信</button>
                <button type="button" class="back-button" onclick="history.back()">修正</button>
            </div>

        </form>
    </main>

</body>

</html>