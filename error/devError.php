<div class="container-hl">
        <div class="background-error-hl">
            <div class="error-header-hl"><?= $errType; ?> [code:<?= $errno; ?>]</div>
            <div class="error-content-hl">
                <p class="error-text"><?= $errstr; ?></p>
                <p><strong>File:</strong> <?= $errfile; ?></p>
                <p><strong>Line:</strong> <?= $errline; ?></p>
            </div>
        </div>
</div>