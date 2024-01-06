<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>بطاقة الصنف</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN5P4ceR5LglfZYYUZBnWRn2EJbI1uFaw" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    @section('css')
        <!---Internal  Prism css-->
        <link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
        <!---Internal Input tags css-->
        <link href="{{URL::asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">
        <!--- Custom-scroll -->
        <link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
    @endsection
</head>

<body>



<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light rtl-navbar ">

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">المخزون </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">البيانات الرئيسية</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> بطاقة الصنف</a>

                </li>

            </ul>
        </div>


    </nav>
</header>




<div class="d-flex justify-content-end ">
    <button class="btn btn-secondary btn-icon ml-2 col-1 m-1" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">الغاء</button>

    <button class="btn btn-secondary ml-2 col-1 m-1" type="submit" id="saveButton">حفظ</button>
</div>
<div class="container">
    <div class="row ">

        <div class="col-6 align-content-end">
            <div class="container">
                <div class="row">
                    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data"
                          autocomplete="off">
                        @csrf
                        <button class="btn btn-secondary ml-2 col-1 m-1" type="submit" id="saveButton">حفظ</button>


                        <div class="d-flex justify-content-end align-items-center col-12">
                        <label class="form-check-label mr-4" for="type">
                            اضف هذا الصنف رئيسي
                        </label>
                        <input class="form-check-input" type="checkbox" name="type" id="type">
                    </div>

                    <div class="d-flex justify-content-end align-items-center col-12 ">
                        <div class="form-group col-10">
                            <input type="text"
                                   class="form-control text-end mt-2  bg-secondary-subtle btn-outline-dark" name="code" id="code"
                                   placeholder="رمز الصنف">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex justify-content-end align-items-start ">
                            <div class="input-group-append col-1 ">
                                <button class="btn btn-outline-light bg-secondary-subtle" type="button">
                                    <i class="fas fa-user bg-secondary-gradient"></i>

                                </button>
                            </div>



                            <div class="form-group col-9 ">
                                <input type="text" class="form-control text-end bg-light btn-outline-dark" name="name" id="name"
                                       placeholder="اسم الصنف">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end align-items-center col-12">
                        <div class="d-flex justify-content-end align-items-center col-5">
                            <label class="form-check-label mr-4 " for="color">
                                الحجم / اللون فقط
                            </label>
                            <input class="form-check-input" type="checkbox" name="color" id="color">
                        </div>

                        <div class="d-flex justify-content-end align-items-center col-5">
                            <label class="form-check-label mr-4 " for="active">
                                دعم الاصناف الفرعية
                            </label>
                            <input class="form-check-input" name="active" type="checkbox" id="active">
                        </div>
                    </div>
                    </form>

                    <hr class="mt-4">

                    <div class="d-flex justify-content-end align-items-center col-12">

                        <div class="container">
                            <div class="row justify-content-end align-items-center ">

                                <div class="d-flex justify-content-end align-items-center col-4">
                                    <div class="file-upload">
                                        <input type="file" id="fileUpload" name="fileUpload" />

                                    </div>
                                    <div>
                                        <label id="fileLabel" for="fileUpload">Choose File</label>
                                        <div id="imagePreview" name="imagePreview"></div>
                                    </div>
                                </div>

                                <div class="form-group col-8">
                                    <div class="d-flex justify-content-end align-items-center  col-12 ">
                                        <select id="product" class="form-select custom-select SelectBox"
                                                aria-label="Default select example" style="direction: rtl;"
                                                onclick="console.log($(this).val())"
                                                onchange="console.log('change is firing')">
                                            <option selected>المخزون</option>
                                            @foreach($products as $product)
                                                <option value="{{$product->id}}">{{$product->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-12 mt-2">
                                        <input type="text" class="form-control text-end bg-light btn-outline-dark"
                                               id="description" name="description" placeholder="تعريف">
                                    </div>

                                    <div class="form-group col-12 ">
                                        <input type="text" class="form-control text-end bg-light btn-outline-dark"
                                               id="none" name="none">
                                    </div>

                                    <div class="form-group col-12 ">
                                        <input type="text" class="form-control text-end bg-light btn-outline-dark"
                                               id="code_sub" name="code_sub" placeholder="رمز المورد">
                                    </div>

                                    <div class="form-group col-12 ">
                                        <input type="text"
                                               class="form-control text-end bg-secondary-subtle btn-outline-dark "
                                               id="name_sub" name="name_sub" placeholder="اسم المورد">
                                    </div>

                                    <div class="d-flex justify-content-end align-items-center col-12">
                                        <label class="form-check-label mr-4" for="active">
                                            ايقاف بيع الاصناف
                                        </label>
                                        <input class="form-check-input" type="checkbox" id="active" name="active">
                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>


        <div class="col-6 ">
            <div class="container ">
                <div class="row">
                    <div class="row justify-content-end">
                        <div class="col-2 text-end">
                            <label for="exampleFormControlInput1" class="form-label">البحث ب</label>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-2 text-end">
                            <label for="exampleFormControlInput1" class="form-label">رمز الصنف</label>
                        </div>
                        <div class="col-4">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <button class="btn bg-secondary-subtle" type="button">
                                        <i class="fas fa-search d-none d-md-block"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" id="name">

                            </div>
                        </div>

                        <div class="col-4 ">
                            <select id="product" class="form-select text-end SelectBox"
                                    aria-label="Default select example" onclick="console.log($(this).val())"
                                    onchange="console.log('change is firing')">
                                <option selected disabled>رمز الصنف</option>
                                @foreach($products as $product)
                                    <option value="{{$product->id}}">{{$product->code}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-end p-2">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">اسم الصنف</label>
                        </div>
                        <div class="col-8 ">
                            <select id="product" class="form-select custom-select SelectBox"
                                    aria-label="Default select example" style="direction: rtl;"
                                    onclick="console.log($(this).val())" onchange="console.log('change is firing')">
                                <option selected></option>
                                @foreach($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-3 mt-4 text-end">
                            <label for="longTextField" class="form-label col-12 p-1">نوع الصنف</label>
                            <label for="longTextField" class="form-label col-12 p-1 ">تعريف</label>
                            <label for="longTextField" class="form-label col-12 p-1">الصنف البديل</label>
                            <label for="longTextField" class="form-label col-12 p-1 ">رمز المورد</label>
                            <label for="longTextField" class="form-label col-12 p-1">اسم المورد</label>

                        </div>

                        <div class="col-8">
                            <div class="container mt-2 ">
                                <form>
                                    <div class="form-group">
                                        <textarea class="form-control" id="longTextField" rows="13"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="panel panel-primary tabs-style-2">
                <div class=" tab-menu-heading">
                    <div class="tabs-menu1">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs" id="myTabs" style="direction: rtl;">
                            <li><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab1">معلومات
                                    عامة</a></li>
                            <li><a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab2">وحدات</a>
                            </li>
                            <li><a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#tab3">معامل
                                    السعر</a></li>
                            <li><a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#tab4">المجموعة
                                    الضريبية</a></li>
                            <li><a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#tab5">البطاقات</a>
                            </li>
                            <li><a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#tab6">تعليقات
                                    مميزة</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body main-content-body-right border">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1" style="direction: rtl;">
                            <label for="longTextField" class="form-label col-4 p-4">HSN رمز</label>
                            <input type="text" class="form-control col-4 p-3" id="exampleFormControlInput1"
                                   placeholder="رمز HSN">
                            <input class="form-check-input mr-2" type="checkbox" id="exampleCheckbox"
                                   style="direction: rtl;">
                            <label class="form-check-label mr-4" for="exampleCheckbox"></label>
                            متاح فى المتجر الالكترونى

                        </div>
                        <div class="tab-pane fade" id="tab2" style="direction: rtl;">
                            tab2
                        </div>
                        <div class="tab-pane fade" id="tab3" style="direction: rtl;">
                            tab 3
                        </div>
                        <div class="tab-pane fade" id="tab4" style="direction: rtl;">
                            tab 4
                        </div>
                        <div class="tab-pane fade" id="tab5" style="direction: rtl;">
                            tab 5
                        </div>
                        <div class="tab-pane fade" id="tab6" style="direction: rtl;">
                            tab 6
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    </div>


    <script>
        document.getElementById('fileUpload').addEventListener('change', function (event) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('imagePreview').style.backgroundImage = `url(${e.target.result})`;
            };
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>

{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('select[name="product"]').on('change', function () {--}}
{{--                var supplier_id = $(this).val();--}}
{{--                if (supplier_id) {--}}
{{--                    $.ajax({--}}
{{--                        url: "products",--}}
{{--                        type: "GET",--}}
{{--                        dataType: "json",--}}
{{--                        success: function (response) {--}}
{{--                            // Handle success response from the server--}}
{{--                            console.log('Data saved successfully:', response);--}}
{{--                        },--}}
{{--                        error: function (error) {--}}
{{--                            // Handle error response from the server--}}
{{--                            console.error('Error saving suppliers:', error);--}}
{{--                        },--}}
{{--                    });--}}

{{--                } else {--}}
{{--                    console.log('AJAX load did not work');--}}
{{--                }--}}
{{--            });--}}

{{--        });--}}

{{--    </script>--}}

{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('#saveButton').click(function () {--}}
{{--                // Perform AJAX request to save data to the server--}}
{{--                $.ajax({--}}
{{--                    url: '/products/create',  // Replace with your actual Laravel endpoint--}}
{{--                    method: 'POST',--}}
{{--                    data: {--}}
{{--                        // Include the data you want to save here--}}
{{--                        name: 'name',--}}
{{--                        description: 'description',--}}
{{--                        active: 'active',--}}
{{--                        type: 'type',--}}
{{--                        color: 'color',--}}
{{--                        code: 'code',--}}
{{--                        supplier_id: 'supplier_id',--}}
{{--                        image_id: 'image_id',--}}
{{--                        code_sub: 'code_sub',--}}
{{--                        name_sub: 'name_sub',--}}
{{--                        image: 'image',--}}
{{--                        path: 'path',--}}
{{--                        // Add more key-value pairs as needed--}}
{{--                    },--}}
{{--                    success: function (response) {--}}
{{--                        // Handle success response from the server--}}
{{--                        console.log('Data saved successfully:', response);--}}
{{--                    },--}}
{{--                    error: function (error) {--}}
{{--                        // Handle error response from the server--}}
{{--                        console.error('Error saving data:', error);--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

</body>
