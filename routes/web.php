<?php

use App\Http\Controllers\portal\controllerPortal;
use Illuminate\Support\Facades\Route;

#PORTAL

//GET
Route::get('/', [controllerPortal::class,'index'])->name('PortalIndex');
Route::get('blog', [controllerPortal::class, 'blog'])->name('PortalBlog');
Route::get('blog-details/{id}', [controllerPortal::class, 'blogDetails'])->name('PortalBlogDetails');


#PORTAL - ADMIN
Route::get('blog/admin', [controllerPortal::class, 'blogAdm']);
Route::get('blog-details/{id}/admin', [controllerPortal::class, 'blogDetailsAdmin']);
Route::get('/admin', [controllerPortal::class, 'admin']);

#PESQUISAR
Route::post('pesquisar', [controllerPortal::class, 'pesquisar']);

#LOGIN

//GET
Route::get('logout', [controllerPortal::class, 'logout']);

//POST
Route::post('login', [controllerPortal::class, 'login']);

