@extends('layouts.app')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2 class="text-center">Welcome {{ Auth::user()->fullName }}</h2>
                <div class="card-header text-center">Your recent orders</div>
            </div>
        </div>
    </div>
    <div class="table-wrapper-scroll-y">
        <table class="table table-striped">
            <caption>Order Information</caption>
            <thead class="text-left thead-dark">
            <tr>
                <th scope="col">Order Request Date</th>
                <th scope="col">Quantity Requested</th>
                <th scope="col">Image Filename</th>
            </tr>
            </thead>
            <tbody class="tbody-light">
            <!--
            $con = mysqli_connect("aawsbr698q31np.cpj44hymdmip.us-east-2.rds.amazonaws.com","adminlmandd","mapwhiteboardkane ","aawsbr698q31np");
            // Check connection
            if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $username = Auth::User()->username;

            // Perform queries
            $query = mysqli_query($con,"SELECT * FROM orders WHERE orderedBy = '$username'");
            if($query == null) {
                echo "<h4 class='text-center'> No Orders Found</h4>";
            } else {
            //display query
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>".$row['request_date']."</td>";
                echo "<td>".$row['quantity']."</td>";
                echo "<td>".$row['image']."</td>";
                echo "</tr>";
            }
            }
           -->
            </tbody>
        </table>
    </div>
</div>
<br><br>
<br><br><br><br><br><br>
@endsection
