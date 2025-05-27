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
    protected $useTimestamps = false; // Set to true if you want automatic timestamps for created_at/updated_at
}
