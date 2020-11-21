<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix' => 'app', 'middleware' => ['preventBackButton', 'auth']], function () {
    Route::get('/', function () {
        $title = 'Dashboard';
        $query = App\Models\Student::paginate(3);
        return view('pages.dashboard.index', ['title' => $title, 'students' => $query]);
    })->name('app');

    Route::group(['prefix' => 'about', 'middleware' => 'role:member'],  function () {
        Route::get('/', 'PostController@index')->name('apps-about');
        Route::post('/create', 'PostController@store')->name('apps-about-create');
        Route::get('/{id}', function ($id) {
            $query = App\Models\Posts::find($id);
            return $query;
        });
        Route::put('/update/{id}', function ($id) {
            $query = App\Models\Posts::find($id);
            $query->title = 'content update';
            $query->save();
            return response()->json([
                'status' => 'success',
                'query' => $query,
            ]);
        });
        Route::post('/update', 'PostController@update')->name('apps-about-update');
        Route::get('/delete/{id}', 'PostController@destroy')->name('about-delete');
    });

    // Students

    Route::group(['prefix' => 'students', 'middleware' => 'role:member'],  function () {
        Route::get('/', 'StudentController@index')->name('apps-student');
        Route::get('/inklusi', 'StudentController@index_inkulsi')->name('apps-student-inklusi');
        Route::get('/beasiswa', 'StudentController@index_beasiswa')->name('apps-student-beasiswa');
        Route::get('/show/{id}', 'StudentController@indexById');
        Route::post('/create', 'StudentController@store')->name('student-create');
        Route::post('/update/nisn', 'NisnController@updatenisn')->name('student-update-nisn');
    });

    // Teacher
    Route::group(['prefix' => 'teachers'],  function () {
        Route::get('/', 'TeacherController@index', ['middleware' => ['role:admin', 'role:member']])->name('apps-teacher');
        Route::get('/create', 'TeacherController@create')->name('apps-teacher-create');
        Route::post('/store', 'TeacherController@store')->name('apps-teacher-store');
        Route::get('/show/{id}', 'TeacherController@show')->name('apps-teacher-show');
        Route::get('/edit/{id}', array('uses' => 'TeacherController@update'))->name('apps-teacher-edit');
        Route::post('/update/data', 'TeacherController@updateLine')->name('apps-teacher-update');
        Route::post('/update/nik', 'TeacherController@updatenik')->name('apps-teacher-nik');
        Route::post('/update/{id}', 'TeacherController@update')->name('apps-teacher-profile-update');
    });

    Route::group(['prefix' => 'studys', 'middleware' => 'role:admin'],  function () {
        Route::get('/', 'StudyController@index')->name('apps-study');
    });

    Route::group(['prefix' => 'classes', 'middleware' => 'role:admin'],  function () {
        Route::get('/', 'ClassesController@index')->name('apps-classes');
    });

    Route::group(['prefix' => 'rpp', 'middleware' => 'role:admin'],  function () {
        Route::get('/', 'RppController@index')->name('apps-rpp');
        Route::get('/show/{id}', 'RppController@show')->name('apps-rpp-show');
        Route::get('excel/', 'RppController@exportExcel')->name('apps-rpp-export');
        Route::get('excel/{id}', 'RppController@exportExcelById')->name('apps-rpp-export-id');
    });


    Route::group(['prefix' => 'subject', 'middleware' => 'role:admin'],  function () {
        Route::get('/', 'SubjectController@index')->name('apps-subject');
        Route::get('/create', 'SubjectController@create')->name('apps-subject-create');
        Route::post('/store', 'SubjectController@store')->name('apps-subject-store');
    });

    Route::group(['prefix' => 'status/student', 'middleware' => 'role:admin'],  function () {
        Route::get('/', 'StatuStudentController@index')->name('apps-status-student');
    });

    Route::group(['prefix' => 'notifications', 'middleware' => 'role:admin'],  function () {
        Route::get('/', 'LessonController@index')->name('apps-notifications');
        Route::post('/push', 'LessonController@newLesson')->name('apps-notifications-push');
        Route::get('/create', 'LessonController@create')->name('apps-notifications-create');
    });

    Route::group(['prefix' => 'programs', 'middleware' => 'role:admin'],  function () {
        // Route::resource('/','ProgramController');
        Route::get('/', 'ProgramController@index');
        Route::get('/create', 'ProgramController@create');
        Route::post('/store', 'ProgramController@store');
        Route::get('/delete/{id}', 'ProgramController@destroy');
        Route::get('/edit/{id}', 'ProgramController@edit')->name('apps-programs-edit');
        Route::post('/update/{id}', array('uses' => 'ProgramController@update'))->name('apps-programs-update');
        Route::get('list', 'ProgramController@list')->name('list');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UserController@index')->name('apps-users');
        Route::get('/index-data', 'UserController@index_data')->name('apps-index-data');
        Route::get('/register','UserController@register')->name('apps-register');
        Route::post('/register/create', 'UserController@store')->name('apps-users-post');
    });

    Route::group(['prefix' => 'company', 'middleware' => 'role:admin'], function () {
        Route::get('/create', 'CompanyController@create')->name('apps-company-create');
        Route::get('/edit/{id}', 'CompanyController@edit')->name('apps-company-edit');
        Route::get('/show/{id}', 'CompanyController@show')->name('apps-company-show');
        Route::post('/update/{id}', 'CompanyController@update')->name('apps-company-update');
        Route::get('/delete/{id}', 'CompanyController@destroy')->name('apps-company-delete');
        Route::post('/store', 'CompanyController@store')->name('apps-company-store');
    });
    // Company Access For Admin And Member
    Route::get('company/show/{id}', 'CompanyController@show', ['middleware' => ['role:member', 'role:admin']])->name('apps-company-show');
    Route::get('company', 'CompanyController@index', ['middleware' => ['role:member', 'role:admin']])->name('apps-company');


    // Route::get('/home', 'HomeController@index')->name('home');

});

Route::namespace('Auth')->group(function () {
    Route::get('/', 'LoginController@show')->name('login');
    Route::post('/login', 'LoginController@authenticate');
    Route::post('/logout', 'LoginController@logout')->name('logout');
});

Route::get('test', 'LessonController@notif');
