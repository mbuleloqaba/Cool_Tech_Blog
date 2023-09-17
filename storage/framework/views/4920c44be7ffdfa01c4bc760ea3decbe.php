<!-- resources/views/components/cookie-notice.blade.php -->

<?php if(!request()->cookie('accept_cookies')): ?>
    <div class="cookie-notice">
        <p>This website uses cookies. <a href="<?php echo e(route('cookie-policy')); ?>">Learn more</a></p>
        <button id="accept-cookies">Accept</button>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Vulindlela Qaba\Documents\Hyperion Dev coure content\Assignments 4\Task 10\cooltechproject\resources\views/components/cookie-notice.blade.php ENDPATH**/ ?>