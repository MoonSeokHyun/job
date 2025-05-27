<?php

namespace Config;

use App\Controllers\CompanyController;

// Default route to show the list of companies
$routes->get('/', [CompanyController::class, 'index']);

// Route for search functionality
$routes->get('/search', [CompanyController::class, 'search']);
$routes->get('/company/(:num)', [CompanyController::class, 'detail']);  // 기업 상세 페이지
$routes->post('/company/(:num)/addCompanyReview', [CompanyController::class, 'addCompanyReview']);
$routes->post('/company/(:num)/addInterviewReview', [CompanyController::class, 'addInterviewReview']);
$routes->get('/company_reviews/index', 'CompanyReviews::index');
$routes->get('/interview_reviews/index', 'InterviewReviews::index');


