<?php

// TASK_1

// $elements = ['Reports', 'Analytics', 'Export', 'Storage'];   
// $ulist = "<ul id='js-list-msg' class='list-group px-2 pb-2 js-list-filter'>";
// foreach ($elements as $element) {
// 	if ($element == 'Reports') {
// 		$ulist .= "<li class='list-group-item'>
// 		<span data-filter-tags='reports file'>$element</span>
// 	    </li>";       }
//     elseif ($element == 'Analytics') {
//         $ulist .= "<li class='list-group-item'>
//         <span data-filter-tags='reports file'>$element</span>
//         </li>";
//       }
//     elseif ($element == 'Export') {
//         $ulist .= "<li class='list-group-item'>
//         <span data-filter-tags='reports file'>$element</span>
//         </li>";
//       }
//     else {
//         $ulist .= "<li class='list-group-item'>
//         <span data-filter-tags='reports file'>$element</span>
//         </li>";
//       }
//   };
// $ulist .= "</ul>";
// echo $ulist;




// TASK_2

// $elements = ["Privecy", "Cookies and othersimilar technologies"];
// $data = [
//   "Privecy"     =>    "Your privacy is important to us at SmartAdmin and the protection, confidentiality and integrity of your personal data are our prime concerns.
//                       We will only use your personal information to administer your account, provide the products and services you have requested from us, and to keep you informed about our products and services (if you have consented to this).
//                       We only use your data for the purposes for which it was collected and, where relevant, to meet local legal obligations.
//                       We will retain your personal information only for as long as is necessary for the purposes for which the information was collected, or as long as is required pursuant to law.",
//   "Cookies and othersimilar technologies" =>    "We collect certain data through cookies and similar technologies (e.g. web beacons, tags, device identifiers). Cookies are text files placed on your computer to collect standard internet log
//                       information and visitor behaviour information. This information is used to track visitor use of the website and to compile statistical reports on website activity. We register your interaction with our services in order to improve our website,
//                       content and services. Our use of such technologies and the data collected is described in more detail in our Cookie Policy. You can manage your cookie preferences through your browser settings.",
// ];

// $ulist = "<dl>";
// foreach ($elements as $element) {
//   $ulist .= "<dt><h2>$element</h2></dt>
//             <dd><p class='mb-g'>$data[$element]</p></dd>";
// }

// echo $ulist



// foreach ($elements as $element) {
//   if ($element == "Privecy") {
//       echo "<h2>Privacy</h2>";
//       echo "<p class='mb-g'>$data[$element]</p>";
//   }
//   elseif ($element == "Cookies and othersimilar technologies") {
//     echo "<h2>Cookies and othersimilar technologies</h2>";
//     echo "<p class='mb-g'>$data[$element]</p>";
//   }
// };

// TASK_3

                            
// $nav = ['Главная', 'PHP', 'Функция'];
// $ulist = "<ol class='breadcrumb page-breadcrumb'>";
// foreach ($nav as $element) {
//     if ($element == 'Функция') {
//         $ulist .= "<li class='breadcrumb-item active'>$element</li>";
//     }
//     else {
//         $ulist .= "<li class='breadcrumb-item'><a href='#'>$element</a></li>";
//     } 
// };
// $ulist .= "</ol>";
// echo $ulist;

// 


// $elements = ['My Tasks', 'Transfered', 'Bugs Squashed', 'User Testing'];
// $data = [
//     'My Tasks'      => ['<div class="progress-bar bg-fusion-400" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>',
//                         '<span class="d-inline-block ml-auto">130 / 500</span>'],
//     'Transfered'    => ['class="progress-bar bg-success-500" role="progressbar" style="width: 34%;" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100">',
//                         '<span class="d-inline-block ml-auto">440 TB</span>'],
//     'Bugs Squashed' => 'class="progress-bar bg-info-400" role="progressbar" style="width: 77%;" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100">',
//     'User Testing'  => 'class="progress-bar bg-primary-300" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">',
// ];
// $flex = '<div class="d-flex">';
// $progress = '<div class="progress progress-sm mb-3">';

// echo $data['My Tasks'][1];


// foreach ($elements as $element) {
//     if ($element == 'My Tasks') {
//         $flex .= '$element</div>
//                   $data[$element][1]';
//         $progress .= 'data[$element][1]</div>';
//         return $flex; $progress;
//     }
// };



// TASK_5

// $mens = [$sunny, $Jos, $Jovanni, $Roberto];

// $sunny = [
//     'image' => '<img src="img/demo/authors/sunny.png" alt="Sunny A." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">',
//     'position1' => 'Sunny A. (UI/UX Expert)',
//     'position2' => 'Lead Author',
//     'contacts' => ['<a href="https://twitter.com/@myplaneticket" class="text-info fs-sm" target="_blank">@myplaneticket</a>',
//                    '<a href="https://wrapbootstrap.com/user/myorange" class="text-info fs-sm" target="_blank" title="Contact Sunny"><i class="fal fa-envelope"></i></a>'],
// ];
// $Jos = [
//     'image' => '<img src="img/demo/authors/sunny.png" alt="Sunny A." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">',
//     'position1' => 'Sunny A. (UI/UX Expert)',
//     'position2' => 'Lead Author',
//     'contacts' => ['<a href="https://twitter.com/@myplaneticket" class="text-info fs-sm" target="_blank">@myplaneticket</a>',
//                    '<a href="https://wrapbootstrap.com/user/myorange" class="text-info fs-sm" target="_blank" title="Contact Sunny"><i class="fal fa-envelope"></i></a>'],
// ];

// echo $mens[$sunny];



$my_array=array("Вася Пупкин"=>"первый",
"Христофор Бонифатич"=>"второй",
"Человек и Пароход"=>"третий",
"Вольдемарыч"=>"четвертый",
"Харитоныч"=>"пятый",
"Пупырышкин"=>"шестой",
"Абдурахамныч"=>"седьмой");
print_r($my_array["Вася Пупкин"]);

$banned = '<div class="banned rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">';
?>