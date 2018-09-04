<form method='POST' action='create'>
    {{ csrf_field() }}
    タイトル：<input type="text" name="title"><br>
        本文:<textarea name="content" cols="45" rows="5"></textarea><br>
    写真:<input type="text" name="photo"><br>
    カテゴリ：<input type="text" name="cate"><br>
    記者：<input type="text" name="repo"><br>
    <input type='submit' name='送信'>
</form>