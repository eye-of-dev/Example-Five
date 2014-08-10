<?php defined('EXAMPLE') or die('Access denied');

class ModelProducts extends Model
{
    
    private $products = ['1' => 'A', '2' => 'B', '3' => 'C', '4' => 'D', '5' => 'E', '6' => 'F', '7' => 'G', '8' => 'H', '9' => 'I', '10' => 'J', '11' => 'K', '12' => 'L', '13' => 'M'];
    private $p_price = ['1' => 100, '2' => 100, '3' => 100, '4' => 100, '5' => 100, '6' => 100, '7' => 100, '8' => 100, '9' => 100, '10' => 100, '11' => 100, '12' => 100, '13' => 100];
    
    /**
     * Получаем все продукты
     * @return array Массив продуктов
     */
    public function getProducts()
    {
        $products = array();
        foreach ($this->products as $key => $product)
        {
            $products[$key]['id'] = $key;
            $products[$key]['name'] = $product;
            $products[$key]['price'] = $this->p_price[$key];
        }
        
        return $products;
    }
    
    /**
     * Получаем продукт
     * @param Идентификатор продукта $product_id
     * @return array Информация о продукте
     */
    public function getProduct($product_id){
        
        $product = array();
        $product['id'] = $product_id;
        $product['name'] = $this->products[$product_id];
        $product['price'] = $this->p_price[$product_id];
        
        return $product;
    }
    
}
