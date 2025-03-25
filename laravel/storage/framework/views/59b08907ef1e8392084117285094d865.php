<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'comment' => null,
    'placeholder' => '',
    'model',
    'autofocus' => false,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'comment' => null,
    'placeholder' => '',
    'model',
    'autofocus' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div
    x-data="{
        text: <?php if ((object) ($model) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($model->value()); ?>')<?php echo e($model->hasModifier('live') ? '.live' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($__livewire->getId()); ?>').entangle('<?php echo e($model); ?>')<?php endif; ?>,
        autofocus: <?php echo \Illuminate\Support\Js::from($autofocus)->toHtml() ?>,
        editor: null,

        loadEasyMDE() {
            if (window.EasyMDE) {
                return Promise.resolve();
            }

            const loadScript = new Promise((resolve) => {
                const script = document.createElement('script');
                script.src = 'https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js';
                script.addEventListener('load', resolve);
                document.getElementsByTagName('head')[0].appendChild(script);
            });

            const loadCss = new Promise((resolve) => {
                const link = document.createElement('link');
                link.type = 'text/css';
                link.rel = 'stylesheet';
                link.href = 'https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css';
                link.addEventListener('load', resolve);
                document.getElementsByTagName('head')[0].appendChild(link);
            });

            return Promise.all([loadScript, loadCss]);
        },

        init() {
            this.open();
        },

        open() {
            if (this.editor) {
                return;
            }

            const textarea = this.$refs.textarea;

            if (! textarea) {
                return;
            }

            this.loadEasyMDE().then(() => {
                this.editor = new window.EasyMDE({
                    element: textarea,
                    hideIcons: [
                        'heading',
                        'image',
                        'preview',
                        'side-by-side',
                        'fullscreen',
                        'guide',
                    ],
                    autoDownloadFontAwesome: <?php echo e(config('comments.ui.autoload_fontawesome', true) ? 'true' : 'false'); ?>,
                    spellChecker: false,
                    status: false,
                    insertTexts: {
                        link: ['[',  '](https://)'],
                    },
                });

                const editor = Alpine.raw(this.editor);

                editor.value(this.text);

                if (this.autofocus) {
                    $nextTick(() => {
                        editor.codemirror.focus();
                        editor.codemirror.setCursor(editor.codemirror.lineCount(), 0);
                    });
                }

                editor.codemirror.on('change', () => {
                    this.text = editor.value();
                });
            });
        },

        close() {
            if (! this.editor) return;

            this.editor.value('');
            this.editor.toTextArea();
            this.editor.cleanup();
            this.editor = null;
        },
    }"
    <?php if($comment): ?>
        x-on:open-editor-<?php echo e($comment->id); ?>.window="open"
        x-on:close-editor-<?php echo e($comment->id); ?>.window="close"
    <?php endif; ?>
>
    <div wire:ignore>
        <textarea x-ref="textarea" placeholder="<?php echo e($placeholder); ?>"></textarea>
    </div>

    <div class="comments-form-editor-tip">
        You can use <a href="https://spatie.be/markdown" target="_blank" rel="nofollow noopener noreferrer">Markdown</a>
    </div>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/Comment/packages/spatie/laravel-comments-livewire/resources/views/components/editors/easymde.blade.php ENDPATH**/ ?>