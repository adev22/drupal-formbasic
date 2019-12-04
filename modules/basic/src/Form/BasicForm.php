<?php

namespace Drupal\Basic\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class BasicForm extends FormBase{

    public function getFormId(){
        return 'basic_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
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
            'Female' => t('Female'),
            'male' => t('Male'),
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
          drupal_set_message('Name : '.$form_state->getValue('name'));
          drupal_set_message('Age : '.$form_state->getValue('age'));
          drupal_set_message('Gender : '.$form_state->getValue('gender'));
          drupal_set_message('Birthdate : '.$form_state->getValue('birthdate'));
      }


}