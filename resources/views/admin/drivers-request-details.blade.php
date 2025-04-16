<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.css')
    <title>driver requests</title>
</head>

<body>
    @include('admin.template.navbar')

    <div class="main">
        <div class="main-inner">
            <section>
                <div class="mycontainer">
                    <div>
                        <div class="banner bg-blue rounded-3"></div>
                        <div class="d-flex flex-column flex-sm-row align-items-sm-end align-items-center justify-content-sm-between user-det mx-3 mx-sm-4">
                            <div class="d-flex align-items-end">
                                <img src="{{asset('img/rider.png')}}" alt="rider" class="me-2 rounded-circle border-blue detail-user">
                                <p class=" text-capitalize fw-semibold">Driver Full Name</p>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <a href="#" class="bg-blue text-white rounded-3 text-decoration-none fw-medium d-block d-sm-inline-block px-3 py-2 me-2">Accept</a>
                                <a href="#" class="redbtn rounded-3 text-decoration-none fw-medium d-block d-sm-inline-block px-3 py-2">Decline</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mx-2 mx-sm-4 px-sm-2">
                        <div class="col-xl-4 col-lg-5 col-md-7 col-sm-8">
                            <div class="row align-items-center my-3">
                                <div class="col-sm-5">
                                    <h4 class="fs-6 fw-medium mb-0 text-blue">First Name</h4>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0 fs-6 fw-medium">DJ</p>
                                </div>
                            </div>
                            <div class="row align-items-center my-3">
                                <div class="col-sm-5">
                                    <h4 class="fs-6 fw-medium mb-0 text-blue">Last Name</h4>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0 fs-6 fw-medium">Robinson</p>
                                </div>
                            </div>
                            <div class="row align-items-center my-3">
                                <div class="col-sm-5">
                                    <h4 class="fs-6 fw-medium mb-0 text-blue">Phone Number:</h4>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0 fs-6 fw-medium">+21 91 999 999</p>
                                </div>
                            </div>
                            <div class="row align-items-center my-3">
                                <div class="col-sm-5">
                                    <h4 class="fs-6 fw-medium mb-0 text-blue">Email:</h4>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0 fs-6 fw-medium">client@gmail.com</p>
                                </div>
                            </div>
                            <div class="row align-items-center my-3">
                                <div class="col-sm-5">
                                    <h4 class="fs-6 fw-medium mb-0 text-blue">Address:</h4>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0 fs-6 fw-medium">riderexapleaddresshere</p>
                                </div>
                            </div>
                            <div class="row align-items-center my-3">
                                <div class="col-sm-5">
                                    <h4 class="fs-6 fw-medium mb-0 text-blue">Role:</h4>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0 fs-6 fw-medium">Driver</p>
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