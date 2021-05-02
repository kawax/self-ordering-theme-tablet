# セルフオーダーシステムのタブレット用テーマ（ベータ版）

https://github.com/kawax/self-ordering

## 概要
「自分のスマホ」ではなく「お店のテーブルに備え付けのタブレット」から注文する使い方を想定したタブレット用テーマ。

実際に導入するにはLaravelプロジェクト側でのカスタマイズも色々必要。

## インストール
```
composer require revolution/self-ordering-theme-tablet
```

インストールするだけでテーマが有効なので使用を止めるにはアンインストールしてください。

## カスタマイズ
```
php artisan vendor:publish --tag=ordering-tablet-views
```

## LICENCE
MIT