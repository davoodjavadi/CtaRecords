<?php


use davoodjavadi\ctaRecords\Controllers\CtaRecordsController;
use Illuminate\Support\Facades\Route;

Route::post('cta-records', [CtaRecordsController::class,'storeCtaRecords']);
