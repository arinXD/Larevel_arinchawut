<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border-collapse: collapse;
        }

        tr,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            width: 200px;
            height: 50px;
            text-align: center;
        }

        div.form-wrap {
            width: fit-content;
            margin: 50px auto;
        }

        section {
            display: flex;
            align-items: center;
        }

        section h1 {
            text-align: center;
            flex: 1;
        }

        button[type="button"] {
            width: fit-content;
            height: fit-content;
        }
    </style>
    <script>
        function createForm() {
            window.location.href = "/food_order";
        }
    </script>
</head>

<body>
    <div class="form-wrap">
        <section>
            <h1>Food List</h1>
            <button onclick="createForm()" type="button">เพิ่มรายการอาหาร</button>
        </section>
        <table>
            <tr>
                <th>ชื่ออาหาร</th>
                <th>ประเภทอาหาร</th>
                <th>ราคา</th>
                <th>หมายเห็ด</th>
                <th>ลบ</th>
            </tr>
            @forelse($foods as $item)
                <?php 
                    $id=$item->id;
                    $name=$item->name;
                    $price=$item->price;
                ?>
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->price}}</td>
                    <td>
                        <a href="<?php echo "/updatefood/createForm/$id/$name/$price";?>">แก้ไข</a>
                    </td>
                    <td>
                        <a href="<?php echo "/updatefood/delete/$id";?>">ลบ</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">ไม่มีรายการสินค้า</td>
                </tr>
            @endforelse

        </table>
    </div>
</body>

</html>