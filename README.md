
live sass compiler
CSSコンパイル先設定
①拡張機能の設定を開く
②setting.jsonで編集

"liveSassCompile.settings.formats": [
    {
      "format": "expanded", // 出力されるCSSの形式。"expanded"は通常の読みやすい形式。"compressed"は圧縮された形式。
      "extensionName": ".css", // 出力されるファイルの拡張子。通常は.css。
      "savePath": "~/../css/" // .scssファイルからの相対的な出力先のフォルダを指定。nullだと同階層、'/'はルートディレクトリを意味する。
    }
  ],
  "liveSassCompile.settings.autoprefix": [
    "> 10%",          // 全体のユーザーの10%以上が使用しているブラウザバージョンに対応
    "last 2 versions" // 各ブラウザの最新2バージョンに対応
  ],
  "liveSassCompile.settings.excludeList": [
    ".vscode/**" // .vscodeフォルダ内のすべてのファイルやサブフォルダをコンパイルから除外
  ],
  "liveSassCompile.settings.generateMap": false, // ソースマップ(.map)ファイルの生成を無効にする。
  "workbench.editor.untitled.hint": "hidden",    // VS Codeの未命名エディタのヒントを非表示にする。
  "liveSassCompile.settings.includeItems": []    // 特定のアイテムをコンパイルに含めるリスト。現在は空。


  に書き換える

---------------------------------------------

テンプレートの命名ルール

Figmaのフレーム名と合致させる。

例）
service事業内容
page-service.php

mainタグにかならず<main class="service"></div>などクラス名をつけ、
sassでhtmlタグに直接スタイルをつける時は
.service{
  li{

  }
}

などとする

---------------------------------------------


※sassファイルの増やし方
！！基本的に自分の名前のフォルダ以外は触らない！！
→自分の名前のフォルダ以外を触る必要がある時は、声をかけてください

-コンポーネント
(例)
assets/sass/yoru/J_components　の中に
_C_〇〇.scss を作成
assets/sass/yoru/J_components/_index.scss
に
@forward 'C_〇〇';
を追加

-ページ
🌟(例)
assets/sass/moriyama/J_page　の中に

assets/sass/moriyama/J_page/ページ名　フォルダを作成
assets/sass/moriyama/J_page/_index.scss に
@forward 'ページ名';
を追加

assets/sass/moriyama/J_page/ページ名　フォルダ　の中にセクションごとに
_セクション名.scss を作成
assets/sass/moriyama/J_page/home/_index.scss
に
@forward 'セクション名';
を追加


---------------------------------------------

※変数

◉mixins
基本的なmixinを記述するファイル

◉fonts
フォントスタイルを記載するファイル
作成したフォントはunityでbodyに適用する

◉svg
svg画像の管理ファイル


◉variables
色の変数を記述するファイル

◉animeとjsにアニメーションのテンプレあり
※ただしjQuery形式



---------------------------------------------

レスポンシブルール

PCの画面幅がカンプの幅以上になった時（1512px以上）
最大幅を設定し余白だけがひろがるようにする

---------------------------------------------

色について

文字色はすでに設定してあります。
その他、グラデーションは$gra01
point01という名前のついた色は$point01

↑だけvariables.scssに作ってます。


---------------------------------------------

フォントについて

すでに基本をNoto Sans JPに設定しています

Bebasというフォントも使われているようなので、そちらを使う場合は
@include Bebas;
を指定してください


---------------------------------------------

jsについて

script.js　小嶋
script-02.js 森山さん
script-03.js 北澤さん
でお願いします。

---------------------------------------------


共通クラス名

.sp
スマホサイズの画面幅でのみ表示

.pc
PCサイズの画面でのみ表示

-応用例（スマホサイズの画面幅の時のみ改行）
<p> テキストテキストテキストテキストテキストテキスト<br class="sp">テキストテキストテキストテキスト</p>



---------------------------------------------

主な関数

◎メデイアクエリ
PCサイズ
  @include pc {
    

  }

SPサイズ
  @include sp {

  }


◎サイズの指定
PC 
pmin(カンプの値)


SP
s(カンプの値)


◎画像の配置
 - background-size: contain;

@include imgContain("example.jpg");

 - background-size: cover;

 @include imgCover("example.jpg");



