<?php

namespace App\Services\Doorway\Http\Controllers;

use Lucid\Units\Controller;

use App\Services\Doorway\Features\Api\CreateGatePassFeature;
use App\Services\Doorway\Features\Api\VisitListFeature;
use App\Services\Doorway\Features\Api\ApproveVisitFeature;


class ApiController extends Controller
{
    public function create_gate_pass()
    {
      return $this->serve(CreateGatePassFeature::class);
    }
    public function visit_list()
    {
      return $this->serve(VisitListFeature::class);
    }
    public function approve_visit()
    {
      return $this->serve(ApproveVisitFeature::class);
    }
}
