<?php
//определение ассоциативного массива транзакций
$transactions = [
    [
        "transaction_id" => 1, // id
        "transaction_date" => "2019-01-01", // дата
        "transaction_amount" => 100.00, // сумма транзакции
        "transaction_description" => "Payment for groceries", // описание
        "merchant_name" => "SuperMart", // название организации
    ],
    [
        "transaction_id" => 2,
        "transaction_date" => "2020-02-15",
        "transaction_amount" => 75.50,
        "transaction_description" => "Dinner with friends",
        "merchant_name" => "Local Restaurant",
    ],
    [
        "transaction_id" => 3,
        "transaction_date" => "2021-03-20",
        "transaction_amount" => 50.25,
        "transaction_description" => "Online shopping",
        "merchant_name" => "OnlineStore.com",
    ],
    [
        "transaction_id" => 4,
        "transaction_date" => "2022-05-10",
        "transaction_amount" => 120.75,
        "transaction_description" => "Electronics purchase",
        "merchant_name" => "TechZone",
    ],
    [
        "transaction_id" => 5,
        "transaction_date" => "2023-08-18",
        "transaction_amount" => 30.50,
        "transaction_description" => "Coffee shop",
        "merchant_name" => "JavaCafe",
    ],
];

function calculateTotalAmount($transactions){
$totalAmount = 0;
foreach($transactions as $transaction){
    $totalAmount += $transaction["transaction_amount"];   
}
return $totalAmount;
}

function calculAverage($transactions){
 
        $totalAmount = calculateTotalAmount($transactions);
        $transactionCount = count($transactions);
        if ($transactionCount > 0) {
            $average = $totalAmount / $transactionCount;
            return $average;
        } else {
            return 0; // Возвращаем 0, если нет транзакций, чтобы избежать деления на ноль.
        }
}

?>
<table border="1">
    <tr style="background-color: #a6a6a6; color: #252525">
        <th colspan="5">Транзакции</th>
    </tr>
    <tr style="background-color: #a6a6a6; color: #252525">
        <th>ID</th>
        <th>Дата</th>
        <th>Сумма транзакции</th>
        <th>Описание транзакции</th>
        <th>Название организации</th>
    </tr>
    <?php
    foreach ($transactions as $transaction) { ?>
        <tr>
            <!-- Выведите на экран данные о транзакциях -->
            <td><?php echo $transaction['transaction_id']; ?></td>
            <td><?php echo $transaction['transaction_date']; ?></td>
            <td><?php echo $transaction['transaction_amount']; ?></td>
            <td><?php echo $transaction['transaction_description']; ?></td>
            <td><?php echo $transaction['merchant_name']; ?></td>
        </tr>
    <?php } ?>
    <tr style="background-color: #a6a6a6; color: #252525">
        
        <td colspan="2"><strong>Общая сумма:</strong></td>
        <td colspan="3"> <?php echo calculateTotalAmount($transactions); ?></td>
    </tr>
    <tr  style="background-color: #a6a6a6; color: #252525">
    <td colspan="2"><strong>Cреднее арифметическое:</strong></td>
        <td colspan="3"> <?php echo calculAverage($transactions); ?></td>
    </tr>

