<html lang="en"><!-- begin::Head --><head>
    <base href="../../../">
    <meta charset="utf-8">
    <title>Metronic | Wizard 2</title>
    <meta name="description" content="Wizard examples">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="assets/css/pages/wizard/wizard-2.css" rel="stylesheet" type="text/css">

    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css">

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css">
    <link href="assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css">
    <link href="assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css">
    <link href="assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css">

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico">
    <style>
        .kt-header--fixed.kt-subheader--fixed .kt-subheader {
    position: inherit !important;}
    </style>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" cz-shortcut-listen="true">

    <!-- begin:: Page -->
   <!-- begin:: Subheader -->
   <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
               Quiz </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                   Question </a>
                   <a href="" class="kt-subheader__breadcrumbs-link" >
                    Question </a>
              

                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
         
        </div>
    
    </div>
</div>

<!-- end:: Subheader -->

    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
      

            <!-- end:: Aside -->
           

                <!-- begin:: Header -->
         

                <!-- end:: Header -->
                {{-- <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id=""> --}}

                 

                    <div class="kt-portlet ">
                        
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                   Quiz List
                                </h3>
                            </div>
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                        @auth
                                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">

                            <!--begin::Accordion-->
                            <div class="accordion accordion-light  accordion-svg-icon" id="accordionExample7">
                               @foreach ($quizzes as $quiz)
                                   
                            <?php
                            $totalQuestion=App\Models\Question::where('quiz_id','=',$quiz->id)->count();
                            ?>
                                <div class="card">
                                    <div class="card-header" id="headingOne7">
                                        <div class="card-title" data-toggle="collapse" data-target="#quiz{{$quiz->id}}" aria-expanded="true" aria-controls="quiz{{$quiz->id}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
                                                </g>
                                            </svg> {{$quiz->name}}
                                        </div>
                                    </div>
                                    <div id="quiz{{$quiz->id}}" class="collapse " aria-labelledby="headingOne7" data-parent="#accordionExample7">
                                        <div class="card-body">
                                          Total Question:{{$totalQuestion}}<br><br>
                                          Time Duration: {{$quiz->quiz_time}}<br>

                                         <a href="{{route('show-quiz',[$quiz->id])}}"> <button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u mt-4" type="submit">
                                            Start Quiz
                                        </button> </a>
                                        </div>
                                    </div>
                                </div>
                            
                                @endforeach
                            </div>

                            <!--end::Accordion-->
                        </div>
                    </div>
                {{-- </div> --}}

                <!-- begin:: Footer -->
                <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-footer__copyright">
                            2020&nbsp;©&nbsp;<a href="http://keenthemes.com/metronic" target="_blank" class="kt-link">Keenthemes</a>
                        </div>
                        <div class="kt-footer__menu">
                            <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">About</a>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Team</a>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="kt-footer__menu-link kt-link">Contact</a>
                        </div>
                    </div>
                </div>

                <!-- end:: Footer -->
            </div>
        </div>


    <!-- end:: Page -->



   


    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                    ],
                    "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                    ]
                }
            }
        };
        // the selector will match all input controls of type :checkbox
// and attach a click event handler 
// function onlyOne(checkbox) {
//     var checkboxes = document.getElementsById('answer')
//     checkboxes.forEach((item) => {
//         if (item !== checkbox) {
//             item.checked = false;
//             item.value = 0;

        
//         }
//         else{
//             item.value = 1;
//         }
//     })
// }
function onlyOne(id) {
    for (var i = 1;i <= 4; i++)
    {
        document.getElementById("answer" + i).checked = false;
        document.getElementById("answer" + i).value = 0;
        

    }
    document.getElementById(id).checked = true;
    document.getElementById(id).value = 1;

}
    </script>

    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
    <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="assets/js/pages/custom/wizard/wizard-2.js" type="text/javascript"></script>

    <!--end::Page Scripts -->


<!-- end::Body -->
</body></html>