<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>

<body class="mod-bg-1 mod-nav-link ">
    <main id="js-page-content" role="main" class="page-content">
        <div class="col-md-6">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Задание
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                                <?php

                                $flex = '<div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">';
                                $mens = ['Sunny', 'Jos', 'Jovanni', 'Roberto'];
                                $A['Sunny'] = [
                                    'image'     => '<img src="img/demo/authors/sunny.png" alt="Sunny A." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">',
                                    'position1' => 'Sunny A. (UI/UX Expert)',
                                    'position2' => 'Lead Author',
                                    'contacts'  => [
                                        '<a href="https://twitter.com/@myplaneticket" class="text-info fs-sm" target="_blank">@myplaneticket</a> - ',
                                        '<a href="https://wrapbootstrap.com/user/myorange" class="text-info fs-sm" target="_blank" title="Contact Sunny"><i class="fal fa-envelope"></i></a>'
                                    ],
                                ];
                                $A['Jos'] = [
                                    'image'     => '<img src="img/demo/authors/josh.png" alt="Jos K." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">',
                                    'position1' => 'Jos K. (ASP.NET Developer)',
                                    'position2' => 'Partner &amp; Contributor',
                                    'contacts'  => [
                                        '<a href="https://twitter.com/@atlantez" class="text-info fs-sm" target="_blank">@atlantez</a> - ',
                                        '<a href="https://wrapbootstrap.com/user/Walapa" class="text-info fs-sm" target="_blank" title="Contact Jos"><i class="fal fa-envelope"></i></a>'
                                    ],
                                ];
                                $A['Jovanni'] = [
                                    'image'     => '<img src="img/demo/authors/jovanni.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">',
                                    'position1' => 'Jovanni L. (PHP Developer)',
                                    'position2' => 'Partner &amp; Contributor',
                                    'contacts'  => [
                                        '<a href="https://twitter.com/@lodev09" class="text-info fs-sm" target="_blank">@lodev09</a> - ',
                                        '<a href="https://wrapbootstrap.com/user/lodev09" class="text-info fs-sm" target="_blank" title="Contact Jovanni"><i class="fal fa-envelope"></i></a>'
                                    ],
                                ];
                                $A['Roberto'] = [
                                    'image'     => '<img src="img/demo/authors/roberto.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">',
                                    'position1' => 'Roberto R. (Rails Developer)',
                                    'position2' => 'Partner &amp; Contributor',
                                    'contacts'  => [
                                        '<a href="https://twitter.com/@sildur" class="text-info fs-sm" target="_blank">@sildur</a> - ',
                                        '<a href="https://wrapbootstrap.com/user/sildur" class="text-info fs-sm" target="_blank" title="Contact Roberto"><i class="fal fa-envelope"></i></a>'
                                    ],
                                ];

                                foreach ($mens as $man) {
                                    if ($man == 'Sunny') {
                                        echo $flex;
                                        print_r($A[$man]['image']);
                                        echo "<div class='ml-2 mr-3'>",
                                             "<h5 class='m-0'>",
                                             $A[$man]['position1'];
                                        echo "<small class='m-0 fw-300'>",
                                             $A[$man]['position2'],
                                             "</small>";
                                        echo "</h5>";
                                        echo $A[$man]['contacts'][0],
                                             $A[$man]['contacts'][1];
                                        echo "</div>",
                                             "</div>";
                                    } elseif ($man == 'Jos') {
                                        echo $flex;
                                        print_r($A[$man]['image']);
                                        echo "<div class='ml-2 mr-3'>",
                                             "<h5 class='m-0'>",
                                             $A[$man]['position1'];
                                        echo "<small class='m-0 fw-300'>",
                                             $A[$man]['position2'],
                                             "</small>";
                                        echo "</h5>";
                                        echo $A[$man]['contacts'][0],
                                             $A[$man]['contacts'][1];
                                        echo "</div>",
                                             "</div>";
                                    } elseif ($man == 'Jovanni') {
                                        echo $flex;
                                        print_r($A[$man]['image']);
                                        echo "<div class='ml-2 mr-3'>",
                                             "<h5 class='m-0'>",
                                             $A[$man]['position1'];
                                        echo "<small class='m-0 fw-300'>",
                                             $A[$man]['position2'],
                                             "</small>";
                                        echo "</h5>";
                                        echo $A[$man]['contacts'][0],
                                             $A[$man]['contacts'][1];
                                        echo "</div>",
                                             "</div>";
                                    } elseif ($man == 'Roberto') {
                                        echo $flex;
                                        print_r($A[$man]['image']);
                                        echo "<div class='ml-2 mr-3'>",
                                             "<h5 class='m-0'>",
                                             $A[$man]['position1'];
                                        echo "<small class='m-0 fw-300'>",
                                             $A[$man]['position2'],
                                             "</small>";
                                        echo "</h5>";
                                        echo $A[$man]['contacts'][0],
                                             $A[$man]['contacts'][1];
                                        echo "</div>",
                                             "</div>";
                                    }
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
    </main>


    <script src="js/vendors.bundle.js"></script>
    <script src="js/app.bundle.js"></script>
    <script>
        // default list filter
        initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
        // custom response message
        initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
    </script>
</body>

</html>