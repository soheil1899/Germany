<?php $__env->startSection('content'); ?>

    <our-product></our-product>

    <slider-component></slider-component>





    <news-component></news-component>


    <about-firstpage></about-firstpage>
    <google-map></google-map>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>