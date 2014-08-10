<?php

defined('EXAMPLE') or die('Access denied');

/**
 * Description of body
 */
class Main extends Controller
{

    public function __construct($registry)
    {
        parent::__construct($registry);
        
        $this->load->model('products');
        
        $this->load->model('discount');
        
        $this->load->model('order');
    }

    /**
     * Точка входа и главный обработчик
     * @return void
     */
    public function index()
    {
        $this->data['title'] = 'Решение 4 вопроса';
        
        $this->data['base'] = $_SERVER['SERVER_NAME'];
        
        $this->data['products'] = $this->model_products->getProducts();
        
        if (($this->request->server['REQUEST_METHOD'] == 'POST'))
        {

            $product_data = $this->model_products->getProduct($this->request->post['product_id']);
            
            $this->model_order->push($product_data);

            header('Location: /');
            exit;
        }
        
        $this->data['cart'] = $this->model_discount->calculator();
        
        $this->template = 'main.tpl';
        print $this->render();
    }

}
