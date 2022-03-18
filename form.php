<?php
//hàm isset kiểm tra tồn tại của 1 biến;
//Tồn tại trả về true
//Không tồn tại trả về false
//is_numeric:là để kiểm tra biến có thuộc kiểu số hay chuối số
if (isset($_POST['btn_submit'])) {
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];

    if ($num1 == "" || !is_numeric($num1)) {
        $errors['number1'] = "Bạn phải nhập dữ liệu cho số thứ nhất";
    }
    if ($num2 == "" || !is_numeric($num2)) {
        $errors['number2'] = "Bạn phải nhập dữ liệu cho số thứ hai";
    }
    if (!isset($errors['number1']) && !isset($errors['number2'])) {//không tồn tại 2 giá trị $errors thì sẽ chạy đến tính tổng
        $sum = $num1 + $num2;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý form</title>
</head>
<body>
    <form action="form.php" method="post">
        <h2>Tính tổng</h2>
        <label for="">Nhập số thứ nhất</label>
        <input type="text" name="number1" value="<?= isset($num1) ? $num1 : ''?>">
        <!-- value="<?= isset($num1) ? $num1 : ''?> là để kiểm tra giá trị $num1 có hay k:nếu có thì in ra gia trị,nếu không thì để trống -->
         <span style="color:red">
        <?= isset($errors['number1']) ? $errors['number1'] : "" ?>
        </span>
        <br>
         <label for="">Nhập số thứ 2</label>
        <input type="text" name="number2" value="<?= isset($num2) ? $num2 : ''?>">
        <span style="color:#ff0000">
         <?= isset($errors['number2']) ? $errors['number2'] : "" ?>
       </span>
        <br>
        <button type="submit" name="btn_submit">Tính</button>
    </form>
    <?php
    if(isset($sum)) :?>
    <h3><?= " tông $num1+ $num2=$sum " ?></h3>
    <?php endif ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>