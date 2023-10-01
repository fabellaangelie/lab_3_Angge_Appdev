<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class AdminController extends BaseController
{
  protected $productModel;

      public function __construct()
      {
          $this->productModel = new ProductModel(); // Replace with your actual model name
      }

      public function adminIndex()
      {
          // Load your view for creating products
          return view('admin/insert'); // Assuming your view file is named 'insert.php'
      }

      public function insert()
      {
          // Retrieve data from your form
          $data = [
              'prodname' => $this->request->getPost('prodname'),
              'prodDescrip' => $this->request->getPost('prodDescrip'),
              'image' => $this->request->getPost('image'),
              'prodPrice' => $this->request->getPost('prodPrice'),
              'quantity' => $this->request->getPost('quantity'),
          ];

          // Insert the data into the database
          $this->productModel->insert($data);

          // Redirect to the product list page or display a success message
          return redirect()->to('admin')->with('success', 'Product created successfully');
      }

      
}
