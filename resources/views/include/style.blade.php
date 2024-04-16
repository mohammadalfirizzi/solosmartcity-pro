{{-- css --}}

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<style>
    .page-item:first-child .page-link {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        background-color: #1e1e1e;
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        border-radius: 50%;
        transition: all 0.3s;
    }

    .page-item:not(:first-child) .page-link {

        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        background-color: #1e1e1e;
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        border-radius: 50%;
        transition: all 0.3s;
    }
</style>
<!-- Include Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Additional CSS Files -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="" />
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/flex-slider.css') }}">
<link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
<link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">