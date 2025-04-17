<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.css')
    <title>items management</title>
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
                                Items Management
                            </h1>
                            <p class="mb-0">A rental log is a record that tracks the details of rental transactions, typically for a rental or equipment.</p>
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
                                <p class="mb-0 me-3">Total Items:</p>
                                <p class="mb-0 text-blue fw-medium">353</p>
                            </div>
                        </div>
                       
                    </div>
                    <div class="mt-4"></div>
                        <ul class="nav nav-tabs custom-tabs" id="itemsTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="text-black nav-link active" id="all-items-tab" data-bs-toggle="tab" data-bs-target="#all-items" type="button" role="tab" aria-controls="all-items" aria-selected="true">
                                   Rent
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="text-black nav-link" id="available-items-tab" data-bs-toggle="tab" data-bs-target="#available-items" type="button" role="tab" aria-controls="available-items" aria-selected="false">
                                    Sale
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="itemsTabContent">
                            <div class="tab-pane fade show active" id="all-items" role="tabpanel" aria-labelledby="all-items-tab">
                                @if (count($items) > 0)
                                    <div class="table-responsive default-table table-header-shadow mt-3">
                                        <table class="table">
                                            <thead class="">
                                                <tr class="align-middle">
                                                    <th class="small text-capitalize fw-medium text-nowrap">
                                                        Items Name
                                                    </th>
                                                    <th class="small text-capitalize fw-medium text-nowrap">
                                                        Items Age
                                                    </th>
                                                    <th class="small text-capitalize fw-medium text-nowrap">
                                                        Price
                                                    </th>
                                                    <th class="small text-capitalize fw-medium text-nowrap">
                                                        Availability
                                                    </th>
                                                    <th class="small text-capitalize fw-medium text-nowrap">
                                                        Status
                                                    </th>
                                                    <th class="small text-capitalize fw-medium text-nowrap">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($items as $item)
                                                    <tr class="align-middle">
                                                        <td class="small text-black">
                                                            <div class="d-flex align-items-center">
                                                                @if (!empty($item['media']) && is_array($item['media']))
                                                                <img src="{{ $item['media'][0] ?? '' }}" alt="user-img" class="user-img me-2 rounded-circle shadow"
                                                                    style="width:45px; height:45px; object-fit:cover">
                                                                @else
                                                                <span>N/A</span>
                                                                @endif
                                                                <span>{{ $item['title'] }}</span>
                                                            </div>
                                                        </td>
                                                        <td class="small text-black text-nowrap">{{ $item['age'] }}</td>
                                                        <td class="small text-black">
                                                            {{ $item['price'] }}
                                                        </td>
                                                        <td class="small text-black">
                                                            {{ is_array($item['availability']) ? implode(', ', $item['availability']) : $item['availability'] }}
                                                        </td>
                                                        <td class="small text-black">
                                                            <span class="status-green">
                                                                Booking
                                                            </span>
                                                        </td>
                                                        <td class="small text-black">
                                                            <a href="#" class="status-green">Detail</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <div class="alert alert-danger mt-3 mb-0" role="alert">
                                        Items for rent not found
                                    </div>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="available-items" role="tabpanel" aria-labelledby="available-items-tab">
                                @if (count($itemssales) > 0)
                                    <div class="table-responsive default-table table-header-shadow mt-3">
                                        <table class="table">
                                            <thead class="">
                                                <tr class="align-middle">
                                                    <th class="small text-capitalize fw-medium text-nowrap">
                                                        Items Name
                                                    </th>
                                                    <th class="small text-capitalize fw-medium text-nowrap">
                                                        Items Age
                                                    </th>
                                                    <th class="small text-capitalize fw-medium text-nowrap">
                                                        Price
                                                    </th>
                                                    <th class="small text-capitalize fw-medium text-nowrap">
                                                        Availability
                                                    </th>
                                                    <th class="small text-capitalize fw-medium text-nowrap">
                                                        Status
                                                    </th>
                                                    <th class="small text-capitalize fw-medium text-nowrap">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($itemssales as $itemssale)
                                                    <tr class="align-middle">
                                                        <td class="small text-black">
                                                            <div class="d-flex align-items-center">
                                                                @if (!empty($itemssale['media']) && is_array($itemssale['media']))
                                                                <img src="{{ $itemssale['media'][0] ?? '' }}" alt="user-img" class="user-img me-2 rounded-circle shadow"
                                                                    style="width:45px; height:45px; object-fit:cover">
                                                                @endif
                                                                <span>{{ $itemssale['title'] }}</span>
                                                            </div>
                                                        </td>
                                                        <td class="small text-black text-nowrap">{{ $itemssale['age'] }}</td>
                                                        <td class="small text-black">
                                                            {{ $itemssale['price'] }}
                                                        </td>
                                                        <td class="small text-black">
                                                            {!! !empty($itemssale['availability']) ? (is_array($itemssale['availability']) ? implode(', ', $itemssale['availability']) : $itemssale['availability']) : '<span class="text-danger">N/A</span>' !!}
                                                        </td>
                                                        <td class="small text-black">
                                                            <span class="status-green">
                                                                Booking
                                                            </span>
                                                        </td>
                                                        <td class="small text-black">
                                                            <a href="#" class="status-green">Detail</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <div class="alert alert-danger mt-3 mb-0" role="alert">
                                        Items for sale not found
                                    </div>
                                @endif
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