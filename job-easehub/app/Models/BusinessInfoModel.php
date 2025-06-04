<?php

namespace App\Models;

use CodeIgniter\Model;

class BusinessInfoModel extends Model
{
    protected $table = 'business_info';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'business_name',
        'zip_code',
        'landlot_address',
        'street_address',
        'business_type',
        'number_of_owners'
    ];

    // 전체 사업체 수 가져오기
    public function countAllBusinesses()
    {
        return $this->countAllResults();
    }

    // 사이트맵용으로 사업체 정보 일정 개수씩 가져오기 (limit, offset)
    public function getBusinessesForSitemap($limit, $offset)
    {
        return $this->orderBy('id', 'ASC')
                    ->findAll($limit, $offset);
    }
}
