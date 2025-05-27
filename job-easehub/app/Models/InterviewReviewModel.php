<?php

namespace App\Models;

use CodeIgniter\Model;

class InterviewReviewModel extends Model
{
    protected $table = 'interview_reviews';
    protected $primaryKey = 'id';
    protected $allowedFields = ['company_id', 'review_type', 'review', 'rating'];
    protected $useTimestamps = false; // 타임스탬프 자동 관리 비활성화

    // 회사 리뷰와 회사 이름을 조인해서 가져오는 함수
    public function getAllInterviewReviewsWithCompanyName()
    {
        return $this->select('interview_reviews.*, company_info.`Company Name (Korean)`, company_info.`Company Name (English)`')
            ->join('company_info', 'company_info.id = interview_reviews.company_id')  // company_info 테이블과 조인
            ->findAll();
    }
    // 기업 ID에 해당하는 면접 리뷰를 가져오는 기본 함수
    public function getInterviewReviewsByCompany($companyId)
    {
        return $this->where('company_id', $companyId)->findAll();
    }
}
