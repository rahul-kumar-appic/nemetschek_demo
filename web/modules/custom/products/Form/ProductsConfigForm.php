<?php

namespace Drupal\products\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure Products settings.
 */
class ProductsConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['products.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'products_config_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('products.settings');

    $form['banner_settings'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Banner Settings'),
      '#description' => $this->t('Configure default banner settings for product pages.'),
    ];

    $form['banner_settings']['default_banner_height'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Default Banner Height'),
      '#default_value' => $config->get('default_banner_height') ?: '400px',
      '#description' => $this->t('Default minimum height for product banners (e.g., 400px, 50vh).'),
    ];

    $form['banner_settings']['enable_parallax'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Enable Parallax Effect'),
      '#default_value' => $config->get('enable_parallax') ?: FALSE,
      '#description' => $this->t('Enable parallax scrolling effect for banner backgrounds.'),
    ];

    $form['reuse_styles'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Style Reuse Settings'),
      '#description' => $this->t('Configure which styles to reuse from other modules.'),
    ];

    $form['reuse_styles']['banner_module'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Banner Module'),
      '#default_value' => $config->get('banner_module') ?: '',
      '#description' => $this->t('Name of module containing banner styles to reuse (leave empty to use products module styles).'),
    ];

    $form['reuse_styles']['banner_css_file'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Banner CSS File'),
      '#default_value' => $config->get('banner_css_file') ?: '',
      '#description' => $this->t('Path to CSS file containing banner styles (relative to module directory).'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('products.settings')
      ->set('default_banner_height', $form_state->getValue('default_banner_height'))
      ->set('enable_parallax', $form_state->getValue('enable_parallax'))
      ->set('banner_module', $form_state->getValue('banner_module'))
      ->set('banner_css_file', $form_state->getValue('banner_css_file'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}