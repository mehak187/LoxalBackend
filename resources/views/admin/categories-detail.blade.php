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
                <div class="mt-4">
                    <div class="mycontainer">
                        <div class="d-flex align-items-center">
                            <h1 class="fs-4 fw-semibold mb-0">
                                Category Details
                            </h1>
                        </div>
                        <p class="mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, quia possimus
                            alias, unde dolorum facilis reprehenderit enim.</p>
                        <div class="rounded-2 info-bg">
                            <div class="py-3 px-4 px-md-5 row justify-content-start">
                                <div class="col-lg-9 col-xl-8">
                                    <div class="row">
                                        <div class="my-4 col-6">
                                            <div class="">
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold mb-02text-blue me-sm-3">Category Name:
                                                    </h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        <p class="mb-0 fs-5 fw-medium">{{ $catg['title'] }}</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-2 text-blue me-sm-3">Status:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        <p class="mb-0 fs-5 fw-medium">{{ $catg['status'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-4 col-6">
                                            <div class="">
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-2 text-blue me-sm-3">Image:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($catg['image']))
                                                        <img src="{{ $catg['image'] }}" alt="user-img"
                                                            class="user-img w-100 rounded-3"
                                                            style="object-fit:cover; max-width:400px; max-height:300px">
                                                        @else
                                                        <span className="text-danger">N/A</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="d-flex mt-4 align-items-center">
                            <h1 class="fs-4 fw-semibold mb-0">
                                SubCategories Detail
                            </h1>
                        </div>
                        @if (count($subcatgs) > 0)
                        <div class="table-responsive default-table table-header-shadow mt-3">
                            <table class="table">
                                <thead class="">
                                    <tr class="align-middle">
                                        <th class="small text-capitalize fw-medium text-nowrap">
                                            SubCategory Title
                                        </th>
                                        <th class="small text-capitalize fw-medium text-nowrap">Status</th>
                                        <th class="small text-capitalize fw-medium text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subcatgs as $subcatg)
                                    <tr class="align-middle">
                                        <td class="small text-black text-nowrap">{{ $subcatg['title'] }}</td>
                                        <td class="small text-black text-nowrap">{{ $subcatg['status'] }}</td>
                                        <td class="small text-black">
                                            <div class="dropdown custom-toggle">
                                                <button type="button"
                                                    class="btn border-0 bg-ngrey text-blue dropdown-toggle"
                                                    data-bs-toggle="dropdown">
                                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu py-0 rounded-3">
                                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                                            href="{{ route('admin.rentalLogDetails') }}"><img
                                                                src="{{asset('img/details.png')}}" alt="details"
                                                                class="icon me-2"><span>View Details</span></a></li>
                                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                                            href="#"><img src="{{asset('img/edit.png')}}" alt="edit"
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
                        @else
                            <div class="alert alert-danger mt-3 mb-0" role="alert">
                                Subcategories not found
                            </div>
                        @endif
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