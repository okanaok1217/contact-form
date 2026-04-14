<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate Contact Form</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <header class="header">
        <h1>FashionablyLate</h1>
    </header>

    <main class="container">
        <h2 class="title">Contact</h2>

        <form action="{{ route('contact.confirm') }}" method="post" class="form">
            @csrf
            <div class="form-group">
                <label class="form-label">お名前 <span>※</span></label>
                <div class="form-item-row">
                    <input type="text" name="last-name" placeholder="例: 山田" value="{{ old('name') }}">
                    <input type="text" name="first-name" placeholder="例: 太郎" value="{{ old('name') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">性別 <span>※</span></label>
                <div class="form-item radio-group">
                    <label><input type="radio" name="gender" value="male" checked> 男性</label>
                    <label><input type="radio" name="gender" value="female"> 女性</label>
                    <label><input type="radio" name="gender" value="other"> その他</label>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">メールアドレス <span>※</span></label>
                <div class="form-item">
                    <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">電話番号 <span>※</span></label>
                <div class="tel-container">
                    <input type="text" name="tel1" placeholder="080" value="{{ old('tel1') }}">
                    <span class="hyphen">-</span>
                    <input type="text" name="tel2" placeholder="1234" value="{{ old('tel2') }}">
                    <span class="hyphen">-</span>
                    <input type="text" name="tel3" placeholder="5678" value="{{ old('tel3') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">住所 <span>※</span></label>
                <div class="form-item">
                    <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">建物名</label>
                <div class="form-item">
                    <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">お問い合わせの種類 <span>※</span></label>
                <div class="form-item">
                    <select name="content-type">
                        <option value="" disabled selected>選択してください</option>
                        <option value="">1.商品のお届けについて</option>
                        <option value="">2.商品の交換について</option>
                        <option value="">3.商品トラブル</option>
                        <option value="">4.ショップへのお問い合わせ</option>
                        <option value="">5.その他</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">お問い合わせ内容 <span>※</span></label>
                <div class="form-item">
                    <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
            </div>

            <div class="form-button">
                <button type="submit">確認画面</button>
            </div>

            <div class="form_error">
                @error('name')
                    {{ $message }}
                @enderror
            </div>

        </form>
    </main>

</body>

</html>