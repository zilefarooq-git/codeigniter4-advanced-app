<?php

use denis303\bootstrap4\FormGroup;

/* @var $this \CodeIgniter\View\View */
/* @var $model \App\Models\ResetPasswordForm */

$this->data['title'] = 'Reset password';

$this->data['breadcrumbs'][] = $this->data['title'];

helper('form');

?>

<h1><?= esc($this->data['title']);?></h1>

<p>Please choose your new password:</p>

<?= form_open('', ['id' => 'reset-password-form']);?>

<?= view('_errors', ['errors' => $errors]);?>

<?= FormGroup::factory([
    'content' => form_password(
        'password', 
        '', 
        [
            'class' => 'form-control',
            'autofocus' => true
        ]
    ),
    'label' => $model->getFieldLabel('password'),
    'error' => array_key_exists('password', $errors) ? $errors['password'] : null
]);?>

<div class="form-group">

    <?= form_submit('send', 'Save', ['class' => 'btn btn-primary']);?>

</div>

<?= form_close();?>