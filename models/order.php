<?php

defined('EXAMPLE') or die('Access denied');

class ModelOrder extends Model
{

    /**
     * Добавление продукта в корзину
     * @param array $data Продукт
     */
    public function push($data)
    {
        $product = isset($this->request->cookie['products']) ? unserialize(html_entity_decode($this->request->cookie['products'])) : array();
        
        if (isset($product[$data['name']])){
            $product[$data['name']]['price'] = $data['price'];
            $product[$data['name']]['count'] += 1;
        }else{
            $product[$data['name']] = array(
                'price' => $data['price'],
                'count' => 1
            );
        }
        
        setcookie('products', serialize($product), time() + 2678400);
    }

    public function cart()
    {

        $product = isset($this->request->cookie['products']) ? unserialize(html_entity_decode($this->request->cookie['products'])) : FALSE;

        
        return $product;
    }

}
