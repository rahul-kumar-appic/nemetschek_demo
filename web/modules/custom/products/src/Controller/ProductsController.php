<?php

namespace Drupal\products\Controller;
use Drupal\views\Views;
use Drupal\commerce_product\Entity\Product;
use Drupal\commerce_store\Entity\Store;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for Products pages.
 */
class ProductsController extends ControllerBase {

  /**
   * Displays the Bluebeam product page.
   */
  public function bluebeam() {

     $products = $this->loadProducts();

     
    $data =  [
      '#theme' => 'products_bluebeam',
      '#banner' => [
        'title' => 'Bluebeam',
        'subtitle' => 'MORE COLLABORATION. LESS PAPER.',
        'description' => 'Empowering individuals to transform the way the world is built, offering an industry-leading solution for PDF markups, streamlined digital workflows, and real-time project collaboration.',
        'cta_text' => 'Buy Now',
        'cta_url' => '#',
        'image' => '/drupal/web/modules/custom/products/assets/bluebeam_banner.png',
      ],
      '#content' => [
        'description' => 'Bluebeam, custom-built for AECO project needs across all disciplines and phases, empowers teams to digitally mark up and collaborate in real time from anywhere. Since 2002, Bluebeam has set the standard for collaboration and workflow efficiency for architecture, engineering, construction and operations (AECO) professionals worldwide.',
        'stats' => 'Over 2.5 million builders in over 160 countries trust Bluebeam to help them get more done in less time. Bluebeam\'s desktop, mobile and cloud-based solutions improve communication, automate time-consuming tasks, leverage project data to provide critical accountability, and enable team members to collaborate digitally in real time from anywhere in the world.',
        'video_title' => 'What is Bluebeam?',
        'video_thumbnail' => '/drupal/web/modules/custom/products/assets/WhatISBlueBeam.png',

      ],
        
    '#products' => $products,
      '#attached' => [
        'library' => [
          'products/products-styles',
        ],
      ],
    ];

    return $data;
  }

private function loadProducts() {
  $product_storage = \Drupal::entityTypeManager()->getStorage('commerce_product');
  $product_ids = $product_storage->getQuery()->accessCheck(TRUE) 
    ->condition('status', 1)
    ->execute();
$products = $product_storage->loadMultiple($product_ids);

$formatted_products = [];
foreach ($products as $product) {
  
  // Get price from variation
  $title = $product->getTitle();
  $plan_type = $product->get('field_plan_type')->value ?? 'N/A';
  $features = $product->get('field_features')->value ?? 'N/A';
  $price = $product->get('field_price')->value ?? 'N/A';
  $description = $product->get('field_description')->value ?? 'N/A';
  $features = $product->get('field_features')->value ?? 'N/A';
  
  $formatted_products[] = [
    'name' => $title,
    'plan_type' => $plan_type,
    'features' => $features,
    'price' => $price,
    'description' => $description,
  ];
}

  return $formatted_products;
}

}