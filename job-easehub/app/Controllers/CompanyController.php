<?php

namespace App\Controllers;

use App\Models\CompanyModel;
use App\Models\CompanyReviewModel;
use App\Models\InterviewReviewModel;
use App\Models\NaverApiModel;

class CompanyController extends BaseController
{
    public function index()
    {
        // 모델 로드
        $companyModel = new CompanyModel();

        // 데이터베이스에서 12개 기업만 가져오기
        $companies = $companyModel->limit(12)->findAll();

        // 뷰로 데이터 전달
        return view('company_view', ['companies' => $companies]);
    }

    public function startUp()
    {
        $companyModel = new CompanyModel();
    
        // 페이지네이션 설정
        $perPage = 12;
        $data = [
            'companies' => $companyModel->paginate($perPage),
            'pager' => $companyModel->pager,
        ];
    
        return view('company/startUp', $data);
    }
    

    public function search()
    {
        // 사용자가 입력한 검색어 받기
        $searchQuery = $this->request->getGet('search_query');

        // 검색어가 비어 있는 경우 처리
        if (empty($searchQuery)) {
            return redirect()->to('/')->with('error', '검색어를 입력하세요.');
        }

        // 모델 로드
        $companyModel = new CompanyModel();

        // 공백 및 괄호가 포함된 컬럼명을 백틱(`)으로 감싸서 쿼리 작성
        $companies = $companyModel->like('`Company Name (Korean)`', $searchQuery)
                                  ->orLike('`Company Name (English)`', $searchQuery)
                                  ->findAll();

        // 뷰로 데이터 전달
        return view('company_search_results', ['companies' => $companies, 'searchQuery' => $searchQuery]);
    }

    public function detail($id)
    {
        // 모델 로드
        $companyModel = new CompanyModel();
        $companyReviewModel = new CompanyReviewModel();
        $interviewReviewModel = new InterviewReviewModel();
        $naverModel = new NaverApiModel();

        // 기업 정보 가져오기
        $company = $companyModel->find($id);

        // 기업 리뷰 가져오기
        $companyReviews = $companyReviewModel->getReviewsByCompany($id);

        // 면접 리뷰 가져오기
        $interviewReviews = $interviewReviewModel->getInterviewReviewsByCompany($id);

        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
        $isBot = preg_match('/(bot|crawl|slurp|spider|mediapartners|daum)/i', $userAgent);
        
        if (!$isBot && !empty($company)) {
            $name = $company['Company Name (Korean)'] ?? '';
        
            // 검색어 조합
            $query = trim($name . ' 기업정보');
        
            if ($query) {
                // 블로그 후기 가져오기
                $blogResponse = $naverModel->blog($query);
                if ($blogResponse) {
                    $blog = json_decode($blogResponse, true);
                }
        
                // 이미지 썸네일 가져오기
                $imageResponse = $naverModel->image($query);
                if ($imageResponse) {
                    $images = json_decode($imageResponse, true);
                }
            }
        }

        // 뷰로 데이터 전달
        return view('company_detail', [
            'company' => $company,
            'companyReviews' => $companyReviews,
            'interviewReviews' => $interviewReviews,
            'blog' => $blog,
            'images' => $images
        ]);
    }

    public function addCompanyReview($id)
    {
        // 폼 데이터 받기
        $review = $this->request->getPost('review');
        $rating = $this->request->getPost('rating');

        // 리뷰 모델 로드
        $companyReviewModel = new CompanyReviewModel();

        // 리뷰 추가
        $companyReviewModel->save([
            'company_id' => $id,
            'review' => $review,
            'rating' => $rating
        ]);

        // 디테일 페이지로 리다이렉트
        return redirect()->to('/company/' . $id);
    }

    public function addInterviewReview($id)
    {
        // 폼 데이터 받기
        $review = $this->request->getPost('review');
        $rating = $this->request->getPost('rating');
        $reviewType = $this->request->getPost('review_type');

        // 면접 리뷰 모델 로드
        $interviewReviewModel = new InterviewReviewModel();

        // 면접 리뷰 추가
        $interviewReviewModel->save([
            'company_id' => $id,
            'review' => $review,
            'rating' => $rating,
            'review_type' => $reviewType
        ]);

        // 디테일 페이지로 리다이렉트
        return redirect()->to('/company/' . $id);
    }
}
