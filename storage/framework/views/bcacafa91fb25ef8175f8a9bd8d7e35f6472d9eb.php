

<?php $__env->startSection('content'); ?>
<div class="container">
    <?php $__env->startSection('title', 'My Account'); ?>

        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="dash">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">

                                <!--====== Dashboard Features ======-->
                                <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                    <div class="dash__pad-1">

                                        <span class="dash__text u-s-m-b-16">Hello, <?php echo e(Auth::user()->name); ?></span>
                                        <ul class="dash__f-list">
                                            <li>

                                                <a href="<?php echo e(Route('myaccount')); ?>">Manage My Account</a></li>
                                            <li>

                                                <a href="<?php echo e(Route('edit_account')); ?>">My Profile</a></li>
                                          

                                                <a class="dash-active" >My Orders</a></li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                                    <div class="dash__pad-1">
                                        <ul class="dash__w-list">
                                            <li>
                                                <div class="dash__w-wrap">

                                                    <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>

                                                    <span class="dash__w-text"><?php echo e(getOrdersCount(Auth::user()->id)); ?></span>

                                                    <span class="dash__w-name">Orders Placed</span></div>
                                            </li>                                          
                                            <li>
                                                <div class="dash__w-wrap">

                                                    <span class="dash__w-icon dash__w-icon-style-3"><i class="far fa-heart"></i></span>

                                                    <span class="dash__w-text"><?php echo e(Cart::count()); ?></span>

                                                    <span class="dash__w-name">Cart</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Dashboard Features ======-->
                            </div>
                            <?php if($orders->count() > 0): ?>
                            <div class="col-lg-9 col-md-12">
                                <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <h1 class="dash__h1 u-s-m-b-14">My Orders</h1>

                                        <span class="dash__text u-s-m-b-30">Here you can see all products that have been delivered.</span>
                                        <form class="m-order u-s-m-b-30">
                                            <div class="m-order__select-wrapper">

                                                <label class="u-s-m-r-8" for="my-order-sort">Show:</label><select name="show_numbers" onchange="this.form.submit()" class="select-box select-box--primary-style" id="my-order-sort">
                                                    <option <?php if($orders->count() <= 5): ?>
                                                        selected
                                                        <?php endif; ?>
                                                        value="5">Last 5 orders</option>
                                                    <option <?php if($orders->count() <= 10  && $orders->count() > 5): ?>
                                                        selected
                                                        <?php endif; ?>
                                                        value="10">Last 10 orders</option>                                                  
                                                    <option <?php if($orders->count() > 10): ?>
                                                        selected
                                                        <?php endif; ?>
                                                        value="12">All Orders</option>
                                                </select></div>
                                        </form>
                                        <div class="m-order__list">
                                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="m-order__get">
                                                <div class="manage-o__header u-s-m-b-30">
                                                    <div class="dash-l-r">
                                                        <div>
                                                            <div class="manage-o__text-2 u-c-secondary">Order #<?php echo e($order->id); ?></div>
                                                            <div class="manage-o__text u-c-silver">Placed on  <?php echo e(($order->created_at)->format('d M Y H:i:s')); ?>

                                                               
                                                                
                                                            </div>
                                                        </div>
                                                     
                                                    </div>
                                                </div>
                                                <div class="manage-o__description">
                                                    <div class="description__container">
                                                        <div class="description__img-wrap">

                                                            <img class="u-img-fluid" style="height: 100%" src="<?php echo e(getProduct($order->product_id)->image); ?>" alt=""></div>
                                                        <div class="description-title"><?php echo e(getProduct($order->product_id)->title); ?></div>
                                                    </div>
                                                    <div class="description__info-wrap">
                                                        <div>

                                                            <?php echo e(compareDate($order->order_date)); ?>    
                                                                                                                       
                                                        </div>
                                                        <div>

                                                            <span class="manage-o__text-2 u-c-silver">Quantity:

                                                                <span class="manage-o__text-2 u-c-secondary"><?php echo e($order->qntty); ?></span></span></div>
                                                        <div>

                                                            <span class="manage-o__text-2 u-c-silver">Total:

                                                                <span class="manage-o__text-2 u-c-secondary"><?php echo e(getPrice((getProduct($order->product_id)->price) * $order->qntty)); ?></span></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endif; ?>
                          <?php if($orders->count() == 0): ?>
                          <div class="col-lg-9 col-md-12 mt-5 pt-3 ">

                            <!--====== Section Content ======-->
                            <div class="section__content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 u-s-m-b-30">
                                            <div class="empty">
                                                <div class="empty__wrap">
            
                                                    <span class="empty__big-text">EMPTY</span>
            
                                                    <span class="empty__text-1">You do not have any orders to display in this view.</span>
            
                                                    <a class="empty__redirect-link btn--e-brand" href="<?php echo e(Route('home')); ?>">CONTINUE SHOPPING</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--====== End - Section Content ======-->
                        </div>
                          <?php endif; ?>

                          

                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
   
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fawzi\Desktop\laravel_ecomerce_prj\resources\views/orders.blade.php ENDPATH**/ ?>