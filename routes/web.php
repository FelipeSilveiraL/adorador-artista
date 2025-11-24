<?php

use App\Http\Controllers\portal\controllerPortal;
use Illuminate\Support\Facades\Route;

#PORTAL

//GET
Route::get('/', [controllerPortal::class,'index'])->name('PortalIndex');
Route::get('blog', [controllerPortal::class, 'blog'])->name('PortalBlog');
Route::get('blog-details/{id}', [controllerPortal::class, 'blogDetails'])->name('PortalBlogDetails');

//LOGIN

//GET
Route::get('logout', [controllerPortal::class, 'logout']);

//POST
Route::post('login', [controllerPortal::class, 'login']);

