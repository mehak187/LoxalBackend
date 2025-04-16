<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.css')
    <title>rider details</title>
</head>

<body>
    @include('admin.template.navbar')

    <div class="main">
        <div class="main-inner">
            <section>
                <div class="mycontainer">
                    <div>
                        <div class="banner py-3 px-3 bg-blue rounded-3">
                            <div class="d-flex flex-wrap justify-content-center justify-content-md-end flex-md-nowrap align-items-center">
                                <a href="#"
                                    class="bg-white text-black rounded-3 text-decoration-none fw-medium d-flex align-items-center my-2 my-lg-0 px-3 py-2 mx-1">
                                    <i class="fa-solid fa-pencil me-2"></i>
                                    <span class="small">Edit</span>
                                </a>
                                <a href="#"
                                    class="bg-white text-black rounded-3 text-decoration-none fw-medium d-flex align-items-center my-2 my-lg-0 px-3 py-2 mx-1">
                                    <img src="{{asset('img/delete.png')}}" class="det-small-icon me-1" alt="suspend">
                                    <span class="small">Delete</span>
                                </a>
                                <a href="#"
                                    class="bg-white text-black rounded-3 text-decoration-none fw-medium d-flex align-items-center my-2 my-lg-0 px-3 py-2 mx-1">
                                    <img src="{{asset('img/suspend.png')}}" class="det-small-icon me-1" alt="suspend">
                                    <span class="small">Suspend Account</span>
                                </a>
                                <a href="#"
                                    class="bg-white text-black rounded-3 text-decoration-none fw-medium d-flex align-items-center my-2 my-lg-0 px-3 py-2">
                                    <img src="{{asset('img/decline.png')}}" class="det-small-icon me-1" alt="close">
                                    <span class="small">Close Account</span>
                                </a>
                            </div>
                            <div class="d-flex mb-md-4 justify-content-center justify-content-md-start mt-2 mt-md-0 align-items-center">
                                <img src="{{asset('img/rider.png')}}" alt="rider" class="me-2 rounded-circle border-0 detail-user">
                                <p class=" text-capitalize mb-0 text-white fw-semibold">Full Name</p>
                            </div>
                        </div>
                     
                    </div>
                    <div class="mt-4">
                        <!-- <h2 class="fs-5 fw-semibold">Personal information</h2> -->
                        <div class="rounded-2 info-bg">
                            <h2 class="fs-5 text-darkgreen px-3 pt-4 fw-bold mb-0">Personal information</h2>
                            <div class="py-3 px-3 d-flex flex-column flex-sm-row justify-content-center justify-content-lg-start flex-wrap align-items-center justify-content-start">
                                <div class="d-flex flex-column flex-sm-row align-items-center me-sm-5 my-2 my-sm-1">
                                    <h4 class="fs-6 fw-semibold mb-0 text-blue me-sm-3">First Name:</h4>
                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                        <img src="{{asset('img/name.png')}}" alt="name" class="me-1 vertical-bottom">
                                        <p class="mb-0 fs-6 fw-medium">First Name</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-sm-row align-items-center me-sm-5 my-2 my-sm-1">
                                    <h4 class="fs-6 fw-semibold  mb-0 text-blue me-sm-3">Last Name:</h4>
                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                        <img src="{{asset('img/name.png')}}" alt="name" class="me-1 vertical-bottom">
                                        <p class="mb-0 fs-6 fw-medium">Last Name</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-sm-row align-items-center me-sm-5 my-2 my-sm-1">
                                    <h4 class="fs-6 fw-semibold  mb-0 text-blue me-sm-3">Phone Number:</h4>
                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                        <img src="{{asset('img/phone.png')}}" alt="phone" class="me-1 vertical-bottom">
                                        <p class="mb-0 fs-6 fw-medium">+21 91 999 999</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-sm-row align-items-center me-sm-5 my-2 my-sm-1">
                                    <h4 class="fs-6 fw-semibold  mb-0 text-blue me-sm-3">Email:</h4>
                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                        <img src="{{asset('img/email.png')}}" alt="email" class="me-1 vertical-bottom">
                                        <p class="mb-0 fs-6 fw-medium">client@gmail.com</p>
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