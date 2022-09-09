<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food order</title>
    <script>
        function orderList(){
            alert("เพิ่มรายการอาหารสำเร็จ!!");
        }
    </script>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        div.form-warp h1{
            text-align: center;
        }
        div.form-warp{
            width: fit-content;
            margin: 100px auto;
        }
        input[type="text"],
        select,
        input[type="number"]{
            margin-bottom: 20px;
        }
        select{
            width: 177px;
        }
        button[type="submit"]{
            margin: 0 auto;
            display: block;
            width: fit-content;
            
        }
        label{
            display: inline-block;
            width: 105px;
            height: auto;
            text-align: right;
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <div class="form-warp">
        <h1>Food order</h1>
        <form action="/food_order" method="post" autocomplete="off" >
            @csrf
            <label>ประเภทอาหาร:</label> 
            <select name="foodType" require>
                <option value="ข้าวราดแกง">ข้าวราดแกง</option>
                <option value="ก๋วยเตี๋ยว">ก๋วยเตี๋ยว</option>
                <option value="ยำ">ยำ</option>
            </select><br>
            <label>ชื่ออาหาร:</label> 
            <input type="text" name="foodName" value="" require> <br>
            <label>ราคา:</label> 
            <input type="number" name="price" value="" min="1" require><br>
            <button onclick="orderList()" type="submit">เพิ่มรายการอาหาร</button>
        </form>
    </div>
</body>
</html>