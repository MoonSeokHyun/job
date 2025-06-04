<?php

namespace Config;

use App\Controllers\CompanyController;
use App\Controllers\SitemapController;

$routes->get('/', [CompanyController::class, 'index']);  // 기본 기업 목록 페이지
$routes->get('/search', [CompanyController::class, 'search']);  // 검색 기능
$routes->get('/company/(:num)', [CompanyController::class, 'detail']);  // 기업 상세 페이지
$routes->post('/company/(:num)/addCompanyReview', [CompanyController::class, 'addCompanyReview']);
$routes->post('/company/(:num)/addInterviewReview', [CompanyController::class, 'addInterviewReview']);
$routes->get('/company_reviews/index', 'CompanyReviews::index');
$routes->get('/interview_reviews/index', 'InterviewReviews::index');

// Sitemap 관련 라우팅
$routes->get('sitemap', [SitemapController::class, 'index']);  // 사이트맵 인덱스 페이지
$routes->get('sitemap/generate/(:num)', [SitemapController::class, 'generate']);  // 개별 사이트맵 페이지

// 이벤트

$routes->get('/event', 'EventController::index');
$routes->get('/event/(:num)', 'EventController::detail/$1');

// 회사

$routes->get('business', 'Business::index');
$routes->get('business/detail/(:num)', 'Business::detail/$1');
