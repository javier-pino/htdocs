<div data-role="messages">
    <?php foreach ($messages['notice'] as $notice): ?>
        <div class="ui-bar ui-bar-b ui-corner-all">
            <h3>{$notice['text']}</h3>
            <a href="#" data-role="button" data-icon="delete"
               class="btn-close-message center-wrapper">Ocultar</a>
        </div>
    <?php endforeach; ?>

    <?php foreach ($messages['error'] as $error): ?>
        <div class="ui-bar ui-bar-b ui-corner-all">
            <h3>{$error['text']}</h3>
            <a href="#" data-role="button" data-icon="delete"
               class="btn-close-message center-wrapper">Ocultar</a>
        </div>
    <?php endforeach; ?>
   
</div>