<?php

namespace Drupal\bim_landing\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;

/**
 * Provides a 'Knowledge Center' Block.
 *
 * @Block(
 *   id = "knowledge_center_block",
 *   admin_label = @Translation("Knowledge Center Block"),
 *   category = @Translation("Custom"),
 * )
 */
class KnowledgeCenterBlock extends BlockBase implements BlockPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Sample data - replace with your actual data source
    $tutorials = [
      [
        'id' => 1,
        'title' => 'Introduction to Vectorworks - Setting the stage',
        'company' => 'VECTORWORKS',
        'type' => 'Tutorial',
        'duration' => '6 min',
        'thumbnail' => '/modules/custom/bim_landing/assets/tutotial_thumbnail-3.png',
        'video_url' => '#',
        'tutorial_url' => '/tutorial/vectorworks-introduction',
      ],
      [
        'id' => 2,
        'title' => 'Learn to model, document and visualize design in Graphisoft.',
        'company' => 'GRAPHISOFT',
        'type' => 'Tutorial',
        'duration' => '3 min',
        'thumbnail' => '/modules/custom/bim_landing/assets/tutotial_thumbnail-2.png',
        'video_url' => '#',
        'tutorial_url' => '/tutorial/graphisoft-modeling',
      ],
      [
        'id' => 3,
        'title' => 'Learn the essential skills you need to confidently use Bluebeam',
        'company' => 'BLUEBEAM',
        'type' => 'Tutorial',
        'duration' => '8 min',
        'thumbnail' => '/modules/custom/bim_landing/assets/tutotial_thumbnail-1.png',
        'video_url' => '#',
        'tutorial_url' => '/tutorial/bluebeam-essentials',
      ],
    ];

    return [
      '#theme' => 'knowledge_center_block',
      '#tutorials' => $tutorials,
      '#attached' => [
        'library' => [
          'bim_landing/bim-landing-page',
        ],
      ],
    ];
  }
}