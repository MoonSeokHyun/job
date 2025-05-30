<?php

namespace App\Controllers;

class EventController extends BaseController
{
    public function index()
    {
        $events = [
            [
                'id' => 1,
                'title' => '잡허브 사이트 홍보 이벤트',
                'description' => '블로그, 지식인 등지에 잡허브를 홍보하고 기프티콘 받아가세요!',
                'image' => '/img/event1.jpg'
            ],
            [
                'id' => 2,
                'title' => '기업/면접 리뷰 이벤트',
                'description' => '기업 리뷰 또는 면접 리뷰를 작성하면 추첨을 통해 기프티콘 증정!',
                'image' => '/img/event2.jpg'
            ]
        ];

        return view('event/index', ['events' => $events]);
    }

    public function detail($id)
    {
        if (!in_array($id, [1, 2])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view("event/detail{$id}");
    }
}
