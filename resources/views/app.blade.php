<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pecuniary Services</title>
    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
     <link rel="icon" href="./images/logo.jpg">
     <style type="text/css">
     th {
    background-color: #599bb3;
    color: white;
}
         tr:hover{background-color:#f5f5f5}
#anchor {         /* unvisited link */
a:link {
    color: #A4CFDE;
}

/* visited link */
a:visited {
    color: #A18EBF;
}

/* mouse over link */
a:hover {
    color: #ADBF9F;
}

/* selected link */
a:active {
    color: #B19FBF;
} 
    }
.btn.btn-success{background-color:#599bb3;border:#599bb3;} 
.btn.btn-primary{background-color:#599bb3;border:#599bb3;} 
.btn.btn-warning{background-color:#599bb3;border:#599bb3;}  
.btn.btn-danger{background-color:#599bb3;border:#599bb3;} 

</style>

</head>
<body>
<div class="container" align="center" id="anchor">
    <a href="{{ url('/home') }}">Home</a> |
    <a href="{{ action('CustomerController@index') }}">Customers</a> |
    <a href="{{ action('StockController@index') }}">Stocks</a> |
    <a href="{{ action('InvestmentController@index') }}">Investments</a> |
    <a href="{{ action('AssetController@index') }}">Commodities</a> |
    <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
</div>
<hr>
<div class="container">
    @yield('content')
</div>
</body>
</html>
