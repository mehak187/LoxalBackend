<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.cssl')
    <title>add new user</title>
</head>

<body>
    @include('admin.template.navbar')
    <div class="main">
        <div class="main-inner">
            <section>
                <div class="mycontainer">
                  <div class="mt-4">
                    <div class="border-1 border-dark shadow rounded-3 px-3 py-3">
                        <h2 class="mb-0 fs-5 fw-medium text-capitalize">Add user details</h2>
                    </div>
                    <div class="mt-4">
                        <form action="">
                            <div class="col-md-10 col-lg-9 col-xl-8 col-xxl-7">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="me-2 my-2">
                                        <h3 class="fs-6 fw-md">Upload Image</h3>
                                        <div class="mt-3 preview-box rounded-3">
                                        </div>
                                    </div>
                                    <div class="d-flex  my-2 flex-column">
                                        <label for="user-upload" class="bg-blue px-3 py-2 rounded-3 text-white">Upload Image</label>
                                        <input type="file" class="d-none" id="user-upload" accept="image/*">
                                        <label for="user-upload" class="text-blue small mt-2" style="cursor: pointer;">Replace Image</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 my-2">
                                        <label for="fname" class="w-100 fw-medium">First Name</label>
                                        <input type="text" id="fname" class="my-input rounded-3 focus-none w-100" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 my-2">
                                        <label for="lname" class="w-100 fw-medium">Last Name</label>
                                        <input type="text" id="lname" class="my-input rounded-3 focus-none w-100" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 my-2">
                                        <label for="phone" class="w-100 fw-medium">Phone number</label>
                                        <input type="text" id="phone" class="my-input rounded-3 focus-none w-100" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 my-2">
                                        <label for="email" class="w-100 fw-medium">Email</label>
                                        <input type="emai" id="email" class="my-input rounded-3 focus-none w-100" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 my-2">
                                        <label for="address" class="w-100 fw-medium">Address</label>
                                        <input type="text" id="address" class="my-input rounded-3 focus-none w-100" placeholder="Type here">
                                    </div>
                                    <div class="col-sm-6 my-2">
                                        <label for="password" class="w-100 fw-medium">Password</label>
                                        <input type="password" id="password" class="my-input rounded-3 focus-none w-100" placeholder="Type here">
                                    </div>
                                </div>
                                <div class="d-flex mt-5">
                                    <button type="submit" class="bg-black rounded-3 text-white d-inline-block px-4 px-sm-5 me-3 py-2 border border-1 border-black">Save</button>
                                    <button type="reset" class="my-input rounded-3 text-black d-inline-block px-4 px-sm-5 py-2">Cancel</button>
                                </div>
                            </div>
                        </form>
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
    <script>
        const uploadInput = document.getElementById('user-upload');
        const previewBox = document.querySelector('.preview-box');
    
        uploadInput.addEventListener('change', function () {
            if (uploadInput.files && uploadInput.files[0]) {
                const file = uploadInput.files[0];
                const reader = new FileReader();
    
                reader.onload = function (e) {
                    previewBox.innerHTML = `<img src="${e.target.result}" alt="Preview" class="img-fluid rounded-3" style="width: 100%; height: 100%; object-fit: cover;">`;
                };
    
                reader.readAsDataURL(file); 
            }
        });
    </script>
</body>

</html>