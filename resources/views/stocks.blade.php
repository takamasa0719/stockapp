<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/stocks.css">
    <title>StockApp</title>
</head>
<body>
    <header>
        <div class="header_container">
            <img class="top_img" src="/imgs/logo.svg">
            <h1 class="title">StockApp</h1>
            <a class="user_btn" href="#" ></a>
        </div>
    </header>
    <div class="main_container">
        <main class="main_content">
            <div class="main_btn_container">
                <input type="button" id="openBtn" value="+ Add" class="openBtn">
                    <div id="modal" class="modal">
                        <div class="modal__content">
                            <div class="modal__content-inner">
                            @if (count($errors) > 0)
                                <p>入力に問題があります</p>
                            @endif
                                <form action="/stock/add" method="post" >
                                    @csrf
                                    <p>在庫名</p>
                                    <input type="text" name="name">
                                    <p>在庫量</p>
                                    <input type="text" name="amount">
                                    <p>単位</p>
                                    <input type="text" name="unit">
                                    <p>使用期限</p>
                                    <input type="date" name="expired_at">
                                    <input type="submit" value="追加">
                                </form>
                                <input type="button" id="closeBtn" value="閉じる">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="stocks_container">
                
            </div>
        </main>
        <aside class="sidebar"></aside>
    </div>
    <script src="/js/main.js"></script>
</body>
</html>