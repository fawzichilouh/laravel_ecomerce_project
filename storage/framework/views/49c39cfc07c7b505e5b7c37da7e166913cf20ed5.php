<?php $__env->startSection('content'); ?>
<div class="container">
    <?php $__env->startSection('brodcump'); ?>
    <?php $__env->stopSection(); ?>


        <!--====== Section 1 ======-->

        <!--====== Electronic Category ======-->
        <div class="u-s-p-y-60" id="electronic-01">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="block">
                                <span class="block__title"
                                    >TOP CATEGORY</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30"
                        >                                                             
                            <div class="category-o">
                                <div
                                    class="aspect aspect--bg-grey aspect--square category-o__img-wrap"
                                >
                                    <img
                                        class="aspect__img category-o__img"
                                        src="<?php echo e($cat->image); ?>"
                                        alt=""
                                    />
                                </div>
                                <div class="category-o__info">
                                    <a
                                        class="category-o__shop-now btn--e-white-brand"
                                        href="shop-side-version-2.html"
                                        ><?php echo e($cat->name); ?></a
                                    >
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>

        <!--====== Electronic Category ======-->
        <!--====== End - Section 1 ======-->
        <!--====== Section 2 ======-->

        <!--====== End - Section 2 ======-->
        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-16">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1
                                    class="section__heading u-c-secondary u-s-m-b-12"
                                >
                                    TOP TRENDING
                                </h1>

                                <span class="section__span u-c-silver"
                                    >CHOOSE CATEGORY</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="filter-category-container">
                                <div class="filter__category-wrapper">
                                    <button
                                        class="btn filter__btn filter__btn--style-1 js-checked"
                                        type="button"
                                        data-filter="*"
                                    >
                                        ALL
                                    </button>
                                </div>
                                <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="filter__category-wrapper">
                                    <button
                                        class="btn filter__btn filter__btn--style-1"
                                        type="button"
                                        data-filter=".<?php echo e($cat->name); ?>"
                                    >
                                      
                                         <?php echo e($cat->name); ?> 
                                      
                                    </button>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                               
                            </div>
                            <div
                                class="filter__grid-wrapper u-s-m-t-30"
                            >
                            <div class="row">

                         <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <div
                         class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item <?php echo e($product->Category->name); ?>">
                         <div
                             class="product-o product-o--hover-on product-o--radius"
                         >
                             <div
                                 class="product-o__wrap"
                             >
                                 <a
                                     class="aspect aspect--bg-grey aspect--square u-d-block"
                                     href="<?php echo e(Route('product')); ?>"
                                 >
                                     <img
                                         class="aspect__img"
                                         src="<?php echo e($product->image); ?>"
                                         alt=""
                                 /></a>
                                 <div
                                     class="product-o__action-wrap"
                                 >
                                     <ul
                                         class="product-o__action-list"
                                     >
                                         <li>
                                             <a
                                                 data-modal="modal"
                                                 data-modal-id="#quick-look"
                                                 data-tooltip="tooltip"
                                                 data-placement="top"
                                                 title="Quick View"
                                                 ><i
                                                     class="fas fa-search-plus"
                                                 ></i
                                             ></a>
                                         </li>
                                         <li>
                                             <a
                                                 data-modal="modal"
                                                 data-modal-id="#add-to-cart"
                                                 data-tooltip="tooltip"
                                                 data-placement="top"
                                                 title="Add to Cart"
                                                 ><i
                                                     class="fas fa-plus-circle"
                                                 ></i
                                             ></a>
                                         </li>
                                         <li>
                                             <a
                                                 href="signin.html"
                                                 data-tooltip="tooltip"
                                                 data-placement="top"
                                                 title="Add to Wishlist"
                                                 ><i
                                                     class="fas fa-heart"
                                                 ></i
                                             ></a>
                                         </li>
                                        
                                     </ul>
                                 </div>
                             </div>

                             <span
                                 class="product-o__category"
                             >
                                 <a
                                     href="shop-side-version-2.html"
                                     >Electronics</a
                                 ></span
                             >

                             <span
                                 class="product-o__name"
                             >
                                 <a
                                     href="product-detail.html"
                                     ><?php echo e($product->title); ?></a
                                 ></span
                             >
                             <div
                                 class="product-o__rating gl-rating-style"
                             >
                                 <i
                                     class="fas fa-star"
                                 ></i
                                 ><i
                                     class="fas fa-star"
                                 ></i
                                 ><i
                                     class="fas fa-star"
                                 ></i
                                 ><i
                                     class="fas fa-star"
                                 ></i
                                 ><i
                                     class="fas fa-star-half-alt"
                                 ></i>

                             </div>

                             <span
                                 class="product-o__price"
                                 >$<?php echo e($product->price); ?>.00

                                 <span
                                     class="product-o__discount"
                                     >$160.00</span
                                 ></span
                             >
                         </div>
                     </div>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                    </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="load-more">
                                <a
                                    class="btn btn--e-brand"
                                    type="button"
                                    href="<?php echo e(Route('items_cats')); ?>"
                                >
                                    Load More
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->

        <!--====== Section 4 ======-->
        <div class="u-s-p-b-60">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1
                                    class="section__heading u-c-secondary u-s-m-b-12"
                                >
                                    LAST ADDED
                                </h1>

                                <span class="section__span u-c-silver"
                                    >GET UP FOR NEW ARRIVALS</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="slider-fouc">
                        <div
                            class="owl-carousel product-slider"
                            data-item="4"
                        >
                        <?php $__currentLoopData = $last_added; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="u-s-m-b-30">
                            <div
                                class="product-o product-o--hover-on"
                            >
                                <div class="product-o__wrap">
                                    <a
                                        class="aspect aspect--bg-grey aspect--square u-d-block"
                                        href="product-detail.html"
                                    >
                                        <img
                                            class="aspect__img"
                                            src="<?php echo e($item->image); ?>"
                                            alt=""
                                    /></a>
                                    <div
                                        class="product-o__action-wrap"
                                    >
                                        <ul
                                            class="product-o__action-list"
                                        >
                                            <li>
                                                <a
                                                    data-modal="modal"
                                                    data-modal-id="#quick-look"
                                                    data-tooltip="tooltip"
                                                    data-placement="top"
                                                    title="Quick View"
                                                    ><i
                                                        class="fas fa-search-plus"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    data-modal="modal"
                                                    data-modal-id="#add-to-cart"
                                                    data-tooltip="tooltip"
                                                    data-placement="top"
                                                    title="Add to Cart"
                                                    ><i
                                                        class="fas fa-plus-circle"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    href="signin.html"
                                                    data-tooltip="tooltip"
                                                    data-placement="top"
                                                    title="Add to Wishlist"
                                                    ><i
                                                        class="fas fa-heart"
                                                    ></i
                                                ></a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>

                                <span class="product-o__category">
                                    <a
                                        href="shop-side-version-2.html"
                                        ><?php echo e($item->Category->name); ?></a
                                    ></span
                                >

                                <span class="product-o__name">
                                    <a href="product-detail.html"
                                        ><?php echo e($item->title); ?></a
                                    ></span
                                >
                                <div
                                    class="product-o__rating gl-rating-style"
                                >
                                    <i class="far fa-star"></i
                                    ><i class="far fa-star"></i
                                    ><i class="far fa-star"></i
                                    ><i class="far fa-star"></i
                                    ><i class="far fa-star"></i>

                                   
                                </div>

                                <span class="product-o__price"
                                    >$<?php echo e($item->price); ?>


                                    <span
                                        class="product-o__discount"
                                        >$160.00</span
                                    ></span
                                >
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                         
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 4 ======-->

        <!--====== Section 6 ======-->
        <div class="u-s-p-y-60">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1
                                    class="section__heading u-c-secondary u-s-m-b-12"
                                >
                                    FEATURED PRODUCTS
                                </h1>

                                <span class="section__span u-c-silver"
                                    >FIND NEW FEATURED PRODUCTS</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <?php $__currentLoopData = $best_offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30" >
                            <div
                                class="product-o product-o--hover-on u-h-100"
                            >
                                <div class="product-o__wrap">
                                    <a
                                        class="aspect aspect--bg-grey aspect--square u-d-block"
                                        href="product-detail.html"
                                    >
                                        <img
                                            class="aspect__img"
                                            src="<?php echo e($offer->image); ?>"
                                            alt=""
                                    /></a>
                                    <div class="product-o__action-wrap">
                                        <ul
                                            class="product-o__action-list"
                                        >
                                            <li>
                                                <a
                                                    data-modal="modal"
                                                    data-modal-id="#quick-look"
                                                    data-tooltip="tooltip"
                                                    data-placement="top"
                                                    title="Quick View"
                                                    ><i
                                                        class="fas fa-search-plus"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    data-modal="modal"
                                                    data-modal-id="#add-to-cart"
                                                    data-tooltip="tooltip"
                                                    data-placement="top"
                                                    title="Add to Cart"
                                                    ><i
                                                        class="fas fa-plus-circle"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    href="signin.html"
                                                    data-tooltip="tooltip"
                                                    data-placement="top"
                                                    title="Add to Wishlist"
                                                    ><i
                                                        class="fas fa-heart"
                                                    ></i
                                                ></a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>

                                <span class="product-o__category">
                                    <a href="shop-side-version-2.html"
                                        ><?php echo e($offer->Category->name); ?></a
                                    ></span
                                >

                                <span class="product-o__name">
                                    <a href="product-detail.html"
                                        ><?php echo e($offer->title); ?></a
                                    ></span
                                >
                                <div
                                    class="product-o__rating gl-rating-style"
                                >
                                    <i class="fas fa-star"></i
                                    ><i class="fas fa-star"></i
                                    ><i class="fas fa-star"></i
                                    ><i class="fas fa-star"></i
                                    ><i
                                        class="fas fa-star-half-alt"
                                    ></i>

                                   
                                </div>

                                <span class="product-o__price"
                                    >$<?php echo e($offer->price); ?>


                                    <span class="product-o__discount"
                                        >$160.00</span
                                    ></span
                                >
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
       
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 6 ======-->
        <!--====== Section 9 ======-->
        <div class="u-s-p-b-60">
            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <div class="service__info-wrap">
                                    <span class="service__info-text-1"
                                        >Free Shipping</span
                                    >

                                    <span class="service__info-text-2"
                                        >Free shipping on all US order
                                        or order above $200</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon">
                                    <i class="fas fa-redo"></i>
                                </div>
                                <div class="service__info-wrap">
                                    <span class="service__info-text-1"
                                        >Shop with Confidence</span
                                    >

                                    <span class="service__info-text-2"
                                        >Our Protection covers your
                                        purchase from click to
                                        delivery</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon">
                                    <i
                                        class="fas fa-headphones-alt"
                                    ></i>
                                </div>
                                <div class="service__info-wrap">
                                    <span class="service__info-text-1"
                                        >24/7 Help Center</span
                                    >

                                    <span class="service__info-text-2"
                                        >Round-the-clock assistance for
                                        a smooth shopping
                                        experience</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 9 ======-->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fawzi\Desktop\laravel_ecomerce_prj\resources\views/products.blade.php ENDPATH**/ ?>