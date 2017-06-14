<?php defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'backend';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Routing Core
$route['backoffice'] = 'backend';
$route['backoffice-masuk'] = 'login';
$route['backoffice-keluar'] = 'login/logout';
$route['Backoffice-Grid/(:any)'] = 'backend/get_grid/$1';
$route['backoffice-form/(:any)'] = 'backend/get_form/$1';
$route['backoffice-Data/(:any)'] = 'backend/getdata/$1';
$route['backoffice-GetDetil'] = 'backend/get_konten';
$route['backoffice-konten/(:any)'] = 'backend/get_konten/$1';
$route['backoffice-simpan/(:any)/(:any)'] = 'backend/simpandata/$1/$2';

$route['products']['get'] = 'product/insert';

// Modul POIN
$route['beranda'] = 'backend/modul/beranda/main';

$route['get/BBQData']['get'] = 'Backend_atf/getBBQ';
$route['get/warehouse-data']['get'] = 'Backend_atf/getDataWarehouse';
$route['get/atf-data']['get'] = 'Backend_atf/getDataAtf';
$route['get/atf-add']['post'] = 'Backend_atf/store';
$route['get/atf-edit']['post'] = 'Backend_atf/update';
$route['get/data-material-atf']['get'] = 'Backend_atf/getMaterialAtf';
$route['save/material-atf']['post'] = 'Backend_atf/saveMaterialAtf';
$route['edit/material-atf']['post'] = 'Backend_atf/editMaterialAtf';
$route['delete/material-atf']['post'] = 'Backend_atf/deleteMaterialAtf';

$route['get/material-atf']['get'] = 'Backend_atf/MaterialAtf';
$route['get/material-pmr']['get'] = 'Backend_Pmr/MaterialPmr';

$route['get/pmrNo']['get'] = 'Backend_pmr/pmrNo';
$route['get/pmr-add']['post'] = 'Backend_pmr/store';
$route['get/pmr-edit']['post'] = 'Backend_pmr/update';
$route['delete/material-pmr']['post'] = 'Backend_pmr/deleteMaterialPmr';
$route['save/material-pmr']['post'] = 'Backend_pmr/saveMaterialPmr';
$route['edit/material-pmr']['post'] = 'Backend_pmr/editMaterialPmr';


$route['get/dataRegion']['get'] = 'MasterRegion/getData';
$route['get/dataPic']['get'] = 'MasterPic/getData';
$route['get/dataWarehouse']['get'] = 'MasterWarehouse/getData';
$route['get/dataNeSystem']['get'] = 'MasterNeSystem/getData';
$route['get/dataPhase']['get'] = 'MasterPhase/getData';

/* Routes Front End Routes */



