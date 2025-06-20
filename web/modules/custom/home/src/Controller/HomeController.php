<?php



namespace Drupal\home\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Config\ConfigFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\views\Views;



class HomeController extends ControllerBase {

  protected $configFactory;

  public function __construct(ConfigFactoryInterface $config_factory) {
    $this->configFactory = $config_factory;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory')
    );
  }

  /**
   * Your existing home page method - UPDATE THIS
   */
  public function homeController() {
    // Get banner slides from config
    $banner_config = $this->configFactory->get('home.banner_settings');
    $slides = $banner_config->get('slides') ?: $this->getDefaultSlides();
    $marquee_content = $this->getPartnersMarquee();

    $build = [
      // Add banner to your existing build array
      'banner' => [
        '#theme' => 'home_page',
        '#slides' => $slides,
        '#partners_marquee' => $marquee_content,
        '#attached' => [
          'library' => [
            'home/home-page', // We'll create this library
          ],
        ],
      ],
      
      // Your existing home page content continues here...
      
    ];

    return $build;
  }

  /**
   * New method: Banner display for reuse
   */
  public function getBannerRender() {
    $banner_config = $this->configFactory->get('home.banner_settings');
    $slides = $banner_config->get('slides') ?: $this->getDefaultSlides();

    return [
      '#theme' => 'home_banner_slider',
      '#slides' => $slides,
      '#attached' => [
        'library' => ['home/banner_slider'],
      ],
      '#cache' => [
        'tags' => ['config:home.banner_settings'],
      ],
    ];
  }

  private function getPartnersMarquee() {
  $view = Views::getView('partner_logos_marquee');
  
  if (!$view) {
    \Drupal::logger('your_homepage_module')->warning('Partners marquee view not found');
    return ['#markup' => ''];
  }

  $view->setDisplay('default');
  $view->preExecute();
  $view->execute();
  
  return $view->buildRenderable();
}
  private function getDefaultSlides() {
    return [
      [
        'tagline' => 'EMPOWERING INDIA',
        'title' => 'BEST BIM Solutions',
        'subtitle' => 'A more cost effective and productive alternative',
        'cta_text' => 'Start your Nemetschek journey',
        'cta_url' => '/contact',
        'features' => [
          [
            'title' => 'Leader in BIM-enabled Collaboration',
            'description' => 'Advanced collaboration tools',
          ],
          [
            'title' => 'Powerful Solutions for All Structures',
            'description' => 'Comprehensive BIM solutions',
          ],
          [
            'title' => 'Key Sustainable Design Drivers',
            'description' => 'Environmentally conscious design',
          ],
          [
            'title' => 'Global Community of 7 Million Users',
            'description' => 'Join millions of professionals',
          ],
        ],
      ]
    ];
  }
}