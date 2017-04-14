<html>
<body>
<form action="{{ url('linkedlist/insert') }}"method="post">
    Theindex:<br>
    <input type="text" name="student[theindex]"    value="number" >
    <br>
    Value:<br>
    <input type="text" name="student[value]"    value="name" >
    <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>