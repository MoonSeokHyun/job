<?php

namespace App\Controllers;

use App\Models\BusinessInfoModel;

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
        $data['business'] = $model->find($id);

        if (!$data['business']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Business with ID $id not found");
        }

        return view('business/detail', $data);
    }
}
