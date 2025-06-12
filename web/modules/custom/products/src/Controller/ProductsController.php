<?php

namespace Drupal\products\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for Products pages.
 */
class ProductsController extends ControllerBase {

  /**
   * Displays the Bluebeam product page.
   */
  public function bluebeam() {
    return [
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
      '#attached' => [
        'library' => [
          'products/products-styles',
        ],
      ],
    ];
  }

}