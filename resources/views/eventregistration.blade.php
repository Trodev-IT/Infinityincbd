<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
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

    <title>Event Registration | Infinity Incorporation Bangladesh</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/favicon.ico')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/android-chrome-192x192.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/android-chrome-512x512.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/favicon-16x16.png')}}" />
    <link rel="icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon/favicon-32x32.png')}}" />
    <link rel="manifest" href="{{asset('admin/assets/img/favicon/site.webmanifest')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('admin/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('admin/assets/js/config.js')}}"></script>

    <style>
        .available {
            color: green; /* Change the color to your desired color for available message */
        }

        .unavailable {
            color: red; /* Change the color to your desired color for unavailable message */
        }

    </style>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="mb-xl-4">Payment Instructions</h5>
                                    <p>Choose your preferred payment method below and follow the instructions accordingly:</p>
                                    <ul>
                                        <li><strong>bKash:</strong> Make payment to [bKash Number]. Enter the event id in ther reference. After payment enter the transaction number into the <strong>Transaction Id</strong></li>
                                        <li><strong>Nagad:</strong> Make payment to [Nagad Number]. Enter the event id in ther reference. After payment enter the transaction number into the <strong>Transaction Id</strong></li>
                                        <li><strong>Rocket:</strong> Make payment to [Rocket Number]. Enter the event id in ther reference. After payment enter the transaction number into the <strong>Transaction Id</strong></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl">
                            <div class="card mb-4">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Basic Layout</h5>
                                    <small class="text-muted float-end">Default label</small>

                                </div>



                                <div class="card-body">
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <form action="{{route('registerEvent',['id'=>$event->id])}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$event->id}}">
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Event Id</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="event_id" id="basic-default-name" value="{{$event->event_id}}" readonly />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Event Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="event_name" id="basic-default-name" value="{{$event->event_name}}" readonly />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">Player Name</label>
                                            <div class="col-sm-10">
                                                <input
                                                    type="text"
                                                    name="name"
                                                    class="form-control"
                                                    id="basic-default-company"

                                                />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-email">Player Email</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <input
                                                        type="email"
                                                        name="email"
                                                        id="basic-default-email"
                                                        class="form-control"
                                                        aria-describedby="basic-default-email2"
                                                        onkeyup="checkEmailAvailability(this.value)"
                                                    />
                                                </div>
                                                <div class="form-text" id="emailAvailabilityMsg"></div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                                            <div class="col-sm-10">
                                                <input
                                                    type="text"
                                                    name="phone"
                                                    id="basic-default-phone"
                                                    class="form-control phone-mask"
                                                    placeholder="658 799 8941"
                                                    aria-label="658 799 8941"
                                                    aria-describedby="basic-default-phone"
                                                />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Registration Price</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="basic-default-name" name="price" value="{{$event->price}}" readonly/>
                                            </div>
                                        </div>
                                        @if($event->price > 0)
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Pay With</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" id="basic-default-name" name="payment">
                                                        <option value="" selected disabled>Select Payment Method</option>
                                                        <option value="bKash">bKash</option>
                                                        <option value="Nagad">Nagad</option>
                                                        <option value="Rocket">Rocket</option>

                                                    </select>
                                                    <div class="form-text">You can use letters, numbers & periods</div>
                                                </div>

                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="basic-default-name">Transaction Id</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="transaction" id="basic-default-name" placeholder="John Doe" />
                                                </div>
                                            </div>
                                        @endif
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
<script src="{{asset('admin/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('admin/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

<script src="{{asset('admin/assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="{{asset('admin/assets/js/main.js')}}"></script>



<script>
    let typingTimer;
    const doneTypingInterval = 500; // in milliseconds

    function checkEmailAvailability(email) {
        clearTimeout(typingTimer);
        if (email) {
            typingTimer = setTimeout(function() {
                $.ajax({
                    url: '{{ route("check-email-availability") }}',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    data: {
                        email: email,
                        event_id: {{$event->event_id}} // Replace with your actual event ID
                    },
                    success: function(response) {
                        if (response.available) {
                            $('#emailAvailabilityMsg').html('<span class="available">You can register this event.</span>');
                        } else {
                            $('#emailAvailabilityMsg').html('<span class="unavailable">This email is already registered for this event. Please try a different email.</span>');
                        }
                    }
                });
            }, doneTypingInterval);
        }
    }

</script>

<!-- Page JS -->

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>

