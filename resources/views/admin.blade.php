@extends('layouts.app')

@section('content')
    <style>
        .table-wrapper-scroll-y {
            max-height: 300px;
            overflow-y: auto;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }
    </style>

    <div class="container w75" id="customerInfo">
        <h1 class="text-center">Welcome Dennis below are your orders</h1>
        <br><br>
        <h3 class="text-center">Recent Orders</h3>
        <div class="table-wrapper-scroll-y">
        <table class="table table-striped">
            <caption>Order Information</caption>
            <thead class="text-left thead-dark">
            <tr>
                <th scope="col">Order Number</th>
                <th scope="col">Ordered By</th>
                <th scope="col">Quantity Requested</th>
                <th scope="col">Customer Email</th>
                <th scope="col">Requested Date</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Image</th>
            </tr>
            </thead>
            <tbody class="tbody-light">
            <?php
            $con = mysqli_connect("localhost","root","","lmandd");
            // Check connection
            if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            // Perform queries
            $query = mysqli_query($con,"SELECT * FROM orders ORDER BY order_id DESC");
            //display query
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$row['order_id']."</td>";
                echo "<td>".$row['orderedBy']."</td>";
                echo "<td>".$row['quantity']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['request_date']."</td>";
                echo "<td>".$row['phoneNumber']."</td>";
                echo "<td>".$row['image']."</td>";
                echo "</tr>";
            }
           ?>
            </tbody>
        </table>
        </div>
        <br>
        <h3 class="text-center">User Information</h3>
        <div class="table-wrapper-scroll-y">
            <table class="table table-striped">
                <caption>Customer Information</caption>
                <thead class="text-left thead-dark">
                <tr>
                    <th scope="col">Customer Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                </tr>
            </thead>
            <tbody class="tbody-light">
            <?php
            // Perform queries
            $query = mysqli_query($con,"SELECT * FROM users");
            //display query
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['first_name']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "</tr>";
            }
            $con -> close();
            ?>
            </tbody>
            </table>
        </div>
    </div>
    <br><br>
    <br><br><br><br><br><br>
@endsection