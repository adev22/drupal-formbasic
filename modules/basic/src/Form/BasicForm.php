<?php

namespace Drupal\basic\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class BasicForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'basic_form';
  }

    public function buildForm(array $form, FormStateInterface $form_state){
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Name'),
          ];

        $form['age'] = [
            '#type' => 'tel',
            '#title' => $this->t('Age'),
          ];
        
        $form['gender'] = [
            '#type' => 'select',
            '#title' => $this->t('Gender'),
            '#options' => array(
              '' => $this->t('Choose'),
              'Male' => $this->t('Male'),
              'Female' => $this->t('Female'),
            ),
          ];

        $form['birthdate'] = [
            '#type' => 'date',
            '#title' => $this->t('Birthdate'),
          ];
              
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
          ];
      
          return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
        drupal_set_message('Registration Success !');
      }


}