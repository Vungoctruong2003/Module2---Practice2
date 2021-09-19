<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        img {
            width: 50px;
            height: 50px;
        }
        form {
            text-align: center;
        }
        caption {
            background-color: aqua;
        }
    </style>
</head>
<body>
<form method="GET" action="loc%20danh%20sach%20khach%20hang.php">
    Chọn ngày sinh từ: <input id="from" type="date" name="from" placeholder="yyyy/mm/dd"
                              value=""/>
    đến: <input id="to" type="date" name="to" placeholder="yyyy/mm/dd"
                value=""/>
    <input type="submit" id="submit" value="Lọc"/>
</form>
<?php
$fromDate = null;
$toDate = null;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $fromDate = $_REQUEST["from"];
    $toDate = $_REQUEST["to"];
}
$customerList = [
    "1" => [
        "name" => "Jisoo",
        "day_of_birth" => "1995/08/20",
        "address" => "Hà Nội",
        "profile" => "images/img1.jpeg"],
    "2" => [
        "name" => "Lisa",
        "day_of_birth" => "1997/08/21",
        "address" => "Bắc Giang",
        "profile" => "images/img2.jpeg"],
    "3" => [
        "name" => "Jennie",
        "day_of_birth" => "1996/08/22",
        "address" => "Nam Định",
        "profile" => "images/img3.jpeg"],
    "4" => [
        "name" => "IU",
        "day_of_birth" => "1992/08/17",
        "address" => "Hà Tây",
        "profile" => "images/img4.jpeg"],
    "5" => [
        "name" => "Rose",
        "day_of_birth" => "1997/08/19",
        "address" => "Hà Nội",
        "profile" => "images/img5.jpeg"]
];

function searchByDate($customers, $fromDate, $toDate)
{
    if (empty($fromDate) || empty($toDate)) {
        return $customers;
    }

    $filteredCustomers = [];
    foreach ($customers as $customer) {
        if (strtotime($customer['day_of_birth']) < strtotime($fromDate))
            continue;
        if (strtotime($customer['day_of_birth']) > strtotime($toDate))
            continue;
        $filteredCustomers[] = $customer;
    }
    return $filteredCustomers;
}

$filteredCustomers = searchByDate($customerList, $fromDate, $toDate);

?>

<table border="0">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($filteredCustomers as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['day_of_birth']; ?></td>
            <td><?php echo $customer['address']; ?></td>
            <td>
                <div class="profile"><img src="<?php echo $customer['profile']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>

