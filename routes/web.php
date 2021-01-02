<?php

use App\Company;
use App\Employee;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/test', function () {
    foreach(range(1,5) as $r)
        Company::create([
            'name'    => 'Test Company'.$r,
            'code'    => rand(1000,10000),
            'address' => 'Address'.$r,
            'city'    => 'City'.$r,
            'country' => 'Country'.$r
        ]);

    foreach(range(1,10) as $r)
        Employee::create([
            'name'     => 'test'.$r,
            'lastname'    => 'lastname'.$r,
            'birthdate'   => strval($r+1950).'-'.strval($r).'-'.strval($r*2),
            'personal_id' => rand(1,99999999),
            'salary'      => rand(800,10000),
            'company_id'  => rand(0,5)
        ]);
    echo "<h1 style='color:green'>Successfully created</h1>";
    sleep(2);
    return redirect('/');
});
Route::get('/', function () {
    echo '<a href="/employee">All Employees</a><br><br><a href="/employees/join">All Joined Employees</a><br><br><a href="/employee/create">Add Employee</a><br><br><a href="/company/all">All Companies</a><br><br><a href="/company/add">Add company</a><br><br><a href="test">Create random companies and employees for test</a>';
});

Route::resource('employee', 'resourceController')->except('show');

Route::prefix('company')->name('company.')->group(function(){
    Route::get('all',"BasicController@ViewCompanies")->name('all');
    Route::get('add',"BasicController@AddCompany")->name('add');
    Route::post('save',"BasicController@SaveCompany")->name('save');
    Route::post('delete',"BasicController@DeleteCompany")->name('delete');
    Route::post('update',"BasicController@UpdateCompany")->name('update');
    Route::get('edit/{id}',"BasicController@EditCompany")->name("edit");
});
Route::get('/employees/join','BasicController@EmployeesJoin');
