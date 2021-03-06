<?php

/**
 * @file
 * Contains \Drupal\form_test\Form\FormTestValidateForm.
 */

namespace Drupal\form_test\Form;

use Drupal\Core\Form\FormBase;
use Drupal\form_test\Callbacks;

/**
 * Form builder for testing \Drupal\Core\Form\FormValidatorInterface::validateForm().
 *
 * Serves for testing form processing and alterations by form validation
 * handlers, especially for the case of a validation error:
 * - form_set_value() should be able to alter submitted values in
 *   $form_state['values'] without affecting the form element.
 * - #element_validate handlers should be able to alter the $element in the form
 *   structure and the alterations should be contained in the rebuilt form.
 * - #validate handlers should be able to alter the $form and the alterations
 *   should be contained in the rebuilt form.
 */
class FormTestValidateForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'form_test_validate_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, array &$form_state) {
    $object = new Callbacks();

    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => 'Name',
      '#default_value' => '',
      '#element_validate' => array(array($object, 'validateName')),
    );
    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => 'Save',
    );

    // To simplify this test, enable form caching and use form storage to
    // remember our alteration.
    $form_state['cache'] = TRUE;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, array &$form_state) {
    if ($form_state['values']['name'] == 'validate') {
      // Alter the form element.
      $form['name']['#value'] = '#value changed by #validate';
      // Alter the submitted value in $form_state.
      form_set_value($form['name'], 'value changed by form_set_value() in #validate', $form_state);
      // Output the element's value from $form_state.
      drupal_set_message(t('@label value: @value', array('@label' => $form['name']['#title'], '@value' => $form_state['values']['name'])));

      // Trigger a form validation error to see our changes.
      form_set_error('', $form_state);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, array &$form_state) {
  }

}
