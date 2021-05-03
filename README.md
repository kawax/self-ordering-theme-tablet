# セルフオーダーシステムのタブレット用テーマ（ベータ版）

https://github.com/kawax/self-ordering

## 概要
「自分のスマホ」ではなく「お店のテーブルに備え付けのタブレット」から注文する使い方を想定したタブレット用テーマ。

実際に導入するにはLaravelプロジェクト側でのカスタマイズも色々必要。

## インストール
```
composer require revolution/self-ordering-theme-tablet
```

`tailwind.config.js`の`purge`に追加。
```js
    purge: [
        //
        './vendor/revolution/self-ordering-theme-tablet/resources/views/**/*.blade.php',
    ],
```

```
npm run prod
```

インストールするだけでテーマが有効なので使用を止めるにはアンインストールしてください。

## カスタマイズ
```
php artisan vendor:publish --tag=ordering-theme-tablet
```

## LICENCE
MIT
