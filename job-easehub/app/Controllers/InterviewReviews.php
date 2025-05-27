<?php

namespace App\Controllers;

use App\Models\InterviewReviewModel;
use CodeIgniter\Controller;

class InterviewReviews extends Controller
{
    public function index()
    {
        $interviewReviewModel = new InterviewReviewModel();

        // 전체 기업 면접 리뷰 가져오기
        $interviewReviews = $interviewReviewModel->getAllInterviewReviewsWithCompanyName();

        // 뷰에 데이터 전달
        return view('interview_reviews/index', [
            'interviewReviews' => $interviewReviews
        ]);
    }
}
