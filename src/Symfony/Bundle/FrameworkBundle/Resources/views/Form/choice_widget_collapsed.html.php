<select
    <?php echo $view['form']->block('widget_attributes') ?>
    <?php if ($multiple): ?> multiple="multiple"<?php endif ?>
>
    <?php if (null !== $empty_value): ?><option value=""><?php echo $view->escape($view['translator']->trans($empty_value, array(), $translation_domain)) ?></option><?php endif; ?>
    <?php if (count($preferred_choices) > 0): ?>
        <?php echo $view['form']->block('choice_widget_options', array('options' => $preferred_choices)) ?>
        <?php if (count($choices) > 0 && null !== $separator): ?>
            <option disabled="disabled"><?php echo $separator ?></option>
        <?php endif ?>
    <?php endif ?>
    <?php echo $view['form']->block('choice_widget_options', array('options' => $choices)) ?>
</select>
