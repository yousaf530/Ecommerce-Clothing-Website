<?php

if (isset($_SESSION['customer_email'])) {

    $c_id = $_SESSION['customer_email'];

    $query = "select * from customer where customer_email= '$c_id'";

    $run_query = mysqli_query($con, $query);


    $get_query = mysqli_fetch_array($run_query);

    $custom_id = $get_query['customer_id'];


    $get_items = "select * from orders where c_id = '$custom_id' ORDER BY date DESC";
    $run_items = mysqli_query($db, $get_items);



    echo "
    <div class='cart-table' style='min-height: 150px;'>
    <table>
        <thead style='font-size: larger;'>
            <tr>
                <th>Order ID</th>
                <th>Price</th>
                <th> Quantity</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>

    
    ";

    while ($row_items = mysqli_fetch_array($run_items)) {
        $o_id = $row_items['order_id'];
        $o_qty = $row_items['order_qty'];
        $o_price = $row_items['order_price'];
        $o_date = $row_items['date'];

        echo

            "<tr style='border-bottom: 0.5px solid #ebebeb'>
        <td class='first-row'>$o_id</td>
        <td class='first-row'>
            $o_price
        </td>
        <td class='first-row'>$o_qty</td>
        <td class='first-row'>
            $o_date
        </td>
    </tr>";
    }
}



?>



</tbody>

</table>

</div>