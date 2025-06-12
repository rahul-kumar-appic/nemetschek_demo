<?php

namespace Drupal\bim_landing\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Cache\CacheableMetadata;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller for BIM Landing page.
 */
class BimLandingController extends ControllerBase {

  /**
   * Builds the main landing page.
   *
   * @return array
   *   Render array for the landing page.
   */
  public function build() {
    // Get configuration
    $config = $this->config('bim_landing.settings');
    
    // Prepare render array
    $build = [
      '#theme' => 'bim_landing_page',
      '#hero_heading' => $config->get('hero_heading') ?: 'INNOVATIVE DESIGN WITH ',
      '#hero_title' => $config->get('hero_title') ?: 'BIM-Architecture',
      '#hero_subtitle' => $config->get('hero_subtitle') ?: 'Elevate your concept design process',
      '#cta_text' => $config->get('cta_text') ?: 'Get a quote',
      '#cta_link' => $config->get('cta_link') ?: '/contact',
      '#intro_text' => $this->getIntroText(),
      '#products' => $this->getProducts(),
      '#architecture' => $this->getArchitecture(),
      '#attached' => [
        'library' => [
          'bim_landing/bim-landing-page',
        ],
        'drupalSettings' => [
          'bimLanding' => [
            'ajaxUrl' => '/drupal/web/solutions/ajax/products',
          ],
        ],
      ],
      
    ];

   // Add cache metadata
    $cache_metadata = new CacheableMetadata();
    $cache_metadata->addCacheContexts(['url.path']);
    $cache_metadata->addCacheTags(['config:bim_landing.settings']);
    $cache_metadata->applyTo($build);

    return $build;
  }

  /**
   * AJAX callback for product tabs.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request object.
   * @param string $series
   *   The product series.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   JSON response with products.
   */
  public function ajaxProducts(Request $request, $series = 'all') {
    try {
      $products = $this->getProducts($series);
      
      return new JsonResponse([
        'success' => TRUE,
        'products' => $products,
        'series' => $series,
      ]);
    } catch (\Exception $e) {
      \Drupal::logger('bim_landing')->error('AJAX Products Error: @message', ['@message' => $e->getMessage()]);
      
      return new JsonResponse([
        'success' => FALSE,
        'error' => 'Failed to load products',
        'message' => $e->getMessage(),
      ]);
      }
  }

  /**
   * Get intro text content.
   *
   * @return array
   *   Array of intro paragraphs.
   */
  private function getIntroText() {
    return [
      'In the rapidly growing Indian AEC industry, staying ahead requires more than just skill—it demands innovation! BIM-Architecture empowers architects to transform ideas into reality at every stage of concept design.',
      'From initial sketches to highly detailed conceptual models, BIM-Architecture helps you create visually compelling, data-rich designs that captivate clients and accelerate approvals. With our intelligent tools, you can enhance efficiency, easy collaboration and improve design accuracy, all while maintaining your creative freedom.',
      'To start transforming your creative ideas, explore our exclusive series of advanced BIM solutions today!',
    ];
  }

  /**
   * Get products data.
   *
   * @param string $series
   *   The product series to filter by.
   *
   * @return array
   *   Array of products.
   */
  private function getProducts($series = 'all') {
    $all_products = [
      'vectorworks' => [
        'name' => 'VECTORWORKS',
        'logo' => '/drupal/web/modules/custom/bim_landing/assets/ve.png',
        'tagline' => 'Push your design boundaries',
        'description' => 'Design and BIM software for architects, landscape architects and professionals.',
        'series' => ['series1', 'series2'],
        'color' => '#4a90e2',
        'link' => '/products/vectorworks',
      ],
      'graphisoft' => [
        'name' => 'GRAPHISOFT',
        'logo' => '/drupal/web/modules/custom/bim_landing/assets/gs.png',
        'tagline' => 'BIM for architects & associates',
        'description' => 'Design, visualize, document, and deliver projects of all sizes efficiently.',
        'series' => ['series1', 'series3'],
        'color' => '#e74c3c',
        'link' => '/products/graphisoft',
      ],
      'bluebeam' => [
        'name' => 'BLUEBEAM',
        'logo' => '/drupal/web/modules/custom/bim_landing/assets/bluebeam.png',
        'tagline' => 'Construction software for innovators',
        'description' => 'Innovative technology solutions that set the standard for digital collaboration.',
        'series' => ['series2', 'series3'],
        'color' => '#3498db',
        'link' => '/products/bluebeam',
      ],
      'iirsa' => [
        'name' => 'IRISA',
        'logo' => '/drupal/web/modules/custom/bim_landing/assets/iiirisa.png',
        'tagline' => 'Where vision becomes structure',
        'description' => 'Solutions and services that allow structural engineers to innovate with confidence.',
        'series' => ['series2', 'series3'],
        'color' => '#3498db',
        'link' => '/products/irsa',
      ],
       'solibri' => [
        'name' => 'SOLIBRI',
        'logo' => '/drupal/web/modules/custom/bim_landing/assets/solibri.png',
        'tagline' => 'Quality assurance for BIM projects',
        'description' => 'Solibri is the leader in BIM quality assurance and quality control.',
        'series' => ['series1', 'series3'],
        'color' => '#3498db',
        'link' => '/products/irsa',
      ],
    ];


    // Filter by series if specified
    if ($series !== 'all') {
      $filtered_products = [];
      foreach ($all_products as $key => $product) {
        if (in_array($series, $product['series'])) {
          $filtered_products[$key] = $product;
        }
      }
      return $filtered_products;
    }

    return $all_products;
  }
    private function getArchitecture() {
    
    // Sample data - replace with actual content from nodes
    $case_studies = [
      [
        'title' => 'Ramboll',
        'description' => 'Streamlined design collaboration for enhanced project coordination.',
        'image_url' => '/drupal/web/modules/custom/bim_landing/assets/case-studies-ramboll.png',
        'link_url' => '/case-study-ramboll',
      ],
      [
        'title' => 'Laing O\'Rourke',
        'description' => 'Improved urban infrastructure by designing adaptive public spaces.',
        'image_url' => '/drupal/web/modules/custom/bim_landing/assets/case-studies-lainge.png',
        'link_url' => '/case-study-lainge',
      ],
      [
        'title' => 'WSP',
        'description' => 'Enhanced environmental sustainability using renewable materials and systems.',
        'image_url' => '/drupal/web/modules/custom/bim_landing/assets/case-studies-wsp.png',
        'link_url' => '/case-study-wsp',
      ],
      [
        'title' => 'COWI',
        'description' => 'Mitigated construction risks through advanced analysis and control.',
        'image_url' => '/drupal/web/modules/custom/architecture_case_studies/images/cowi.jpg',
        'link_url' => '/case-study/cowi',
      ],
      [
        'title' => 'Arup',
        'description' => 'Innovative structural solutions for complex architectural challenges.',
        'image_url' => '/drupal/web/modules/custom/architecture_case_studies/images/arup.jpg',
        'link_url' => '/case-study/arup',
      ],
    ];



    return $case_studies;
  }


  
}

