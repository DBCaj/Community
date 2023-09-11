<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MonitoringController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryBuilderController;


//temporary query builder
Route::get('/q', [QueryBuilderController::class, 'temporaryQuery'])->name('temporary.query.builder');



////////////////////////// login, logout - start //////////////////////////
Route::controller(AuthController::class)->group(function() {
    Route::get('/', 'login')->name('login.form');
    Route::post('/login-auth', 'loginAuth')->name('login.auth');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/register', 'create')->name('register.form');
    Route::post('/register-auth', 'registerAuth')->name('register.auth');
});
////////////////////////// login, logout - end //////////////////////////



////////////////////////// for registered users only - start //////////////////////////
Route::middleware('custom_auth')->group(function() {
    //dashboard
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    //user-management - Show Records
    Route::get('/show-rec', [UserController::class, 'showRecords'])->name('user-information');;

    //user-management - Delete User Records
    Route::get('/delete-rec/{useracc}', [UserController::class, 'destroy'])->name('rec.destroy');
    
    //user-management - Delete Department Records
    Route::get('/delete-dept-rec/{dept}', [DepartmentController::class, 'destroy'])->name('department_rec.destroy');

    //user-management - Edit User Record 
    Route::get('/edit/{useracc}', [UserController::class, 'edit'])->name('edit.form');
    Route::post('/edit-auth', [UserController::class, 'editAuth'])->name('edit.auth');
    
    //user-management - Edit Department Record 
    Route::post('/edit-department-auth/{dept}', [DepartmentController::class, 'editDepartmentAuth'])->name('edit_department.auth');

    ///user-management - create records
    Route::get('/user-management/user-information/create', [UserController::class,'addUserForm'])->name('user-information-create');

    // Create Account Auth
    Route::post('/add-auth', [UserController::class, 'userAccount'])->name('add.userAccount');

    //roles
    Route::get('/user-management/roles', [RoleController::class, 'rolesPage'])->name('roles');

    //department
    Route::get('pages/user-management/department', [UserController::class, 'departmentsPage'])->name('department');
    // Route::get('/user-management/department', [UserController::class, 'departmentsPage'])->name('department');
    
    //store department
    Route::post('/department-auth', [UserController::class, 'saveDepartment'])->name('department.save');

    //monitoring page
    Route::get('/user-management/monitoring', [MonitoringController::class, 'monitoring'])->name('user-management-monitoring');

    //user-management
    Route::view('/supporting-system/user-information', 'pages/supporting-system/user-information/index')->name('support-user-information');
    Route::view('/supporting-system/user-information/create', 'pages/supporting-system/user-information/create')->name('support-user-information-create');
    Route::view('/supporting-system/roles', 'pages/supporting-system/roles/index')->name('support-roles');
    Route::view('/supporting-system/department', 'pages/supporting-system/department/index')->name('support-department');
    Route::view('/supporting-system/monitoring', 'pages/supporting-system/monitoring/index')->name('support-user-management-monitoring');

    // //seller-management
    // Route::view('/seller-management/seller-account', 'pages/seller-management/seller-account/index')->name('seller-account');
    // Route::view('/seller-management/seller-account/create', 'pages/seller-management/seller-account/create')->name('seller-account-create');
    // Route::view('/seller-management/monitoring', 'pages/seller-management/monitoring/index')->name('seller-management-monitoring');

    //seller-management
    Route::view('/branch-management/branch-user', 'pages/branch-management/branch-user/index')->name('branch-user');
    Route::view('/branch-management/branch-user/create', 'pages/branch-management/branch-user/create')->name('branch-user-create');
    Route::view('/branch-management/branch', 'pages/branch-management/branch/index')->name('branch');
    Route::view('/branch-management/branch/create', 'pages/branch-management/branch/create')->name('branch-create');
    Route::view('/branch-management/monitoring', 'pages/branch-management/monitoring/index')->name('branch-management-monitoring');

    //buyer-management
    Route::view('/buyer-management/buyer-account', 'pages/buyer-management/buyer-account/index')->name('buyer-account');
    Route::view('/buyer-management/buyer-account/create', 'pages/buyer-management/buyer-account/create')->name('buyer-account-create');
    Route::view('/buyer-management/monitoring', 'pages/buyer-management/monitoring/index')->name('buyer-management-monitoring');

    //----------------------------- inventory-management - start ------------------------------------
    //product
    Route::view('/inventory-management/product', 'pages/inventory-management/product/index')->name('product');
    Route::view('/inventory-management/product/create', 'pages/inventory-management/product/create')->name('product-create');

    //categories-settings
    Route::view('/inventory-management/categories-settings/categories', 'pages/inventory-management/categories-settings/categories/index')->name('categories');

    //categories-settings
    Route::view('/inventory-management/categories-settings/subcategories', 'pages/inventory-management/categories-settings/subcategories/index')->name('subcategories');


    //----------------------------- inventory-management - end -------------------------------------

    //----------------------------- Sales and Promo - start ------------------------------------
    //sale
    Route::view('/sales-and-promo/sale', 'pages/sales-and-promo/sale/index')->name('sale');

    //package-discount
    Route::view('/sales-and-promo/package-discount', 'pages/sales-and-promo/package-discount/index')->name('package');

    //package-discount
    Route::view('/sales-and-promo/delivery-discount', 'pages/sales-and-promo/delivery-discount/index')->name('delivery');

    //voucher
    Route::view('/sales-and-promo/voucher', 'pages/sales-and-promo/voucher/index')->name('voucher');

    //voucher
    Route::view('/sales-and-promo/buyxgety', 'pages/sales-and-promo/buyxgety/index')->name('buyxgety');

    //----------------------------- Sales and Promo - end ------------------------------------


    //Courier Management
    Route::view('/courier-management/couriers/company', 'pages/courier-management/company/index')->name('company');
    Route::view('/courier-management/couriers/company/create', 'pages/courier-management/company/create')->name('company-create');
    Route::view('/courier-management/couriers/driver', 'pages/courier-management/driver/index')->name('driver');
    Route::view('/courier-management/couriers/driver/create', 'pages/courier-management/driver/create')->name('driver-create');

    //----------------------------- Order Management - Start ------------------------------------
    //Orders
    Route::view('/order-management/orders', 'pages/order-management/orders/index')->name('orders');


    //----------------------------- Order Management - End ------------------------------------


    //Billing
    Route::view('/billing-management/seller-payouts', 'pages/billing-management/seller-payouts/index')->name('seller-payouts');
    Route::view('/billing-management/logistic-payouts', 'pages/billing-management/logistic-payouts/index')->name('logistic-payouts');


    //----------------------------- System Management - Start ------------------------------------
    //Fees-Management
    Route::view('/system-management/fees-management/membership', 'pages/system-management/fees-management/membership/index')->name('membership');
    Route::view('/system-management/fees-management/commission', 'pages/system-management/fees-management/commission/index')->name('commission');

    //Announcement
    Route::view('/system-management/announcements', 'pages/system-management/announcements/index')->name('announcements');

    //User-Performance
    Route::view('/system-management/user-performance/buyer', 'pages/system-management/user-performance/buyer/index')->name('buyer-performance');
    Route::view('/system-management/user-performance/seller', 'pages/system-management/user-performance/seller/index')->name('seller-performance');

    //Product-Performance
    Route::view('/system-management/product-performance/inquiries', 'pages/system-management/product-performance/inquiries/index')->name('product-inquiries');
    Route::view('/system-management/product-performance/reviews', 'pages/system-management/product-performance/reviews/index')->name('product-reviews');

    //Messages
    Route::view('/system-management/messages/buyer', 'pages/system-management/messages/buyer/index')->name('buyer-messages');
    Route::view('/system-management/messages/seller', 'pages/system-management/messages/seller/index')->name('seller-messages');

    //Delivery Type
    Route::view('/system-management/delivery-type', 'pages/system-management/delivery-type/index')->name('delivery-type');

    //----------------------------- System Management - End ------------------------------------


    //pabili service
    Route::view('/pabili-service', 'pages/pabili-service/index')->name('pabili-service');
    Route::view('/pabili-service/create', 'pages/pabili-service/create')->name('pabili-service-create');

    //inquiry
    Route::view('/inquiry', 'pages/inquiry/index')->name('inquiry');

    //settings
    Route::view('/settings', 'pages/settings/index')->name('settings');

});

////////////////////////// for registered users only - end //////////////////////////