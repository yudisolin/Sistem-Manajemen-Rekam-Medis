<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['rawatjalan/add'] = 'RawatJalan/add_dataRawatJalan';
$route['rawatjalan/addLama/(:any)'] = 'RawatJalan/add_dataRawatJalanLama/$1';
$route['rawatjalan/create'] = 'RawatJalan/create_dataRawatJalan';
$route['rawatjalan/update'] = 'RawatJalan/update_dataRawatJalan';
$route['rawatjalan/search'] = 'RawatJalan/search_dataRawatJalan';
$route['rawatjalan/show'] = 'RawatJalan/show_dataRawatJalan';
$route['rawatjalan/edit/(:any)'] = 'RawatJalan/edit_dataRawatJalan/$1';
$route['rawatjalan/print/(:any)'] = 'RawatJalan/print_dataRawatJalan/$1';
$route['rawatjalan/view/(:any)'] = 'RawatJalan/view_dataRawatJalan/$1';
$route['rawatjalan/delete/(:any)'] = 'RawatJalan/delete_dataRawatJalan/$1';
$route['rawatjalan/setuju/(:any)'] = 'RawatJalan/setuju_dataRawatJalan/$1';
$route['rawatjalan/tolak/(:any)'] = 'RawatJalan/tolak_dataRawatJalan/$1';
$route['rawatjalan'] = 'RawatJalan/index';
$route['ringkasanmasuk/show'] = 'RawatInap/show_dataRingkasanMasuk';
$route['ringkasanmasuk/search'] = 'RawatInap/search_dataRingkasanMasuk';
$route['ringkasanmasuk/add'] = 'RawatInap/add_dataRingkasanMasuk';
$route['ringkasanmasuk/addLama/(:any)'] = 'RawatInap/add_dataRingkasanMasukLama/$1';
$route['anamnesis/add/(:any)'] = 'RawatInap/add_dataAnamnesis/$1';
$route['hasillaboratoriumdarah/add/(:any)'] = 'RawatInap/add_dataHasilLaboratoriumDarah/$1';
$route['hasillaboratoriumfaeces/add/(:any)'] = 'RawatInap/add_dataHasilLaboratoriumFaeces/$1';
$route['hasillaboratoriumsputum/add/(:any)'] = 'RawatInap/add_dataHasilLaboratoriumSputum/$1';
$route['hasillaboratoriumurine/add/(:any)'] = 'RawatInap/add_dataHasilLaboratoriumUrine/$1';
$route['hasilradiodiagnostik/add/(:any)'] = 'RawatInap/add_dataHasilRadioDiagnostik/$1';
$route['catatanterintegrasi/add/(:any)'] = 'RawatInap/add_dataCatatanTerintegrasi/$1';
$route['ringkasankeluar/add/(:any)'] = 'RawatInap/add_dataRingkasanKeluar/$1';
$route['obatdandiet/add/(:any)'] = 'RawatInap/add_dataObatDanDiet/$1';
$route['ringkasanmasuk/create'] = 'RawatInap/create_dataRingkasanMasuk';
$route['anamnesis/create'] = 'RawatInap/create_dataAnamnesis';
$route['hasillaboratoriumdarah/create'] = 'RawatInap/create_dataHasilLaboratoriumDarah';
$route['hasillaboratoriumfaeces/create'] = 'RawatInap/create_dataHasilLaboratoriumFaeces';
$route['hasillaboratoriumsputum/create'] = 'RawatInap/create_dataHasilLaboratoriumSputum';
$route['hasillaboratoriumurine/create'] = 'RawatInap/create_dataHasilLaboratoriumUrine';
$route['hasilradiodiagnostik/create'] = 'RawatInap/create_dataHasilRadioDiagnostik';
$route['catatanterintegrasi/create'] = 'RawatInap/create_dataCatatanTerintegrasi';
$route['ringkasankeluar/create'] = 'RawatInap/create_dataRingkasanKeluar';
$route['obatdandiet/create'] = 'RawatInap/create_dataObatDanDiet';
$route['ringkasanmasuk/edit/(:any)'] = 'RawatInap/edit_dataRingkasanMasuk/$1';
$route['anamnesis/edit/(:any)'] = 'RawatInap/edit_dataAnamnesis/$1';
$route['hasillaboratoriumdarah/edit/(:any)'] = 'RawatInap/edit_dataHasilLaboratoriumDarah/$1';
$route['hasillaboratoriumfaeces/edit/(:any)'] = 'RawatInap/edit_dataHasilLaboratoriumFaeces/$1';
$route['hasillaboratoriumsputum/edit/(:any)'] = 'RawatInap/edit_dataHasilLaboratoriumSputum/$1';
$route['hasillaboratoriumurine/edit/(:any)'] = 'RawatInap/edit_dataHasilLaboratoriumUrine/$1';
$route['hasilradiodiagnostik/edit/(:any)'] = 'RawatInap/edit_dataHasilRadioDiagnostik/$1';
$route['catatanterintegrasi/edit/(:any)'] = 'RawatInap/edit_dataCatatanTerintegrasi/$1';
$route['ringkasankeluar/edit/(:any)'] = 'RawatInap/edit_dataRingkasanKeluar/$1';
$route['obatdandiet/edit/(:any)'] = 'RawatInap/edit_dataObatDanDiet/$1';
$route['ringkasanmasuk/update'] = 'RawatInap/update_dataRingkasanMasuk';
$route['anamnesis/update'] = 'RawatInap/update_dataAnamnesis';
$route['hasillaboratoriumdarah/update'] = 'RawatInap/update_dataHasilLaboratoriumDarah';
$route['hasillaboratoriumfaeces/update'] = 'RawatInap/update_dataHasilLaboratoriumFaeces';
$route['hasillaboratoriumsputum/update'] = 'RawatInap/update_dataHasilLaboratoriumSputum';
$route['hasillaboratoriumurine/update'] = 'RawatInap/update_dataHasilLaboratoriumUrine';
$route['hasilradiodiagnostik/update'] = 'RawatInap/update_dataHasilRadioDiagnostik';
$route['catatanterintegrasi/update'] = 'RawatInap/update_dataCatatanTerintegrasi';
$route['ringkasankeluar/update'] = 'RawatInap/update_dataRingkasanKeluar';
$route['obatdandiet/update'] = 'RawatInap/update_dataObatDanDiet';
$route['ringkasanmasuk/setuju/(:any)'] = 'RawatInap/setuju_dataRingkasanMasuk/$1';
$route['anamnesis/setuju/(:any)'] = 'RawatInap/setuju_dataAnamnesis/$1';
$route['hasillaboratoriumdarah/setuju/(:any)'] = 'RawatInap/setuju_dataHasilLaboratoriumDarah/$1';
$route['hasillaboratoriumfaeces/setuju/(:any)'] = 'RawatInap/setuju_dataHasilLaboratoriumFaeces/$1';
$route['hasillaboratoriumsputum/setuju/(:any)'] = 'RawatInap/setuju_dataHasilLaboratoriumSputum/$1';
$route['hasillaboratoriumurine/setuju/(:any)'] = 'RawatInap/setuju_dataHasilLaboratoriumUrine/$1';
$route['hasilradiodiagnostik/setuju/(:any)'] = 'RawatInap/setuju_dataHasilRadioDiagnostik/$1';
$route['catatanterintegrasi/setuju/(:any)'] = 'RawatInap/setuju_dataCatatanTerintegrasi/$1';
$route['ringkasankeluar/setuju/(:any)'] = 'RawatInap/setuju_dataRingkasanKeluar/$1';
$route['ringkasanmasuk/tolak/(:any)'] = 'RawatInap/tolak_dataRingkasanMasuk/$1';
$route['anamnesis/tolak/(:any)'] = 'RawatInap/tolak_dataAnamnesis/$1';
$route['hasillaboratoriumdarah/tolak/(:any)'] = 'RawatInap/tolak_dataHasilLaboratoriumDarah/$1';
$route['hasillaboratoriumfaeces/tolak/(:any)'] = 'RawatInap/tolak_dataHasilLaboratoriumFaeces/$1';
$route['hasillaboratoriumsputum/tolak/(:any)'] = 'RawatInap/tolak_dataHasilLaboratoriumSputum/$1';
$route['hasillaboratoriumurine/tolak/(:any)'] = 'RawatInap/tolak_dataHasilLaboratoriumUrine/$1';
$route['hasilradiodiagnostik/tolak/(:any)'] = 'RawatInap/tolak_dataHasilRadioDiagnostik/$1';
$route['catatanterintegrasi/tolak/(:any)'] = 'RawatInap/tolak_dataCatatanTerintegrasi/$1';
$route['ringkasankeluar/tolak/(:any)'] = 'RawatInap/tolak_dataRingkasanKeluar/$1';
$route['ringkasanmasuk'] = 'RawatInap/indexRingkasanMasuk';
$route['anamnesis'] = 'RawatInap/indexAnamnesis';
$route['hasillaboratoriumdarah'] = 'RawatInap/indexHasilLaboratoriumDarah';
$route['hasillaboratoriumfaeces'] = 'RawatInap/indexHasilLaboratoriumFaeces';
$route['hasillaboratoriumsputum'] = 'RawatInap/indexHasilLaboratoriumSputum';
$route['hasillaboratoriumurine'] = 'RawatInap/indexHasilLaboratoriumUrine';
$route['hasilradiodiagnostik'] = 'RawatInap/indexHasilRadioDiagnostik';
$route['catatanterintegrasi'] = 'RawatInap/indexCatatanTerintegrasi';
$route['ringkasankeluar'] = 'RawatInap/indexRingkasanKeluar';
$route['obatdandiet'] = 'RawatInap/indexObatDanDiet';
$route['rawatinap'] = 'RawatInap/indexRawatInap';
$route['ringkasanmasuk/print/(:any)'] = 'RawatInap/print_dataRingkasanMasuk/$1';
$route['anamnesis/print/(:any)'] = 'RawatInap/print_dataAnamnesis/$1';
$route['hasillaboratoriumdarah/print/(:any)'] = 'RawatInap/print_dataHasilLaboratoriumDarah/$1';
$route['hasillaboratoriumfaeces/print/(:any)'] = 'RawatInap/print_dataHasilLaboratoriumFaeces/$1';
$route['hasillaboratoriumsputum/print/(:any)'] = 'RawatInap/print_dataHasilLaboratoriumSputum/$1';
$route['hasillaboratoriumurine/print/(:any)'] = 'RawatInap/print_dataHasilLaboratoriumUrine/$1';
$route['hasilradiodiagnostik/print/(:any)'] = 'RawatInap/print_dataHasilRadioDiagnostik/$1';
$route['catatanterintegrasi/print/(:any)'] = 'RawatInap/print_dataCatatanTerintegrasi/$1';
$route['ringkasankeluar/print/(:any)'] = 'RawatInap/print_dataRingkasanKeluar/$1';
$route['obatdandiet/print/(:any)'] = 'RawatInap/print_dataObatDanDiet/$1';
$route['ringkasanmasuk/view/(:any)'] = 'RawatInap/view_dataRingkasanMasuk/$1';
$route['anamnesis/view/(:any)'] = 'RawatInap/view_dataAnamnesis/$1';
$route['hasillaboratoriumdarah/view/(:any)'] = 'RawatInap/view_dataHasilLaboratoriumDarah/$1';
$route['hasillaboratoriumfaeces/view/(:any)'] = 'RawatInap/view_dataHasilLaboratoriumFaeces/$1';
$route['hasillaboratoriumsputum/view/(:any)'] = 'RawatInap/view_dataHasilLaboratoriumSputum/$1';
$route['hasillaboratoriumurine/view/(:any)'] = 'RawatInap/view_dataHasilLaboratoriumUrine/$1';
$route['hasilradiodiagnostik/view/(:any)'] = 'RawatInap/view_dataHasilRadioDiagnostik/$1';
$route['catatanterintegrasi/view/(:any)'] = 'RawatInap/view_dataCatatanTerintegrasi/$1';
$route['ringkasankeluar/view/(:any)'] = 'RawatInap/view_dataRingkasanKeluar/$1';
$route['obatdandiet/view/(:any)'] = 'RawatInap/view_dataObatDanDiet/$1';
$route['rawatinap/view/(:any)'] = 'RawatInap/view_dataRawatInap/$1';
$route['ringkasanmasuk/delete/(:any)'] = 'RawatInap/delete_dataRingkasanMasuk/$1';
$route['anamnesis/delete/(:any)'] = 'RawatInap/delete_dataAnamnesis/$1';
$route['hasillaboratoriumdarah/delete/(:any)'] = 'RawatInap/delete_dataHasilLaboratoriumDarah/$1';
$route['hasillaboratoriumfaeces/delete/(:any)'] = 'RawatInap/delete_dataHasilLaboratoriumFaeces/$1';
$route['hasillaboratoriumsputum/delete/(:any)'] = 'RawatInap/delete_dataHasilLaboratoriumSputum/$1';
$route['hasillaboratoriumurine/delete/(:any)'] = 'RawatInap/delete_dataHasilLaboratoriumUrine/$1';
$route['hasilradiodiagnostik/delete/(:any)'] = 'RawatInap/delete_dataHasilRadioDiagnostik/$1';
$route['catatanterintegrasi/delete/(:any)'] = 'RawatInap/delete_dataCatatanTerintegrasi/$1';
$route['ringkasankeluar/delete/(:any)'] = 'RawatInap/delete_dataRingkasanKeluar/$1';
$route['obatdandiet/delete/(:any)'] = 'RawatInap/delete_dataObatDanDiet/$1';
$route['pasien/view/(:any)'] = 'PasienController/view_dataPasien/$1';
$route['pasien'] = 'PasienController/index';
$route['users/add'] = 'Users/add_dataAkun';
$route['users/create'] = 'Users/create_dataAkun';
$route['users/update'] = 'Users/update_dataAkun';
$route['users/edit/(:any)'] = 'Users/edit_dataAkun/$1';
$route['users/delete/(:any)'] = 'Users/delete_dataAkun/$1';
$route['users'] = 'Users/index';
$route['default_controller'] = 'Users/login';
$route['(:any)'] = 'Home/index/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
