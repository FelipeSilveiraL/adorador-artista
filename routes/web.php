<?php

use App\Http\Controllers\portal\controllerPortal;
use Illuminate\Support\Facades\Route;

#PORTAL

//GET
Route::get('/', [controllerPortal::class,'index'])->name('PortalIndex');
