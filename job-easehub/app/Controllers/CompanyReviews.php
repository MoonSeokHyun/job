<?php

namespace App\Controllers;

use App\Models\CompanyReviewModel;
use App\Models\CompanyModel;
use CodeIgniter\Controller;

class CompanyReviews extends Controller
{
    public function index()
    {
        $companyReviewModel = new CompanyReviewModel();
        $companyModel = new CompanyModel();

        // 모든 기업에 대한 리뷰 목록을 가져옵니다
        $reviews = $companyReviewModel->join('company_info', 'company_info.id = company_reviews.company_id')
                                      ->select('company_reviews.*, `company_info`.`Company Name (Korean)`, `company_info`.`Company Name (English)`')
                                      ->findAll();

        // 뷰에 데이터 전달
        return view('company_reviews/index', [
            'reviews' => $reviews
        ]);
    }
}
