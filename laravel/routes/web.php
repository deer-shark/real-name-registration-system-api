<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome',['name'=>'我yc啦']);
// });

// Route::prefix('f')->group(function ()
// {
//     Route::view('watch', 'f.gmn');
// });

//GET用法
// Route::get('/', function () {
//     return view('covid.frontend.dashboard.index');
// })->name('dashboard');



Route::prefix('kskg')->group(function ()
{
    Route::get('user/{id}', function ($id) {
        return 'User '.$id;
    });
    Route::prefix('xams20')->group(function ()
    {   
        //根目錄
        Route::view('/', 'covid.index')->name('home');
        Route::view('/comingsoon', 'covid.frontend.comingsoon.index');
        
        //資料填報表單
        Route::prefix('forms')->group(function ()
        {
            //一般填寫
            Route::view('/normal', 'covid.frontend.forms.public.basicform')->name('basicform');
            //一般填寫(KSHS)
            Route::view('/normal/kskg', 'covid.frontend.forms.public.basicform-kshs');
            //一般填寫query識別證
            Route::view('/normal/query', 'covid.frontend.forms.public.query-card')->name('query');
            //一般填寫識別證畫面
            Route::view('/normal/auth', 'covid.frontend.forms.public.auth-card');
            //入口刷入身分證
            Route::view('/id-card', 'covid.frontend.forms.manage.idcard')->name('live.id');
            //入口刷入學生證
            Route::view('/stu-card', 'covid.frontend.forms.manage.stucard')->name('live.stu');
            //入口刷入識別證
            Route::view('/auth-card', 'covid.frontend.forms.manage.auth-card')->name('live.authcard');
            //入口掃入QR ID
            Route::view('/scan', 'covid.frontend.forms.manage.scan-stucard')->name('live.scan');
            //入口掃入QR ID(KSHS)
            Route::view('/scan/kskg', 'covid.frontend.forms.manage.scan-stucard-kshs')->name('live.scan.kshs');
            //入口掃入學生證-手機板
            Route::view('/scan/m', 'covid.frontend.forms.manage.scan-stucard-mobile')->name('live.scan.mobile');
        });

        //系統管理
        Route::prefix('setting')->group(function ()
        {
            //活動管理
            Route::view('/events', 'covid.frontend.setting.events')->name('setting.events');
            //功能管理
            Route::view('/function', 'covid.frontend.setting.function')->name('setting.function');
        });

        //帳號管理端
        Route::prefix('dashboard')->group(function ()
        {
            Route::get('/', function () {
                return view('covid.frontend.dashboard.index');
            })->name('dashboard');
            Route::view('/login', 'covid.frontend.dashboard.account.login')->name('login');
            Route::view('/logout', 'covid.frontend.dashboard.account.logout')->name('logout');

            //Manage資料
            Route::prefix('manage')->group(function ()
            {
                //個資修改
                Route::view('/account', 'covid.frontend.dashboard.account.basicdata')->name('account');
                //密碼修改
                Route::view('/password', 'covid.frontend.dashboard.account.pwd')->name('account.pwd');

                //Data
                Route::prefix('data')->group(function ()
                {
                    Route::view('/', 'covid.frontend.dashboard.manage.total')->name('data.manage');
                    Route::view('/edit', 'covid.frontend.dashboard.manage.edit');
                    Route::view('/export', 'covid.frontend.dashboard.manage.export')->name('data.export');
                    Route::view('/import', 'covid.frontend.dashboard.manage.import')->name('data.import');
                });
            });
        });

        //Backend
        Route::prefix('backend/post')->group(function ()
        {
            Route::view('/database', 'covid.backend.test.database');
            
            //修改個人資料
            Route::post('/account', function () {
                return view('covid.backend.sql.account.update');
            })->name('post.account');
            
            //表單SQL位置
            Route::prefix('forms')->group(function ()
            {
                //一般填報
                Route::post('/normal', function () {
                    return view('covid.backend.sql.forms.input_normal');
                })->name('post.form.normal');
                //一般填報識別證查詢
                Route::post('/normal/query', function () {
                    return view('covid.backend.sql.forms.input_normal');
                })->name('post.form.normal.query');
                //現場刷入身分證
                Route::post('/id-card', function () {
                    return view('covid.backend.sql.forms.input_id-card');
                })->name('post.form.id-card');
                //現場刷入識別證
                Route::post('/auth-card', function () {
                    return view('covid.backend.sql.forms.input_id-card');
                })->name('post.form.auth-card');
                //現場刷入學生證
                Route::post('/stu-card', function () {
                    return view('covid.backend.sql.forms.input_stu-card');
                })->name('post.form.stu-card');
            });
        });

        //API
        Route::prefix('api')->group(function ()
        {
            Route::view('/bc', 'covid.frontend.api.bc39')->name('bc');
        });
    });
});

// Route::middleware(['member'])->group(function () {
//     Route::get('member_center', function () {
//         // 經過member middleware驗證後才能進入
//     });
// });