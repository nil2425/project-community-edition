<?php
 
namespace Assignment3\PluginDevelopment\Plugin;
 
class Cart
{
    // public function beforeAddProduct(\Magento\Checkout\Model\Cart $subject, 
    // $productInfo,
    // $requestInfo=null)
    // {
    //     $requestInfo['qty']=5;
    //     return array($productInfo, $requestInfo);
    // }
    public function afterAddProduct(\Magento\Checkout\Model\Cart $subject, 
    $productInfo,
    $requestInfo=null)
    {
        $requestInfo['price']=$requestInfo['price']+100;
        return array($productInfo, $requestInfo);
    }
}