<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model
{
    protected $table = 'company_info';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'Company Serial Number',
        'Company Name (Korean)',
        'Company Name (English)',
        'One-liner Description',
        'Detailed Company Description',
        'Establishment Date',
        'Number of Employees',
        'Total Investment Amount',
        'Website URL',
        'Social Media URL',
        'Number of Recommendations',
        'Recommendation Details',
        'Industry Classification',
        'Office Address',
        'Technology Stack',
        'Issuer Name',
        'Date of Publication',
        'News Title',
        'News URL'
    ];
    protected $useTimestamps = false;

    // 전체 기업 수 가져오기
    public function countAllCompanies()
    {
        return $this->countAllResults();
    }

    // 10000개씩 기업 정보 가져오기
    public function getCompaniesForSitemap($limit, $offset)
    {
        return $this->orderBy('id', 'ASC')
                    ->findAll($limit, $offset);
    }
}
