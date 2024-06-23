<!DOCTYPE html>


<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>On The Way | TroVato HUB</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('../assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('../assets/vendor/fonts/boxicons.css')}}" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FRZFYEXM5Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FRZFYEXM5Z');
</script>
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('../assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('../assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('../assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('../assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('../assets/js/config.js')}}"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="{{route('welcome',['id'=>$id->id])}}" class="app-brand-link">
              <span class="app-brand-logo ">

                  <img src="{{asset('leaf.PNG')}}" width="50px" height="70px">

                </span>
                </a>
                <span class="app-brand-text menu-text ms-2"><img src="{{asset('logo.PNG')}}" width="130px" height="50px"></span>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item">
                    <a href="{{route('welcome',['id'=>$id->id])}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>

                <!-- Layouts -->
                <li class="menu-item  active">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-receipt"></i>
                        <div data-i18n="Layouts">Orders</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item  active">
                            <a href="{{route('pendingOrders',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Without menu">Pending Orders</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('deliveredOrders',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Without navbar">Delivered Orders</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('users',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Container">Users</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Category & Sub-Category</span>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-category"></i>
                        <div data-i18n="Account Settings">Category</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('category',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Account">Insert</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('category-update',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Notifications">Update</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-subdirectory-right"></i>
                        <div data-i18n="Authentications">Sub-Category</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('sub-category',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Basic">Insert</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('subcategoryUpdate',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Basic">Update</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Components -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">Products</span></li>
                <!-- Cards -->
                <li class="menu-item">
                    <a href="{{route('productsIndex',['id'=>$id->id])}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bxs-package"></i>
                        <div data-i18n="Basic">Add Products</div>
                    </a>
                </li>
                <!-- User interface -->
                <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bxl-dropbox"></i>
                        <div data-i18n="User interface">Products Details</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('mostSelling',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Accordion">Most Selling</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('lessSelling',['id'=>$id->id])}}" class="menu-link">
                                <div data-i18n="Alerts">Less Selling</div>
                            </a>
                        </li>
                    </ul>
                </li>



                <!-- Forms & Tables -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text"></span></li>
                <!-- Forms -->
                <li class="menu-item">

                    <a href="{{route('logout')}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-log-out"></i>
                        <div data-i18n="Form Elements">Logout</div>
                    </a>
                </li>
            </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav
                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar"
            >
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Orders/</span> On The Way</h4>

                    <!-- Basic Layout & Basic with Icons -->
                    <div class="row">

                        <!-- Basic with Icons -->
                        <div class="search-container mb-3">
                            <input type="text" id="order-search" class="form-control" placeholder="Search Order ID...">
                        </div>

                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5>Total On The Way Orders </h5>
                                <div>
                                    <button class="btn btn-primary ml-2" id="update-button">Update</button>
                                </div>
                            </div>
                            <div class="table-responsive text-nowrap">
                                <table id="order-table" class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Order No</th>
                                        <th>Products</th>
                                        <th>Quantity</th>
                                        <th>Transaction Id</th>
                                        <th>Payment</th>
                                        <th>Delivered Date</th>
                                        <th>Shipping Address</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                    @foreach($orders as $cart)
                                        <tr>
                                            <td><input type="checkbox" name="checkbox[]" value="{{$cart->id}}"></td>
                                            <td><strong>#{{$cart->order_no}}</strong></td>
                                            <td>{{$cart->product_name}}</td>
                                            <td>{{$cart->quantity}}</td>
                                            <td>{{$cart->transaction_id}}</td>
                                            <td>{{$cart->payment}}</td>
                                            <td>
                                                {{$cart->delivery_date}}
                                                <input type="hidden" name="date" class="form-control" value="{{$cart->delivery_date}}" />
                                            </td>
                                            <td>{{$cart->shipping_address}}</td>
                                            <td>{{$cart->status}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                const updateButton = document.getElementById("update-button");

                                if (updateButton) {
                                    updateButton.addEventListener("click", function () {
                                        const checkboxes = document.querySelectorAll('[name="checkbox[]"]:checked');

                                        // Ensure at least one checkbox is checked
                                        if (checkboxes.length === 0) {
                                            alert('Please select at least one order.');
                                            return;
                                        }

                                        const orderIds = Array.from(checkboxes).map(checkbox => checkbox.value);

                                        // Send AJAX request to update status
                                        const url = '{{ route("updateStatus") }}'; // Adjust the route name as per your Laravel routes
                                        const data = { checkbox: orderIds, status: 'On The Way', _token: '{{ csrf_token() }}' };

                                        fetch(url, {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json',
                                            },
                                            body: JSON.stringify(data),
                                        })
                                            .then(response => {
                                                if (!response.ok) {
                                                    throw new Error('Network response was not ok');
                                                }
                                                return response.json();
                                            })
                                            .then(data => {
                                                console.log('Orders status updated successfully:', data);
                                                // Optionally, you can show a success message or update the UI
                                                window.location.reload(); // Reload the page to reflect changes
                                            })
                                            .catch(error => {
                                                console.error('There was a problem updating orders status:', error);
                                                // Optionally, you can show an error message or handle the error in another way
                                            });
                                    });
                                } else {
                                    console.error('Update button not found');
                                }
                            });

                        </script>







                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const selectAllCheckbox = document.getElementById('select-all-checkbox');
                                const orderCheckboxes = document.querySelectorAll('.order-checkbox');
                                const updateButton = document.getElementById('update-button');

                                // Select all checkboxes


                                // Update selected orders
                                updateButton.addEventListener('click', function () {
                                    const selectedOrders = [];
                                    orderCheckboxes.forEach(checkbox => {
                                        if (checkbox.checked) {
                                            selectedOrders.push(checkbox.parentElement.parentElement);
                                            // Perform update operation for selected order here
                                        }
                                    });
                                    console.log('Selected Orders:', selectedOrders);
                                    // You can send the selected orders data for update via AJAX or perform any other action here
                                });
                            });
                        </script>

                        <script>
                            // JavaScript for filtering table rows based on transaction ID
                            document.getElementById('order-search').addEventListener('input', function() {
                                const searchValue = this.value.toLowerCase();
                                const rows = document.querySelectorAll('#order-table tbody tr');

                                rows.forEach(row => {
                                    const transactionId = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                                    if (transactionId.includes(searchValue)) {
                                        row.style.display = '';
                                    } else {
                                        row.style.display = 'none';
                                    }
                                });
                            });
                        </script>



                    </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All Copyright Reserved by Ashar Alo Shop || Developed ❤️ by
                            <a href="https://www.trodev.com" target="_blank" class="footer-link fw-bolder">Trodev</a>
                        </div>

                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->



<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('../assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('../assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('../assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{asset('../assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="{{asset('../assets/js/main.js')}}"></script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
