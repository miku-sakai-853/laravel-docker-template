# Laravel Lesson レビュー①

## Todo一覧機能

### Todoモデルのallメソッドで実行しているSQLは何か

SELECT * FROM todos;

### Todoモデルのallメソッドの返り値は何か

Illuminate\Database\Eloquent\Collectionクラスのインスタンス

### 配列の代わりにCollectionクラスを使用するメリットは

レコード情報を配列ではなくTodoインスタンスとして獲得できるので、そのインスタンスに対してメソッドが使用できる

### view関数の第1・第2引数の指定と何をしているか

第1引数：データを画面に表示させたいbladeファイル
第2引数：第1引数の画面に表示したいデータの連想配列
上記を指定し、Controllerから第1引数のbladeファイルに第2引数のデータを渡している

### index.blade.phpの$todos・$todoに代入されているものは何か

$todo：作成したTodoモデルのインスタンス
$todos：Illuminate\Database\Eloquent\Collectionクラスのインスタンス（allメソッドの返り値）

## Todo作成機能

### Requestクラスのallメソッドは何をしているか

### fillメソッドは何をしているか

### $fillableは何のために設定しているか

### saveメソッドで実行しているSQLは何か

### redirect()->route()は何をしているか

## その他

### テーブル構成をマイグレーションファイルで管理するメリット

### マイグレーションファイルのup()、down()は何のコマンドを実行した時に呼び出されるのか

### Seederクラスの役割は何か

### route関数の引数・返り値・使用するメリット

### @extends・@section・@yieldの関係性とbladeを分割するメリット

### @csrfは何のための記述か

### {{ }}とは何の省略系か
