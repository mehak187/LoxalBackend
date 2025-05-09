<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.css')
    <title>Users Management</title>
</head>

<body>
    @include('admin.template.navbar')

    <div class="main">
        <div class="main-inner">
            <section>
                <div class="mycontainer">
                    <div class="row mt-3 d-flex justify-content-between align-items-between mytabs">
                        <div class="col-lg-6">
                            <h1 class="fs-2 fw-bold mb-0">
                                Users Management
                            </h1>
                            <p class="mb-0">Manage user accounts and permissions with detailed views and actions, including
                                the ability to edit, suspend, and close user profiles.</p>
                        </div>
                        <div
                            class="col-lg-6 col-xl-5 col-xxl-4 mt-3 mt-lg-0 d-flex flex-column justify-content-between">
                            <div class="d-flex flex-column  flex-sm-row">
                                <div
                                    class="d-flex py-1 w-100 border-grey px-2 rounded-3 bg-grey search-filter">
                                    <label for="search" class="px-2 text-white py-2 bg-dark rounded-3">
                                        <i class="fa-solid px-1 fa-magnifying-glass fs-6"></i>
                                    </label>
                                    <input type="search" id="search"
                                        class="px-2 w-100 py-2 border-0 bg-transparent focus-none focus-none"
                                        placeholder="Search...">
                                </div>
                            </div>
                            <div class="d-flex mt-2 align-items-center justify-content-end">
                                <p class="mb-0 me-3">Total Users:</p>
                                <p class="mb-0 text-blue fw-medium">353</p>
                            </div>
                        </div>
                       
                    </div>
                    @if (count($users) > 0)
                        <div class="table-responsive default-table table-header-shadow mt-3">
                            <table class="table">
                                <thead class="">
                                    <tr class="align-middle">
                                        <th class="small text-capitalize fw-medium text-nowrap">
                                            User Image
                                        </th>
                                        <th class="small text-capitalize fw-medium text-nowrap">
                                            First Name
                                        </th>
                                        <th class="small text-capitalize fw-medium text-nowrap">
                                            Last name
                                        </th>
                                    
                                        <th class="small text-capitalize fw-medium text-nowrap">Phone number</th>
                                        <th class="small text-capitalize fw-medium text-nowrap">Email</th>
                                        <th class="small text-capitalize fw-medium text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr class="align-middle">
                                        <td class="small text-black">
                                            <img src="{{ $user['image'] ?? asset('img/dummy.jpeg') }}" 
                                            alt="user-img" class="user-img rounded-circle shadow" style="width:45px; height:45px; object-fit:cover">
                                        </td>
                                        <td class="small text-black">{{ $user['firstName'] }}</td>
                                        <td class="small text-black text-nowrap">{{ $user['lastName'] }}</td>
                                        <td class="small text-black">{{ $user['mobileNumber'] }}</td>
                                        <td class="small text-black">{{ $user['email'] }}</td>
                                        <td class="small text-black">
                                            <div class="dropdown custom-toggle">
                                                <button type="button" class="btn border-0 bg-ngrey text-blue dropdown-toggle"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu py-0 rounded-3">
                                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                                            href="{{ route('admin.userDetails') }}"><img src="{{asset('img/details.png')}}" alt="details"
                                                                class="icon me-2"><span>View Details</span></a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                                            href="#"><img src="{{asset('img/edit.png')}}" alt="edit"
                                                                class="icon me-2"><span>Edit</span></a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                                            href="#"><img src="{{asset('img/suspend.png')}}" alt="suspend"
                                                                class="icon me-2"><span>Suspend Account</span></a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                                            href="#"><img src="{{asset('img/dec;ine.png')}}" alt="close"
                                                                class="icon me-2"><span>Close Account</span></a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                                            href="#"><img src="{{asset('img/delete.png')}}" alt="delete"
                                                                class="icon me-2"><span>Delete</span></a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="alert alert-danger mt-3 mb-0" role="alert">
                            Users not found
                        </div>
                    @endif
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