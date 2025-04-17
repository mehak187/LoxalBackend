<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.css')
    <title>item details</title>
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
                                Item Details
                            </h1>
                        </div>
                        <p class="mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et, quia possimus
                            alias, unde dolorum facilis reprehenderit enim.</p>
                        <div class="rounded-2 info-bg">
                            <div class="py-3 px-4 px-md-5 row justify-content-start">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="my-4 col-4">
                                            {{-- <h2 class="fs-4 text-darkgreen fw-bold mb-0 text-center text-sm-start">Main Details</h2> --}}
                                            <div class="">
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold mb-1 text-blue me-sm-3">Item Name:
                                                    </h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['title']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ $item['title'] }}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Category:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['category']['title']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ $item['category']['title'] }}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">SubCategory:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['subCategory']['title']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ $item['subCategory']['title'] }}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Age:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['age']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ $item['age'] }}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Condition:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['condition']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ $item['condition'] }}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Price:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['price']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ $item['price'] }}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Distance:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['distance']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ $item['distance'] }}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-4 col-4">
                                            <div class="">
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Delivery Mode:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['deliveryMode']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ $item['deliveryMode'] }}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Availability:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['availability']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ is_array($item['availability']) ? implode(', ', $item['availability']) : $item['availability'] }} </p>                                                           </p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Accessible:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['accessible']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ $item['accessible'] }}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Is Paid:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['isPaid']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ $item['isPaid'] }}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Item Type:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['itemType']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ $item['itemType'] }}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Description:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['description']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ $item['description'] }}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Created At:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['createdAt']))
                                                            <p class="mb-0 fs-5 fw-medium">{{ \Carbon\Carbon::parse($item['createdAt'])->format('Y-m-d') }}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="my-4 col-4">
                                            <div class="">
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Posted By:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['postedBy']['userName']))
                                                            <img src="{{ $item['postedBy']['image'] ?? asset('img/dummy.jpeg') }}" 
                                                            alt="user-img" class="user-img me-2 rounded-circle shadow" style="width:60px; height:60px; object-fit:cover">
                                                            <p class="mb-0 fs-5 fw-medium">{{$item['postedBy']['userName']}}</p>
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column my-3">
                                                    <h4 class="fs-5 fw-semibold  mb-1 text-blue me-sm-3">Item Image:</h4>
                                                    <div class="d-flex align-items-center mt-1 mt-sm-0">
                                                        @if (!empty($item['media']) && is_array($item['media']))
                                                            <img src="{{ $item['media'][0] ?? '' }}" alt="user-img" class="user-img w-100 rounded-3"
                                                            style="object-fit:cover; max-width:400px; max-height:200px">
                                                        @else
                                                            <p class="mb-0 fs-5 fw-medium text-danger">N/A</p>
                                                        @endif
                                                    </div>
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