<p><?php if (!empty($form)) echo property_exists ($form, "description") ? $form->description : ''; ?></p>

<h2>Fields</h2>
<?php echo Html::box("/forms-field/edit/".$app->id.'/'.$form->id,"New Field",true)?><br/>
<?php echo isset($formstable) ? $formstable : "No Fields defined yet."?>

