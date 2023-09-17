<!-- resources/views/components/cookie-notice.blade.php -->

<?php if(!request()->cookie('accept_cookies')): ?>
    <div class="cookie-notice">
        <p>This website uses cookies. <a href="<?php echo e(route('cookie-policy')); ?>">Learn more</a></p>
        <button id="accept-cookies">Accept</button>
    </div>
<?php endif; ?>
<!--Hyperiondev Level 4 "Laravel" pdf Resource--><?php /**PATH C:\Users\Vulindlela Qaba\Dropbox\MU22120006465\4. Advanced Web Development with the MERN Stack\L4T10\Task 10\cooltechproject\resources\views/components/cookie-notice.blade.php ENDPATH**/ ?>