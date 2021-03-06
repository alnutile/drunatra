<?php

/**
 * @file
 * Contains \Drupal\form_test\Form\FormTestStatePersistForm.
 */

namespace Drupal\form_test\Form;

use Drupal\Core\Form\FormBase;

/**
 * Form constructor for testing form state persistence.
 */
class FormTestStatePersistForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form_test_state_persist';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, array &$form_state) {
    $form['title'] = array(
      '#type' => 'textfield',
      '#title' => 'title',
      '#default_value' => 'DEFAULT',
      '#required' => TRUE,
    );
    $form_state['value'] = 'State persisted.';

    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => t('Submit'),
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, array &$form_state) {
    drupal_set_message($form_state['value']);
    $form_state['rebuild'] = TRUE;
  }

}
