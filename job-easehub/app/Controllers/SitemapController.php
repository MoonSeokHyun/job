<?php

namespace App\Controllers;

use App\Models\CompanyModel;
use CodeIgniter\Controller;

class SitemapController extends Controller
{
    // 한 페이지당 10000개 항목씩 처리
    protected $perPage = 10000;

    // 사이트맵 인덱스 페이지
    public function index()
    {
        helper('url');
        $xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
        $xml .= "<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

        $companyModel = new CompanyModel();
        $total = $companyModel->countAllCompanies();  // 전체 기업 개수
        $pages = (int) ceil($total / $this->perPage);  // 페이지 수 계산

        for ($i = 1; $i <= $pages; $i++) {
            $loc  = base_url("sitemap/generate/{$i}");
            $xml .= "  <sitemap>\n";
            $xml .= "    <loc>{$loc}</loc>\n";
            $xml .= "    <lastmod>" . date('Y-m-d') . "</lastmod>\n";
            $xml .= "  </sitemap>\n";
        }

        $xml .= "</sitemapindex>";

        return $this->response
                    ->setHeader('Content-Type', 'application/xml; charset=utf-8')
                    ->setBody($xml);
    }

    // 개별 사이트맵 생성
    public function generate($pageNumber = 1)
    {
        helper('url');
        $companyModel = new CompanyModel();

        // 페이지에 해당하는 기업 데이터 가져오기
        $offset = ($pageNumber - 1) * $this->perPage;
        $companies = $companyModel->getCompaniesForSitemap($this->perPage, $offset);

        $xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
        $xml .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

        foreach ($companies as $company) {
            $url = base_url("company/{$company['id']}");  // 기업 상세 페이지 URL

            $xml .= "  <url>\n";
            $xml .= "    <loc>{$url}</loc>\n";
            $xml .= "    <lastmod>" . date('Y-m-d', strtotime($company['Date of Publication'])) . "</lastmod>\n";
            $xml .= "    <changefreq>monthly</changefreq>\n";  // 변경 빈도
            $xml .= "    <priority>0.8</priority>\n";  // 우선순위
            $xml .= "  </url>\n";
        }

        $xml .= "</urlset>";

        return $this->response
                    ->setHeader('Content-Type', 'application/xml; charset=utf-8')
                    ->setBody($xml);
    }
}
