<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <?php $this->load->view('partials/main_sidebar'); ?>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <?php if (!empty($product->image)) { ?>
                            <div class="view-product">
                                <img src="<?php echo site_url('img.php?src=uploads/'.$product->image.'&w=768'); ?>" alt="<?php echo $product->name.' | '.$general->logo_text; ?>" />
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information">
                            <h2><?php echo $product->name; ?></h2>
                            <p>Vizualizari: <?php echo $product->views; ?></p>
                            <img src="/assets/images/product-details/rating.png" alt="" />
                            <span style="display:block">
                                <span style="float:none"><?php echo $product->price; ?> Lei / bucata</span>
                            </span>
                            <span>
                                <label>Contitatea:</label>
                                <input type="text" value="3" />
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Adauga in cos
                                </button>
                            </span>
                            <p><b>Disponibilitate:</b> <?php echo $product->active ? 'In stoc' : 'Nu este in stoc'; ?></p>
                            <p><b>Brand:</b> Gilette</p>
                        </div>
                    </div>
                </div>

                <div class="category-tab shop-details-tab">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#details" data-toggle="tab">Detalii</a></li>
                            <li><a href="#delivery" data-toggle="tab">Livrare</a></li>
                            <li><a href="#reviews" data-toggle="tab">Comentarii <?php echo !empty($comments) ? '('.count($comments).')' : ''; ?></a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="details">
                            <p style="padding:0 20px 10px 20px"><?php echo $product->description; ?></p>
                        </div>

                        <div class="tab-pane fade" id="delivery" >
                            <p style="padding:0 20px 10px 20px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo nemo quidem reprehenderit veritatis. Accusamus cumque eligendi explicabo itaque iure maiores neque quo? Accusantium adipisci asperiores consequatur dolor ipsum magnam, sequi! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid deserunt est fuga id illo in, iste magnam neque nobis non odio quam quasi quisquam reprehenderit similique suscipit tempora voluptatum.</p>
                        </div>

                        <div class="tab-pane fade" id="reviews" >
                            <div class="col-sm-12">
                                <?php if (!empty($comments)) { ?>
                                    <?php foreach ($comments as $comment) { ?>
                                        <div class="comment">
                                            <ul>
                                                <li><a href=""><i class="fa fa-user"></i><?php echo $comment->user_name; ?></a></li>
                                                <li><a href=""><i class="fa fa-clock-o"></i><?php echo $comment->date; ?></a></li>
                                                <li><a href=""><i class="fa fa-calendar-o"></i><?php echo $comment->date; ?></a></li>
                                            </ul>
                                            <p><?php echo $comment->message; ?></p>
                                        </div>
                                    <?php } ?>
                                <?php } else { ?>
                                    <p>La moment nu sunt comentarii adaugate.</p>
                                <?php } ?>
                                <br>

                                <div class="add-comment">
                                    <p><b>Adauga un comentariu</b></p>

                                    <form action="<?php echo site_url('user/comment'); ?>" method="post">
										<span>
											<input type="text" placeholder="<?php echo lang('msg_name'); ?>"/>
											<input type="email" placeholder="<?php echo lang('msg_email'); ?>"/>
										</span>
                                        <textarea name="message" placeholder="<?php echo lang('msg_message'); ?>"></textarea>
                                        <b>Rating: </b> <img src="/assets/images/product-details/rating.png" alt="" />
                                        <button type="button" class="btn btn-default pull-right"><?php echo lang('msg_send'); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <?php if (!empty($recommended_products)) { ?>
                    <div class="recommended_items">
                        <h2 class="title text-center">Produse recomandate</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <?php foreach ($recommended_products as $product) { ?>
                                        <?php $this->load->view('partials/product', ['product' => $product]); ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>