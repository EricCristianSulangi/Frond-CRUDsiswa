<?php

namespace App\Http\Libraries;

use Illuminate\Support\Facades\Http;

class BaseApi
{
    protected $baseUrl;

    public Function __construct()
    {
        $this->baseUrl = env('API_HOST');
    }

    private function client()
    {
        return Http::baseUrl($this->baseUrl);
    }

    public function index(string $endpoint /*endpoint url di Controller*/, array $data =[])
    {
        return $this->client()->get($endpoint, $data );
    }

}

?>