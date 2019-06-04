<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
    <style>
        input[type=number] {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }

    </style>
</head>
<body>
<br/>
<h3>Simple Calculator</h3>
<form action="display_discount.php"  method="post">
    Gia san pham
    <input type="number" name="search1"/><br>
    Ti Le chiet khau
    <input type="number" name="search2"/><br>
    <input type="submit" id="submit" value="Calculate" />
</form>
</body>
</html>
