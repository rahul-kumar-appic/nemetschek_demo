<?php

namespace Drupal\home\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class HomeBannerConfigForm extends ConfigFormBase {

  protected function getEditableConfigNames() {
    return ['home.banner_settings'];
  }

  public function getFormId() {
    return 'home_banner_config_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('home.banner_settings');

    $form['slides'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Banner Slides'),
      '#tree' => TRUE,
    ];

    // Get existing slides or create default
    $slides = $config->get('slides') ?: $this->getDefaultSlides();
    
    foreach ($slides as $index => $slide) {
      $form['slides'][$index] = [
        '#type' => 'details',
        '#title' => $this->t('Slide @num', ['@num' => $index + 1]),
        '#open' => $index === 0,
      ];

      $form['slides'][$index]['tagline'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Tagline'),
        '#default_value' => $slide['tagline'] ?? '',
        '#size' => 60,
      ];

      $form['slides'][$index]['title'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Main Title'),
        '#default_value' => $slide['title'] ?? '',
        '#required' => TRUE,
        '#size' => 60,
      ];

      $form['slides'][$index]['subtitle'] = [
        '#type' => 'textarea',
        '#title' => $this->t('Subtitle'),
        '#default_value' => $slide['subtitle'] ?? '',
        '#rows' => 2,
      ];

      $form['slides'][$index]['cta_text'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Button Text'),
        '#default_value' => $slide['cta_text'] ?? '',
      ];

      $form['slides'][$index]['cta_url'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Button URL'),
        '#default_value' => $slide['cta_url'] ?? '',
      ];

      $form['slides'][$index]['background_image'] = [
        '#type' => 'managed_file',
        '#title' => $this->t('Background Image'),
        '#default_value' => isset($slide['background_image']) ? [$slide['background_image']] : [],
        '#upload_location' => 'public://banner/',
        '#upload_validators' => [
          'file_validate_extensions' => ['png gif jpg jpeg webp'],
          'file_validate_size' => [5 * 1024 * 1024], // 5MB
        ],
      ];

      // Features for this slide
      $form['slides'][$index]['features'] = [
        '#type' => 'fieldset',
        '#title' => $this->t('Features'),
        '#collapsible' => TRUE,
        '#collapsed' => TRUE,
      ];

      $features = $slide['features'] ?? $this->getDefaultFeatures();
      for ($i = 0; $i < 4; $i++) {
        $form['slides'][$index]['features'][$i] = [
          '#type' => 'fieldset',
          '#title' => $this->t('Feature @num', ['@num' => $i + 1]),
        ];

        $form['slides'][$index]['features'][$i]['title'] = [
          '#type' => 'textfield',
          '#title' => $this->t('Title'),
          '#default_value' => $features[$i]['title'] ?? '',
        ];

        $form['slides'][$index]['features'][$i]['description'] = [
          '#type' => 'textarea',
          '#title' => $this->t('Description'),
          '#default_value' => $features[$i]['description'] ?? '',
          '#rows' => 2,
        ];
      }
    }

    // Add/Remove slide buttons
    $form['actions_slides'] = [
      '#type' => 'actions',
    ];

    $form['actions_slides']['add_slide'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add Another Slide'),
      '#submit' => ['::addSlideSubmit'],
      '#limit_validation_errors' => [],
    ];

    if (count($slides) > 1) {
      $form['actions_slides']['remove_slide'] = [
        '#type' => 'submit',
        '#value' => $this->t('Remove Last Slide'),
        '#submit' => ['::removeSlideSubmit'],
        '#limit_validation_errors' => [],
      ];
    }

    return parent::buildForm($form, $form_state);
  }

  public function addSlideSubmit(array &$form, FormStateInterface $form_state) {
    $config = $this->config('home.banner_settings');
    $slides = $config->get('slides') ?: [];
    $slides[] = $this->getEmptySlide();
    $config->set('slides', $slides)->save();
    $form_state->setRebuild();
  }

  public function removeSlideSubmit(array &$form, FormStateInterface $form_state) {
    $config = $this->config('home.banner_settings');
    $slides = $config->get('slides') ?: [];
    if (count($slides) > 1) {
      array_pop($slides);
      $config->set('slides', $slides)->save();
    }
    $form_state->setRebuild();
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('home.banner_settings');
    $slides = $form_state->getValue('slides');
    
    // Process file uploads
    foreach ($slides as $index => &$slide) {
      if (!empty($slide['background_image'][0])) {
        $file = \Drupal::entityTypeManager()
          ->getStorage('file')
          ->load($slide['background_image'][0]);
        if ($file) {
          $file->setPermanent();
          $file->save();
          $slide['background_image'] = $slide['background_image'][0];
        }
      }
    }

    $config->set('slides', $slides)->save();
    parent::submitForm($form, $form_state);
  }

  private function getDefaultSlides() {
    return [
      [
        'tagline' => 'EMPOWERING INDIA',
        'title' => 'BEST BIM Solutions',
        'subtitle' => 'A more cost effective and productive alternative',
        'cta_text' => 'Start your Nemetschek journey',
        'cta_url' => '/contact',
        'features' => $this->getDefaultFeatures(),
      ]
    ];
  }

  private function getDefaultFeatures() {
    return [
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
    ];
  }

  private function getEmptySlide() {
    return [
      'tagline' => '',
      'title' => '',
      'subtitle' => '',
      'cta_text' => '',
      'cta_url' => '',
      'features' => $this->getDefaultFeatures(),
    ];
  }
}