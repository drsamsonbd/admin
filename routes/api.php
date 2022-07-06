<?php



Route::group(['prefix' => 'admin','middleware' => ['assign.guard:admins','jwt.auth']],function ()
{
	Route::post('login', 'AuthController@login');	
});



Route::group([

'middleware' => 'api',
'prefix' => 'auth'

], function ($router) {

Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::post('me', 'AuthController@me');

});

Route::group(['middleware' => ['jwt.verify']], function() {
	
Route::apiResource('/patient', 'Api\PatientController');
Route::get('/patient/search/{id}', 'Api\SearchPatientController@showbyKPName');
Route::get('/patient/kp/{id}', 'Api\SearchPatientController@showbyKP');

Route::apiResource('/user', 'Api\UserController');
Route::apiResource('/department', 'Api\DepartmentController');
Route::apiResource('/area', 'Api\AreaController');
Route::apiResource('/race', 'Api\RaceController');
Route::apiResource('/district', 'Api\DistrictController');
Route::apiResource('/nationality', 'Api\NationalityController');
Route::apiResource('/locality', 'Api\LocalityController');
Route::apiResource('/pkrc', 'Api\PkrcController');

Route::apiResource('/ward', 'Api\WardController');
Route::apiResource('/bed', 'Api\BedController');
Route::get('/bed/ward/{id}', 'Api\BedController@showbyWard')->name('showbyWard');
Route::apiResource('/bed_discipline', 'Api\BedDisciplineController');
Route::patch('/bed_discipline/status/{id}', 'Api\BedDisciplineController@updateStatus')->name('updateStatus');
Route::apiResource('/wardbed', 'Api\WardBedController');
Route::get('/wardbedActive', 'Api\WardBedActiveController@showbyWard')->name('showbyWard');
Route::apiResource('/wardbedActives', 'Api\WardBedActiveController');
Route::get('/wardbedActive/count', 'Api\WardBedActiveController@count')->name('count');
Route::apiResource('/discipline', 'Api\DisciplineController');
Route::apiResource('/diagnosis', 'Api\DiagnosisController');
Route::patch('/diagnosis/status/{id}', 'Api\DiagnosisController@updateStatus')->name('updateStatus');

Route::apiResource('/hospital', 'Api\HospitalController');
Route::apiResource('/vaccine', 'Api\VaccineController');
Route::apiResource('/case', 'Api\CaseRegController');
Route::apiResource('/sampling', 'Api\CaseSamplingController');
Route::apiResource('/cases', 'Api\CaseController');
Route::apiResource('/samples', 'Api\SamplingController');
Route::apiResource('/caselist', 'Api\CaseListController');
Route::apiResource('/reports', 'Api\ManualReportController');
Route::apiResource('/sum', 'Api\ReportSumController');
Route::apiResource('/admission', 'Api\AdmissionController');
Route::apiResource('/vaccinestatus', 'Api\VaccinationStatusController');

Route::apiResource('/category', 'Api\CategoryController');
Route::apiResource('/user', 'Api\UserController');
Route::apiResource('/department', 'Api\DepartmentController');
Route::apiResource('/finance_category', 'Api\FinanceCategoryController');
Route::apiResource('/ol', 'Api\ObjekLanjutController');
Route::apiResource('/items', 'Api\ItemsController');
Route::apiResource('/pku', 'Api\PkuController');
Route::apiResource('/sku', 'Api\SkuController');
Route::apiResource('/optimum', 'Api\OptimumlevelController');
Route::apiResource('/finance/activity', 'Api\KodAktivitiController');

Route::post('/password/update/{id}', 'Api\UserController@edit');
Route::post('/password/selfupdate/{id}', 'Api\UserController@selfupdate');
Route::get('/items/view/{id}', 'Api\ItemsController@view');
Route::get('/optimum/view/{id}', 'Api\OptimumlevelController@view');
Route::get('/stock/out/{id}', 'Api\OptimumlevelController@showbydept');
Route::get('/items/out/{id}', 'Api\PosController@GetItem');



});



