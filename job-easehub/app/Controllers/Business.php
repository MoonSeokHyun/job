<?php

namespace App\Controllers;

use App\Models\BusinessInfoModel;
use App\Models\NaverApiModel;

class Business extends BaseController
{
    public function index()
    {
        $model = new BusinessInfoModel();
        $data['businesses'] = $model->paginate(12);
        $data['pager'] = $model->pager;

        return view('business/index', $data);
    }

    public function detail($id)
    {
        $model = new BusinessInfoModel();
        $naverModel = new NaverApiModel();
        $data['business'] = $model->find($id);
        
        if (!$data['business']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Business with ID $id not found");
        }
        
        $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
        $isBot = preg_match('/(bot|crawl|slurp|spider|mediapartners|daum)/i', $userAgent);
        
        if (!$isBot && !empty($data['business'])) {
            $name = $data['business']['business_name'] ?? '';
            $type = $data['business']['business_type'] ?? '';
        
            // 검색어 조합
            $query = trim($name . ' ' . $type);
        
            if ($query) {
                // 블로그 후기 가져오기
                $blogResponse = $naverModel->blog($query);
                if ($blogResponse) {
                    $data['blog'] = json_decode($blogResponse, true);
                }
        
                // 이미지 썸네일 가져오기
                $imageResponse = $naverModel->image($query);
                if ($imageResponse) {
                    $data['images'] = json_decode($imageResponse, true);
                }
            }
        }
        

        return view('business/detail', $data);
    }
}
