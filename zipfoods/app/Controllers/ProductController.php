<?php
namespace App\Controllers;

class ProductController extends Controller
{
    private $products; 

    public function __construct($app)
    {
        parent::__construct($app);
    }

     public function index() #gettting data  from the database
     {
         $products = $this->app->db()->all('products');

         return $this->app->view('products.index', [
         'products' => $this->app->db()->all('products')

         ]);
     }

     public function show()
     {
        $id = $this->app->param('id');

        $product = $this->app->db()->findById('products', $id);
        if(is_null($product))
        {
            return $this->app->view('errors.404');
        }

        #Load the review details
        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $id);

        $confirmationName = $this->app->old('confirmationName');
        
        return $this->app->view('products.show', [
        'product' => $product,
        'reviews' => $reviews,
        'confirmationName' => $confirmationName,
        ]);

     }

     public function saveReview()
     {
        $this->app->validate([
        'name' => 'required',
        'content' => 'required|minLength:200', # Note how multiple validation rules are separated by a |
        ]);

        $name = $this->app->input('name');
        $content = $this->app->input('content');
        $id = $this->app->input('id');
        
        #Insert into the data

        $data = [
            'name' => $name,
            'content' => $content,
            'product_id' => $id,
        ];

        $this->app->db()->insert('reviews', $data);

        $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);

     }

} 