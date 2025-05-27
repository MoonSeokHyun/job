<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyReviewModel extends Model
{
    protected $table = 'company_reviews';
    protected $primaryKey = 'id';
    protected $allowedFields = ['company_id', 'review', 'rating'];
    protected $useTimestamps = false;

    // 회사 ID에 해당하는 리뷰를 가져오는 함수
    public function getReviewsByCompany($companyId)
    {
        return $this->where('company_id', $companyId)->findAll();
    }

    // 회사 리뷰와 회사 이름을 조인해서 가져오는 함수
    public function getReviewsWithCompanyName($companyId)
    {
        return $this->select('company_reviews.*, company_info.Company Name (Korean), company_info.Company Name (English)')
            ->join('company_info', 'company_info.id = company_reviews.company_id')  // company_info 테이블과 조인
            ->where('company_reviews.company_id', $companyId)
            ->findAll();
    }
}
