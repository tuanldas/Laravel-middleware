<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Nhập tuổi của bạn</h1>
<form method="get" action="{{ route('confirm') }}">
    {{ csrf_field() }}
    <input name="age" placeholder="Nhập tuổi của bạn">
    <input type="submit" value="Kiểm tra">
</form>
</body>
</html>