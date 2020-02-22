<?php

namespace App\Http\Controllers;

use App\Services\ProductManager;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Http\Resources\ProductResource;
use App\Http\Resources\PaginateResource;
use App\Services\Interfaces\IProductManager;

class ProductController extends Controller
{

    use ApiResponser;
    private $produproductManager;

    public function __construct(IProductManager $productManager){
      $this->productManager=$productManager;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $response;
      $result= $this->productManager->listProduct();

      switch ($result->getStatus()) {
        case 'SUCCESS':
          $response= $this->successResponse(
              new PaginateResource($result->getData('products')),
              //new ProductResource($result->getData('products')),
              $result->getAllMessage(),
              $result->getCode(),
              'list of products'
          );
          break;
        case 'EMPTY' :

          $response= $this->successResponse(
              [],
              $result->getAllMessage(),
              $result->getCode(),
              'empty list of products'
          );
          break;

        default:

          $response= $this->errorResponse(
              $result->getAllError(),
              $result->getAllMessage(),
              $result->getCode(),
              'exist conflict whit the request, please check the errors and messages'
          );
          break;
      }
      return $response;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $response;
      $result= $this->productManager->registerProduct($request->all());

      switch ($result->getStatus()) {
        case 'SUCCESS':
          $response= $this->successResponse(
              [new ProductResource($result->getData('product'))],
              $result->getAllMessage(),
              $result->getCode(),
              'New product created correctly'
          );
          break;
        default:

          $response= $this->errorResponse(
              $result->getAllError(),
              $result->getAllMessage(),
              $result->getCode(),
              'exist conflict whit the request, please check the errors and messages'
          );
          break;
      }
      return $response;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
