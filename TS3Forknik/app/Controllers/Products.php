<?php
namespace App\Controllers;

class Products extends BaseController{
    public function index(){
        // Load the model
        $usersmodel = model('Products_model');

        // Retrieve the data from the table
        $data['products'] = $usersmodel->get()->getResult();
        // $this->dd($data['users']);

        $data['title'] = "List of Products";

        return view('include\header', $data)
            .view('include\navbar')
            .view('products_view', $data)
            .view('include\footer');
    }

    public function add(){
        if($this->request->is('POST')){
            // Load model
            $productsmodel = model('Products_model');

            // Retrieve data from form
            $productaddData = $this->request->getPost([
                'barcode',
                'productname',
                'description',
                'unit',
                'purchaseprice',
                'deliverydate',
                'supplier'
            ]);

            // Insert data to the table
            $productsmodel->insert($productaddData);

            // Redirect to the users list page
            return redirect()->to('products');
        }


        $data['title'] = "Add New Product";

        return view('include\header', $data)
            .view('include\navbar')
            .view('productadd_view')
            .view('include\footer');
    }

    public function view($id = 0){
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('index/login');
        }
        // Load the model
        $productsmodel = model('Products_model');

        // Retrieve the data from the table
        $data['product'] = $productsmodel->where('id', $id)->first();


        $data['title'] = "View Product";

        return view('include\header', $data)
            .view('include\navbar')
            .view('product_view', $data)
            .view('include\footer');
    }

    public function edit($id = 0){
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('index/login');
        }
        $productsmodel = model('Products_model');

        if($this->request->is('POST')){
            // Retrieve data from form
            $updatedata = $this->request->getPost([
                'barcode',
                'productname',
                'description',
                'unit',
                'purchaseprice',
                'deliverydate',
                'supplier'
            ]);

            // Update data in the table
            $productsmodel->update($id, $updatedata);

            // Redirect to the products list page
            return redirect()->to('products');
        }

        // Retrieve the data from the table
        $data['product'] = $productsmodel->where('id', $id)->first();
        $data['title'] = "Edit Product";

        return view('include\header', $data)
            .view('include\navbar')
            .view('productedit_view', $data)
            .view('include\footer');
    }

    public function delete($id = 0){
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('index/login');
        }

        $productsmodel = model('Products_model');
        $productsmodel->delete($id);
        return redirect()->to('products');
    }
}

?>