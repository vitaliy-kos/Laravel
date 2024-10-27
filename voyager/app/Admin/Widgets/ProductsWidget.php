<?php
namespace App\Admin\Widgets;

use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;

class ProductsWidget extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $count = Product::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-shop',
            'title' => 'Счетчик товаров',
            'text' => "Количество товаров: $count",
            'button' => [
                'text' => "Перейти к списку",
                'link' => '/admin/products',
            ],
            'image' => ''
        ]));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }
}
