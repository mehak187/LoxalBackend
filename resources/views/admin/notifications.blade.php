<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.css')
    <title>Notifications</title>
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
                                <a href="#" class="px-2 rounded-2 text-black me-2 fw-bold fs-5 py-2 back-bg">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </a>
                                <h1 class="fs-2 fw-semibold mb-0">
                                    Notifications
                                </h1>
                            </div>
                            <p class="mt-2">A rental log is a record that tracks the details of rental transactions, typically for a
                                rental or equipment.</p>
                        </div>
                        <div class="mt-0 mt-sm-3 mt-md-0 mb-3 mb-sm-0 d-flex flex-column justify-content-between">
                            <a href="#" class="text-capitalize text-delete">Clear notifications</a>
                        </div>
                    </div>
                    <div class="notf rounded-3 p-3">
                        <div class="px-2 py-2 notf-inner">
                            <div class="notification rounded-3 px-3 py-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('img/user.png')}}g" alt="user" class="not-img me-2 rounded-circle">
                                        <div>
                                            <p class="fw-md mb-0 text-dark">name here</p>
                                            <p class="mb-0">08:16pm • 06/20/2024</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="text-decoration-none me-2">
                                            <i class="fa-solid fa-eye text-blue fs-5"></i>
                                        </a>
                                        <a href="#" class="text-decoration-none">
                                            <i class="fa-solid fa-trash text-danger fs-5"></i>
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="fw-medium fs-6 mt-2 status-green">Email Notification</h6>
                                    <p class="mb-0 small">https:// exapmle link here notifications that went to a user as in-app notifications all notifications that went to a user. https:// exapmle link here notifications that went to a user as in-app notifications all notifications that went to a user.https:// exapmle link here notifications that went to a user as in-app notifications all notifications that went to a user. https:// exapmle link here notifications that went to a user as in-app notifications all notifications that went to a user.</p>
                                </div>
                            </div>
                         {{-- -----other list------- --}}
                         
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