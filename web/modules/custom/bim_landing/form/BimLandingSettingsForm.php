<?php

namespace Drupal\bim_landing\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configuration form for BIM Landing page settings.
 */
class BimLandingSettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['bim_landing.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'bim_landing_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('bim_landing.settings');

    $form['hero'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('Hero Section'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    ];

    $form['hero']['hero_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Hero Title'),
      '#default_value' => $config->get('hero_title'),
      '#description' => $this->t('Main title for the hero section. Use &lt;br&gt; for line breaks.'),
    ];

    $form['hero']['hero_subtitle'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Hero Subtitle'),
      '#default_value' => $config->get('hero_subtitle'),
      '#description' => $this->t('Subtitle text below the main title.'),
    ];

    $form['hero']['cta_text'] = [
      '#type' => 'textfield',
      '#title' => $this->t('CTA Button Text'),
      '#default_value' => $config->get('cta_text'),
      '#description' => $this->t('Text for the call-to-action button.'),
    ];

    $form['hero']['cta_link'] = [
      '#type' => 'textfield',
      '#title' => $this->t('CTA Button Link'),
      '#default_value' => $config->get('cta_link'),
      '#description' => $this->t('URL for the call-to-action button.'),
    ];

    $form['seo'] = [
      '#type' => 'fieldset',
      '#title' => $this->t('SEO Settings'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
    ];

    $form['seo']['meta_description'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Meta Description'),
      '#default_value' => $config->get('meta_description'),
      '#description' => $this->t('Meta description for search engines.'),
      '#rows' => 3,
    ];

    $form['seo']['meta_keywords'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Meta Keywords'),
      '#default_value' => $config->get('meta_keywords'),
      '#description' => $this->t('Comma-separated keywords for search engines.'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('bim_landing.settings')
      ->set('hero_title', $form_state->getValue('hero_title'))
      ->set('hero_subtitle', $form_state->getValue('hero_subtitle'))
      ->set('cta_text', $form_state->getValue('cta_text'))
      ->set('cta_link', $form_state->getValue('cta_link'))
      ->set('meta_description', $form_state->getValue('meta_description'))
      ->set('meta_keywords', $form_state->getValue('meta_keywords'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}