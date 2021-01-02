<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>


<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="/seller">Profile</a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Products</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="/seller/addProduct">Add Product</a>
                            </li>
                            <li>
                                <a href="/seller/deleteProduct">Delete Product</a>
                            </li>
                            <li>
                                <a href="/seller/editProduct">Edit Deatils</a>
                            </li>
                            <li>
                                <a href="/seller/addCoupon">Add Coupon</a>
                            </li>
                            <li>
                                <a href="/seller/addCatagory">Add Catagory</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#noSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Publish Product</a>
                        <ul class="collapse list-unstyled" id="noSubmenu">
                            <li>
                                <a href="/seller/publishedProduct">Published Product</a>
                            </li>
                            <li>
                                <a href="/seller/unpublishedProduct">Unpublished Product</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Sells</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="/seller/reviewProduct">Review</a>
                            </li>
                            <li>
                                <a href="/seller/totalIncome">Sells Analysis</a>
                            </li>
                            <li>
                                <a href="/seller/reportCustomer">Report Customer</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#nooSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Orders</a>
                        <ul class="collapse list-unstyled" id="nooSubmenu">
                            <li>
                                <a href="/seller/pendingOrders">Pending Orders</a>
                            </li>
                            <li>
                                <a href="/seller/deliverdOrders">Deliverd Orders</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="#">Payment</a>
                    </li>
                    <li>
                        <a href="/logout">LogOut</a>
                    </li>
                </ul>

                <div class="footer">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <div align="center">
                <form method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <span align="center">
                        <h3>Add Product</h3>
                    </span>
                    <table width="50%" align="center" style="border-collapse: separate;border-spacing: 0 8px">
                        <tr>
                            <td width="45%">Product Name</td>
                            <td width="10%">:</td>
                            <td width="45%">
                                <input type="text" name="name">
                            </td>
                        </tr>
                        <tr>
                            <td width="45%">Quntity</td>
                            <td width="10%">:</td>
                            <td width="45%">
                                <input type="number" name="quantity">
                            </td>
                        </tr>
                        <tr>
                            <td width="45%">Product price</td>
                            <td width="10%">:</td>
                            <td width="45%">
                                <input type="number" name="price">
                            </td>
                        </tr>
                        <tr>
                            <td width="45%">Catagory</td>
                            <td width="10%">:</td>
                            <td width="45%">
                                <select name="catagory" id="catagory">
                                    @foreach ($catagoryID as $items)
                                    <option value="{{ $items->catagory_name}}">
                                        {{ $items->catagory_name}}
                                    </option>
                                    @endforeach
                                </select>

                            </td>
                        </tr>



                        <tr>
                            <td>Description</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="description" placeholder="Description">
                            </td>
                        </tr>

                        <tr>
                            <td>Exclusive</td>
                            <td>:</td>
                            <td>
                                <select name="exclusive" id="exclusive">
                                    <option value="ttttt">Yes</option>
                                    <option value="ffff">No</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>:</td>
                            <td>
                                <input type="file" name="myImg" accept="image/*" />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="add" value="Add" />
                            </td>
                        </tr>
                    </table>
                </form>
                @if(Session::has('status'))
                <div class="alert alert-success" role="alert" style="width:20%">
                    {{ Session::get('status') }}
                </div>
                @endif
            </div>
        </div>

        <script src="/js/jquery.min.js "></script>
        <script src="/js/popper.js "></script>
        <script src="/js/bootstrap.min.js "></script>
        <script src="/js/main.js "></script>
</body>

</html>