<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []]); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('tittle', null, []); ?> Beranda <?php $__env->endSlot(); ?>
    <div class="content-home hijau font-putih">
        <div class="summer">
            <div class="list">
                <div class="foto">
                    <img src="<?php echo e(\Illuminate\Support\Facades\URL::asset('/Images/137-78883.webp')); ?>" alt="foto-summer"/>
                </div>
            </div>
            <div class="list">
                <div class=" desc">
                    <h3>Turn Tuesdays into TuesYays with 50% off</h3>
                    <p>Every Tuesday in July, Starbucks Rewards members
                    can enjoy half off their favorite cold beverage.*</p>
                    <button class="btn-putih">Join now</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content-home merah font-putih">
        <div class="summer">
            <div class="list">
                <div class="desc">
                    <h1>Cold brew for two</h1>
                    <p class="besar"> Try the new Chocolate Cream Cold Brew with silky, chocolaty cold foam. Or go for a 
                        Vanilla Sweet Cream Cold Brew with house-made vanilla-flavored sweet cream.</p>
                    <button class="btn-putih">Learn more</button>
                </div>
            </div>
            <div class="list">
                <div class="foto">
                    <img src="<?php echo e(\Illuminate\Support\Facades\URL::asset('/Images/137-78943.jpg')); ?>" alt="foto-summer"/>
                </div>
            </div>
        </div>
    </div>

    <div class="content-home pink">
        <div class="summer">
            <div class="list">
                <div class="foto">
                    <img src="<?php echo e(\Illuminate\Support\Facades\URL::asset('/Images/137-78945.jpg')); ?>" alt="foto-summer"/>
                </div>
            </div>
            <div class="list">
                <div class=" desc">
                    <h2>Refresh on repeat</h2>
                    <p class="besar"> Our vibrant Strawberry Açaí Lemonade and Mango Dragonfruit Lemonade Starbucks Refreshers® beverages are oh so chill.</p>
                    <button>Learn more</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content-home ijo font-putih">
        <div class="summer">
            <div class="list">
                <div class="desc">
                    <h2>Hooray for cookies and cake</h2>
                    <p class="besar"> The new Cookies & Cream Cake Pop is a happy mix of chocolate cake, crumbled cookies and white chocolaty icing.</p>
                    <button class="btn-putih">Order now</button>
                </div>
            </div>
            <div class="list">
                <div class="foto">
                    <img src="<?php echo e(\Illuminate\Support\Facades\URL::asset('/Images/137-78799.jpg')); ?>" alt="foto-summer"/>
                </div>
            </div>
        </div>
    </div>

    <div class="content-home turkuis">
        <div class="summer">
            <div class="list">
                <div class="foto">
                    <img src="<?php echo e(\Illuminate\Support\Facades\URL::asset('/Images/137-78800.webp')); ?>" alt="foto-summer"/>
                </div>
            </div>
            <div class="list">
                <div class=" desc">
                    <h3>Lean into that summer feeling</h3>
                    <p>Order Starbucks® drinks on Uber Eats today. **</p>
                    <button>Order now</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content-home">
        <div class="summer">
            <div class="list">
                <div class="reward">
                <div class="left cream">
                    <div class="foto">
                        <img src="<?php echo e(\Illuminate\Support\Facades\URL::asset('/Images/card-and-stars.jpg')); ?>" alt="foto-summer"/>
                    </div>
                    <h3>Earning 4,500 Bonus Stars is Super Starifying</h3>
                    <p>With a $0 intro annual free for your first year, earn more Stars and
                    even more Rewards with a Starbucks® Rewards Visa* Card.</p>
                    <a href="#">Learn more</a>
                </div>
                </div>
            </div>
            <div class="list">
                <div class="reward">
                    <div class="right cream">
                        <div class="foto">
                            <img src="<?php echo e(\Illuminate\Support\Facades\URL::asset('/Images/phone-and-stars.jpg')); ?>" alt="foto-summer"/>
                        </div>
                        <h3>Fall into an easier routine</h3>
                        <p>Get your favorites, your way-order, pay and pick up with the app.</p>
                        <a href="#">See pickup option</a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="note">
                <p>*Summer TuesYays offer available at participating stores. Excludes ready to drink, bottled beverages and alcohol. Cannot be combined with other offers or discounts. Offer not available through delivery. Limit one per person.</p>
                <p>**Check the Uber Eats app for availability and restrictions.</p>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\xamppbaru\htdocs\replikas_starbuck\resources\views/site/index.blade.php ENDPATH**/ ?>