<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.css')
    <title>rental log details</title>
</head>

<body>
    @include('admin.template.navbar')

    <div class="main">
        <div class="main-inner">
            <section>
                <div class="mycontainer">
                    <div class="d-flex flex-wrap flex-sm-nowrap mt-3 d-flex justify-content-between align-items-center mytabs">
                        <div class="col-lg-6 col-md-5">
                            <div class="d-flex align-items-center">
                                <h1 class="fs-4 fw-semibold mb-0">
                                    Rental Log Details
                                </h1>
                            </div>
                            <p class="mt-2">A rental log is a record that tracks the details of rental transactions, typically for a rental or equipment.</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="rounded-2 info-bg">
                            <div class="py-3 px-4 px-md-5 row justify-content-center">
                                <div class="col-md-7"> 
                                    <div class="my-4">
                                        <h2 class="fs-4 text-darkgreen fw-bold mb-0 text-center text-sm-start">Seller Details</h2>
                                        <div class="mt-3">
                                            <div class="d-flex flex-column flex-sm-row align-items-center my-3">
                                                <h4 class="fs-6 fw-semibold mb-0 text-blue me-sm-3">Name:</h4>
                                                <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                    <img src="{{asset('img/name.png')}}" alt="name" class="me-1 vertical-bottom">
                                                    <p class="mb-0 fs-6 fw-medium">Naseeb Zulfiqar</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-sm-row align-items-center my-3">
                                                <h4 class="fs-6 fw-semibold  mb-0 text-blue me-sm-3">Email:</h4>
                                                <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                    <img src="{{asset('img/email.png')}}" alt="email"
                                                        class="me-1 vertical-bottom">
                                                    <p class="mb-0 fs-6 fw-medium">client@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <h2 class="fs-4 text-darkgreen fw-bold mb-0 text-center text-sm-start">Rental Details</h2>
                                        <div class="mt-3">
                                            <div class="d-flex flex-column flex-sm-row align-items-center my-3">
                                                <h4 class="fs-6 fw-semibold mb-0 text-blue me-sm-3">Name:</h4>
                                                <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                    <img src="{{asset('img/name.png')}}" alt="name" class="me-1 vertical-bottom">
                                                    <p class="mb-0 fs-6 fw-medium">Naseeb Zulfiqar</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-sm-row align-items-center my-3">
                                                <h4 class="fs-6 fw-semibold  mb-0 text-blue me-sm-3">Email:</h4>
                                                <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                    <img src="{{asset('img/email.png')}}" alt="email"
                                                        class="me-1 vertical-bottom">
                                                    <p class="mb-0 fs-6 fw-medium">client@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="my-md-4">
                                        <h2 class="fs-4 text-darkgreen fw-bold mb-0 text-center text-sm-start">Payment Details</h2>
                                        <div class="mt-3">
                                            <div class="d-flex flex-column flex-sm-row align-items-center my-3">
                                                <h4 class="fs-6 fw-semibold mb-0 text-blue me-sm-3">Rental Amount:</h4>
                                                <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                    <img src="{{asset('img/rent.png')}}" alt="name" class="me-1 vertical-bottom">
                                                    <p class="mb-0 fs-6 fw-medium">234,54.00</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-sm-row align-items-center my-3">
                                                <h4 class="fs-6 fw-semibold  mb-0 text-blue me-sm-3">Deposit Fee:</h4>
                                                <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                    <img src="{{asset('img/rent.png')}}" alt="email"
                                                        class="me-1 vertical-bottom">
                                                    <p class="mb-0 fs-6 fw-medium">234,54.00</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-sm-row align-items-center my-3">
                                                <h4 class="fs-6 fw-semibold  mb-0 text-blue me-sm-3">Late Fee:</h4>
                                                <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                    <img src="{{asset('img/rent.png')}}" alt="email"
                                                        class="me-1 vertical-bottom">
                                                    <p class="mb-0 fs-6 fw-medium">234,54.00</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-sm-row align-items-center my-3">
                                                <h4 class="fs-6 fw-semibold  mb-0 text-blue me-sm-3">Date of Rental:</h4>
                                                <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                    <img src="{{asset('img/date.png')}}" alt="email"
                                                        class="me-1 vertical-bottom">
                                                    <p class="mb-0 fs-6 fw-medium">234,54.00</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-sm-row align-items-center my-3">
                                                <h4 class="fs-6 fw-semibold  mb-0 text-blue me-sm-3">Status:</h4>
                                                <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                    <img src="{{asset('img/status.png')}}" alt="email"
                                                        class="me-1 vertical-bottom">
                                                    <p class="mb-0 fs-6 text-darkgreen fw-medium">Booking</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>