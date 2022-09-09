<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        div.update-wrap{
            width: fit-content;
            margin: 80px auto;
        }
        .update-wrap h1{
            margin-bottom: 50px;
        }
        input[type="text"],
        select,
        input[type="number"]{
            margin-bottom: 20px;
        }
        select{
            width: 177px;
        }
        /* button[type="submit"]{
            margin: 0 auto;
            display: block;
            width: fit-content;
        } */
        label{
            display: inline-block;
            width: 105px;
            height: auto;
            text-align: right;
            margin-right: 15px;
        }
        .dismiss:disabled{
            background-color: lightcoral;
        }
    </style>
</head>
<body>
    <div class="update-wrap">
        <h1>แก้ไขรายการอาการ</h1>
        <form action="/updatefood" method="post" autocomplete="off">
            @csrf
            <label>รหัสอาหาร</label>
            <!-- <--placeholder="<?php echo "$updateID";?>"-->
            <input class="dismiss" type="text" name="updated_foodid" value=<?php echo $updateID;?> require readonly> <br>
            <!-- <input type="text" name="updated_foodid" value=<?php echo $updateID;?> require > <br> -->
            <label>ชื่ออาหาร</label>
            <input type="text" name="updated_foodname" placeholder="<?php echo "$updateName";?>" value="" require> <br>
            <label>ประเภทอาหาร</label>
            <select name="updated_foodtype" require>
                <option value="ข้าวราดแกง">ข้าวราดแกง</option>
                <option value="ก๋วยเตี๋ยว">ก๋วยเตี๋ยว</option>
                <option value="ยำ">ยำ</option>
            </select><br>
            <label>ราคา</label> 
            <input type="number" name="updated_foodprice" placeholder="<?php echo "$updatePrice";?>" value=""  min="1" require><br>
            <label></label>
            <button type="submit">แก้ไขข้อมูล</button>
        </form>
    </div>
</body>
</html>