<?php

namespace App\Services;
use App\Traits\ConsumeExternalService;

class AuthorService
{
  use ConsumeExternalService;

  public $baseUrl;
  public $secret;
  public $client_id;

  public function __construct(){
    $this->baseUrl= config('services.productos.base_url');
    $this->secret = config('services.authors.secret');
    $this->client_id = config('services.authors.client_id');

  }


}
