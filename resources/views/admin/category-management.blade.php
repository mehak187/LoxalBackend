<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.css')
    <title>category management</title>
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
                                Category Management
                            </h1>
                            <p class="mb-0">A rental log is a record that tracks the details of rental transactions, typically for a rental or equipment.</p>
                        </div>
                        <div class="col-lg-6 col-xl-5 col-xxl-4 mt-3 mt-lg-0 d-flex flex-column justify-content-between">
                            <div class="d-flex flex-column flex-sm-row">
                                <div class="d-flex py-1 w-100 border-grey px-2 rounded-3 bg-grey search-filter me-2">
                                    <label for="search" class="px-2 text-white py-2 bg-dark rounded-3">
                                        <i class="fa-solid px-1 fa-magnifying-glass fs-6"></i>
                                    </label>
                                    <input type="search" id="search" class="px-2 w-100 py-2 border-0 bg-transparent focus-none focus-none"
                                        placeholder="Search...">
                                </div>
                                <a href="#" class="text-decoration-none mt-3 mt-sm-0 d-flex align-items-center bg-black text-nowrap text-white py-2 px-3 rounded-3">Add new
                                    category</a>
                            </div>
                        </div>
                       
                    </div>
                    <div class="table-responsive default-table table-header-shadow mt-3">
                        <table class="table">
                            <thead class="">
                                <tr class="align-middle">
                                    <th class="small text-capitalize fw-medium text-nowrap">
                                        Image
                                    </th>
                                    <th class="small text-capitalize fw-medium text-nowrap">
                                        Category Name
                                    </th>
                                    <th class="small text-capitalize fw-medium text-nowrap">
                                       Status
                                    </th>
                                    <th class="small text-capitalize fw-medium text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($catgs as $catg)
                                <tr class="align-middle">
                                    <td class="small text-black">
                                        @if (!empty($catg['image']))
                                            <img src="{{ $catg['image'] }}" 
                                            alt="user-img" class="user-img rounded-circle shadow" style="width:45px; height:45px; object-fit:cover">
                                        @else
                                            <span>N/A</span>
                                        @endif
                                    </td>
                                    <td class="small text-black">{{ $catg['title'] }}</td>
                                    <td class="small text-black">{{ $catg['status'] }}</td>
                                    <td class="small text-black">
                                        <div class="dropdown custom-toggle">
                                            <button type="button" class="btn border-0 bg-ngrey text-blue dropdown-toggle"
                                                data-bs-toggle="dropdown">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu py-0 rounded-3">
                                                <li><a class="dropdown-item d-flex align-items-center py-2"
                                                    href="#"><img src="{{asset('img/edit.png')}}" alt="delete"
                                                        class="icon me-2"><span>Edit</span></a></li>
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