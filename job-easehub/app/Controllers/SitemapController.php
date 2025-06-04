<?php

namespace App\Controllers;

use App\Models\CompanyModel;
use App\Models\BusinessInfoModel;
use CodeIgniter\Controller;

class SitemapController extends Controller
{
    protected $perPage = 10000;

    // 사이트맵 인덱스 페이지 (기업 + 사업체)
    public function index()
    {
        helper('url');

        $xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
        $xml .= "<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

        // CompanyModel 처리
        $companyModel = new CompanyModel();
        $totalCompanies = $companyModel->countAllCompanies();
        $companyPages = (int) ceil($totalCompanies / $this->perPage);

        for ($i = 1; $i <= $companyPages; $i++) {
            $loc  = base_url("sitemap/generate/company/{$i}");
            $xml .= "  <sitemap>\n";
            $xml .= "    <loc>{$loc}</loc>\n";
            $xml .= "    <lastmod>" . date('Y-m-d') . "</lastmod>\n";
            $xml .= "  </sitemap>\n";
        }

        // BusinessInfoModel 처리
        $businessModel = new BusinessInfoModel();
        $totalBusinesses = $businessModel->countAllBusinesses();
        $businessPages = (int) ceil($totalBusinesses / $this->perPage);

        for ($i = 1; $i <= $businessPages; $i++) {
            $loc  = base_url("sitemap/generate/business/{$i}");
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

    // 개별 사이트맵 생성 (기업 또는 사업체)
    public function generate($type = 'company', $pageNumber = 1)
    {
        helper('url');

        $offset = ($pageNumber - 1) * $this->perPage;

        $xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
        $xml .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

        if ($type === 'company') {
            $model = new CompanyModel();
            $items = $model->getCompaniesForSitemap($this->perPage, $offset);

            foreach ($items as $company) {
                $url = base_url("company/{$company['id']}");

                $lastmod = !empty($company['Date of Publication']) ? date('Y-m-d', strtotime($company['Date of Publication'])) : date('Y-m-d');

                $xml .= "  <url>\n";
                $xml .= "    <loc>{$url}</loc>\n";
                $xml .= "    <lastmod>{$lastmod}</lastmod>\n";
                $xml .= "    <changefreq>monthly</changefreq>\n";
                $xml .= "    <priority>0.8</priority>\n";
                $xml .= "  </url>\n";
            }

        } elseif ($type === 'business') {
            $model = new BusinessInfoModel();
            $items = $model->getBusinessesForSitemap($this->perPage, $offset);

            foreach ($items as $business) {
                // 예를 들어 사업체 상세 페이지 URL이 business/{id}라고 가정
                $url = base_url("business/detail/{$business['id']}");

                // 사업체 테이블에 lastmod 컬럼이 없으면 오늘 날짜로 대체
                $lastmod = date('Y-m-d');

                $xml .= "  <url>\n";
                $xml .= "    <loc>{$url}</loc>\n";
                $xml .= "    <lastmod>{$lastmod}</lastmod>\n";
                $xml .= "    <changefreq>monthly</changefreq>\n";
                $xml .= "    <priority>0.7</priority>\n";
                $xml .= "  </url>\n";
            }
        } else {
            // 타입이 잘못된 경우 빈 XML 반환
        }

        $xml .= "</urlset>";

        return $this->response
                    ->setHeader('Content-Type', 'application/xml; charset=utf-8')
                    ->setBody($xml);
    }
}
