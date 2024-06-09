<!DOCTYPE html>

<!-- =========================================================
* Ashar Alo Shop - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/Ashar Alo Shop-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
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

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FRZFYEXM5Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FRZFYEXM5Z');
</script>
    <title>Edit Products | Ashar Alo Shop</title>
    <script src="https://kit.fontawesome.com/a87236255f.js" crossorigin="anonymous"></script>
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

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('../assets/vendor/fonts/boxicons.css')}}" />

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
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-receipt"></i>
                        <div data-i18n="Layouts">Orders</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
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
                <li class="menu-item  active">
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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Products/</span> Edit Products</h4>

                    <!-- Basic Layout & Basic with Icons -->
                    <div class="row">

                        <!-- Basic with Icons -->
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Edit Products</h5>

                                </div>
                                <div class="card-body">
                                    <form action="{{route('prodUp')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Name</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="fa-solid fa-box"></i></span>
                                                    <input
                                                        type="text"
                                                        name="product_name"
                                                        class="form-control"
                                                        id="basic-icon-default-fullname"
                                                        value="{{$product->product_name}}"
                                                        aria-label="John Doe"
                                                        aria-describedby="basic-icon-default-fullname2"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Product Description</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="fa-solid fa-circle-info"></i></span>
                                                    <textarea
                                                        id="basic-icon-default-company"
                                                        name="description"
                                                        class="form-control"
                                                        aria-label="ACME Inc."
                                                        aria-describedby="basic-icon-default-company2"
                                                    >{!! $product->description !!}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Category</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="category" id="categorySelect">
                                                    <option value="{{$product->category}}">{{$product->category}}</option>
                                                    @foreach($all as $category)
                                                        <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Sub-Category</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="sub-category" id="subCategorySelect">
                                                    <option value="{{$product->sub_category}}">{{$product->sub_category}}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <script>
                                            document.getElementById('categorySelect').addEventListener('change', function() {
                                                var category = this.value;
                                                var subCategories = @json($sub);

                                                var subCategorySelect = document.getElementById('subCategorySelect');
                                                subCategorySelect.innerHTML = ''; // Clear existing options

                                                // Filter sub-categories based on the selected category
                                                var filteredSubCategories = subCategories.filter(function(sub) {
                                                    return sub.category === category;
                                                });

                                                // Add options for filtered sub-categories
                                                filteredSubCategories.forEach(function(sub) {
                                                    var option = document.createElement('option');
                                                    option.value = sub.sub_category;
                                                    option.textContent = sub.sub_category;
                                                    subCategorySelect.appendChild(option);
                                                });
                                            });
                                        </script>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-icon-default-price">Price</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i class="fa-solid fa-money-bill"></i></span>
                                                    <input
                                                        type="number"
                                                        id="basic-icon-default-price"
                                                        class="form-control"
                                                        name="price"
                                                        value="{{$product->price}}"
                                                        aria-label="Price"
                                                        aria-describedby="basic-icon-default-price"
                                                        oninput="calculateDiscount()"
                                                    />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-icon-default-discount">Discount</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i class="fa-solid fa-money-bill"></i></span>
                                                    <input
                                                        type="number"
                                                        id="basic-icon-default-discount"
                                                        class="form-control"
                                                        name="discount"
                                                       
                                                        aria-label="Discount"
                                                        aria-describedby="basic-icon-default-discount"
                                                        oninput="calculateDiscount()"
                                                    />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-icon-default-discountPrice">Discounted Price</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text"><i class="fa-solid fa-money-bill"></i></span>
                                                    <input
                                                        type="number"
                                                        id="basic-icon-default-discountPrice"
                                                        class="form-control"
                                                        name="discountPrice"
                                                        aria-label="Discounted Price"
                                                        aria-describedby="basic-icon-default-discountPrice"
                                                    
                                                        readonly
                                                    />
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            function calculateDiscount() {
                                                var price = parseFloat(document.getElementById('basic-icon-default-price').value);
                                                var discount = parseFloat(document.getElementById('basic-icon-default-discount').value);

                                                var discountedPrice;
                                                if (isNaN(discount) || discount === 0) {
                                                    // If discount is NaN or 0, set discounted price to null
                                                    discountedPrice = null;
                                                } else {
                                                    discountedPrice = price - (price * discount / 100); // Calculate discounted price
                                                }

                                                if (!isNaN(discountedPrice)) {
                                                    document.getElementById('basic-icon-default-discountPrice').value = discountedPrice.toFixed(2); // Set value of discounted price
                                                } else {
                                                    document.getElementById('basic-icon-default-discountPrice').value = ''; // Clear discounted price
                                                }
                                            }
                                        </script>


                                        <div class="row mb-3">
                                            <label class="col-sm-2 form-label" for="basic-icon-default-phone">Stock</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class="fa-solid fa-warehouse"></i></span>
                                                    <input
                                                        type="number"
                                                        id="basic-icon-default-phone"
                                                        class="form-control phone-mask"
                                                        value="{{$product->stock}}"
                                                        name="stock"
                                                        aria-label="658 799 8941"
                                                        aria-describedby="basic-icon-default-phone2"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 form-label" for="basic-icon-default-message">Image</label>
                                            <div class="col-sm-10">
                                                <img src="{{asset('storage/'.$product->image)}}" width="50%" height="50%">
                                                <div class="input-group input-group-merge">

                                                      <span id="basic-icon-default-message2" class="input-group-text"
                                                      ><i class="fa-solid fa-upload"></i></span>

                                                    <input
                                                        type="file"
                                                        id="basic-icon-default-message"
                                                        class="form-control"
                                                        name="image"
                                                        placeholder="Hi, Do you have a moment to talk Joe?"
                                                        aria-label="Hi, Do you have a moment to talk Joe?"
                                                        aria-describedby="basic-icon-default-message2"
                                                    >
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
<script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#basic-icon-default-company' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>


