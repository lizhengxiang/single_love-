<?php if (!defined('THINK_PATH')) exit();?><html>
<body>
<form action="information" method="post">
昵称: <input type="text" name="nickname"><br>
性别: <input type="text" name="gender"><br>
出生日期: <input type="date" name="birth"><br>
身高: <input type="text" name="height"><br>
学历: <input type="text" name="schooling"><br>
婚姻状况: <input type="text" name="marriage"><br>
有无子女: <input type="text" name="childern"><br>
工作所在地: <input type="text" name="work"><br>
居住所在地: <input type="text" name="home"><br>
籍贯: <input type="text" name="place"><br>
血型: <input type="text" name="type"><br>
星座: <input type="text" name="constellation"><br>
月薪: <input type="text" name="income"><br>
居住情况: <input type="text" name="live"><br>
购车情况: <input type="text" name="car"><br>
<input type="submit" value = "保存并继续">
<a href="https://localhost/single_love/index.php/Home/Personal/New/index/user_id/<?php echo ($user_id['id']); ?>" target="_blank"><button type="button">资料预览!</button></a>
</form>
</body>
</html>