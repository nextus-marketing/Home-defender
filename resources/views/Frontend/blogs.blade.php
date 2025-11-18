@extends('layouts.frontend')
@section('title')
    Blogs | Home Defender
@endsection
@section('content')
<div class="page-header parallaxie">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="page-header-box">
						<h1 class="wow fadeInUp" data-cursor="-opaque">Blogs</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/">home</a></li>
								<li class="breadcrumb-item active" aria-current="page"> blog</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
     <div class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp">
                        <div class="post-featured-image">
                            <a href="/blog-details" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/images/post-1.jpg" alt="">
                                </figure>
                            </a>
                
                            <div class="post-item-meta">
                                <a href="#">20 Jan</a>
                            </div>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2><a href="/blog-details">Top 5 Benefits of Installing CCTV Cameras at Home</a></h2>
                            </div>
                            <div class="blog-item-btn">
                                <a href="/blog-details" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="post-featured-image">
                            <a href="/blog-details" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/images/post-2.jpg" alt="">
                                </figure>
                            </a>
                
                            <div class="post-item-meta">
                                <a href="#">20 Jan</a>
                            </div>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2><a href="/blog-details">The Future of Security Trends in CCTV Technology</a></h2>
                            </div>
                            <div class="blog-item-btn">
                                <a href="/blog-details" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="post-featured-image">
                            <a href="/blog-details" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/images/post-3.jpg" alt="">
                                </figure>
                            </a>
                            <div class="post-item-meta">
                                <a href="#">20 Jan</a>
                            </div>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2><a href="/blog-details">Tips for Securing Your Home with DIY CCTV Solutions</a></h2>
                            </div>
                            <div class="blog-item-btn">
                                <a href="/blog-details" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="post-featured-image">
                            <a href="/blog-details" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/images/post-4.jpg" alt="">
                                </figure>
                            </a>
                            <div class="post-item-meta">
                                <a href="#">20 Jan</a>
                            </div>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2><a href="/blog-details">Step-by-Step Guide to Installing a CCTV Camera System</a></h2>
                            </div>
                            <div class="blog-item-btn">
                                <a href="/blog-details" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="post-featured-image">
                            <a href="/blog-details" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/images/post-5.jpg" alt="">
                                </figure>
                            </a>
                            <div class="post-item-meta">
                                <a href="#">20 Jan</a>
                            </div>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2><a href="/blog-details">Understanding Motion Detection in CCTV Cameras</a></h2>
                            </div>
                            <div class="blog-item-btn">
                                <a href="/blog-details" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="post-item wow fadeInUp" data-wow-delay="1s">
                        <div class="post-featured-image">
                            <a href="/blog-details" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="/frontend/images/post-6.jpg" alt="">
                                </figure>
                            </a>
                
                            <div class="post-item-meta">
                                <a href="#">20 Jan</a>
                            </div>
                        </div>
                        <div class="post-item-body">
                            <div class="post-item-content">
                                <h2><a href="/blog-details">How CCTV Cameras Improve Home and Business Security</a></h2>
                            </div>
                            <div class="blog-item-btn">
                                <a href="/blog-details" class="readmore-btn">read more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <!-- Page Pagination Start -->
                    <div class="page-pagination wow fadeInUp" data-wow-delay="1.2s">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
                        </ul>
                    </div>
                    <!-- Page Pagination End -->
                </div>
            </div>
        </div>
    </div>
@endsection