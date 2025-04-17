<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin/template.css')
    <title>Login</title>
</head>

<body>
    {{-- <script>
        swal("Ooops!", "hhhhh", "error");
    </script> --}}
    @if (session('error'))
<script>
    swal("Ooops!", "{{ session('error') }}", "error");
</script>
@endif
@if (session('success'))
<script>
    swal("Good job!", "{{ session('success') }}", "success");
</script>
@endif
    <div class="dvh-100 py-3 bg-white">
        <div class="container-fluid h-100 px-sm-5">
            <div class="row h-100 align-items-center">
                <div class="col-md-6 col-sm-8 col-11 h-100 py-3 mx-auto shadow-tab">
                    <div class="row h-100">
                        <div class="col-xl-7 position-relative col-lg-9 col-11 mx-auto h-100">
                            <div class="d-flex flex-column justify-content-center h-100">
                                <div>
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="mt-3">
                                            <h2 class="fw-semi-bold text-blue">Welcome Back  👋</h2>
                                            <p class="small mb-0 mt-3">
                                                Today is a new day. It's your day. You shape it. 
                                                Sign in to start managing your projects.
                                            </p>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-10">
                                                <div class="my-3">
                                                    <label for="e-mail" class="form-label mb-0" >
                                                        Email
                                                    </label>
                                                    <input type="email" class="my-input focus-none w-100 rounded-3" name="email"
                                                        id="e-mail" placeholder="Example@email.com">
                                                </div>
                                                <div class="mb-2">
                                                    <label for="pass-word" class="form-label fw-md mb-0">
                                                        Password
                                                    </label>
                                                    <input type="password" class="my-input focus-none w-100 rounded-3"  name="password"
                                                        id="pass-word" placeholder="at least 8 characters">
                                                </div>
                                                <div class="text-end">
                                                    <a href="#" class="text-decoration-none small link-color">
                                                        Forgot Password
                                                    </a>
                                                </div>
                                                <div class="mt-2">
                                                    <button type="submit"
                                                        class="rounded-3 border-0 py-2 px-2 small bg-blue text-white w-100 fw-medium">
                                                        Sign in
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row position-absolute right-reserved">
                                    <div class="col-lg-10">
                                        <p class="mb-0 small text-center text-grey">
                                            © 2024 ALL RIGHTS RESERVED
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 sky-bg d-lg-block d-none h-100 rounded-4 ">
                    <img src="{{asset('img/login.png')}}" alt="" class="w-100 h-100">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>