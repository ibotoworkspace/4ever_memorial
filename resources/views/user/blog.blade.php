@extends('user_layout.main_header_footer')

@section('title')
    <title>4Year Project Blog</title>
@endsection

@section('headerfiles')
    <link href="{!! asset('theme/user_theme/css/blog.css') !!}" rel="stylesheet">
@endsection

@section('body')
    <section>
        <div class="blogtopbanner">
            @include('user_layout.components.banner_menu')
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bannerdata aboutheading">
                            <h1>BLOG</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="blogarea">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="blogareadata">
                            <img src="{!! asset('theme/user_theme/images/image1.jpg')!!}" class="img-responsive">
                            <div class="blogertext">
                                <h5>Child Loss, Coping With Grief</h5>
                                <h2>Lorem Ipsum is simply dummy text of the printing</h2>
                                <h3>Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500s, when an un</h3>
                                <button type="button" class="btn btn-primary blogclick">Read More ></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="blogareadataa">
                                    <img src="{!! asset('theme/user_theme/images/image2.jpg')!!}" class="img-responsive">
                                    <div class="blogertext">
                                        <h5>Phenomenon Of Death</h5>
                                        <h2>Lorem Ipsum is simply dummy text</h2>
                                        <h3>Lorem Ipsum is simply dummy
                                            text of the printing and typesetting industry. Lorem Ipsum
                                            has been the industry's standard dummy text ever since the</h3>
                                        <button type="button" class="btn btn-primary blogclickk">Read More ></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="blogareadataa">
                                    <img src="{!! asset('theme/user_theme/images/image3.jpg')!!}" class="img-responsive">
                                    <div class="blogertext">
                                        <h5>Phenomenon Of Death</h5>
                                        <h2>Lorem Ipsum is simply dummy text</h2>
                                        <h3>Lorem Ipsum is simply dummy
                                            text of the printing and typesetting industry. Lorem Ipsum
                                            has been the industry's standard dummy text ever since the</h3>
                                        <button type="button" class="btn btn-primary blogclickk">Read More ></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="blogareadataa">
                                    <img src="{!! asset('theme/user_theme/images/image2.jpg')!!}" class="img-responsive">
                                    <div class="blogertext">
                                        <h5>Phenomenon Of Death</h5>
                                        <h2>Lorem Ipsum is simply dummy text</h2>
                                        <h3>Lorem Ipsum is simply dummy
                                            text of the printing and typesetting industry. Lorem Ipsum
                                            has been the industry's standard dummy text ever since the</h3>
                                        <button type="button" class="btn btn-primary blogclickk">Read More ></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="blogareadataa">
                                    <img src="{!! asset('theme/user_theme/images/image3.jpg')!!}" class="img-responsive">
                                    <div class="blogertext">
                                        <h5>Phenomenon Of Death</h5>
                                        <h2>Lorem Ipsum is simply dummy text</h2>
                                        <h3>Lorem Ipsum is simply dummy
                                            text of the printing and typesetting industry. Lorem Ipsum
                                            has been the industry's standard dummy text ever since the</h3>
                                        <button type="button" class="btn btn-primary blogclickk">Read More ></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class=sideblogdata>
                            <input type="email" class="form-control" id="Search" placeholder="Search Here!">
                            <div class="sideblog">
                                <img src="{!! asset('theme/user_theme/images/jacob-about.png')!!}" class="img-responsive">
                                <p>Our success story is attributed
                                    to the great confidence
                                    bestow on us by our various
                                    students; because we know
                                    that your success in your
                                    career path is ultimately our
                                    success as an organization.</p>
                                <button type="button" class="btn btn-primary blogclick">Learn More ></button>
                            </div>
                            <div class="catagedata">
                                <h3>Categories</h3>
                                <div class="catclicks">
                                    <button type="button" class="btn btn-primary catclick">Child Loss</button>
                                    <button type="button" class="btn btn-primary catclick">Coping With Grief</button>
                                    <button type="button" class="btn btn-primary catclick">End-of-life</button>
                                    <button type="button" class="btn btn-primary catclick">Funeral Planning</button>
                                    <button type="button" class="btn btn-primary catclick">Grief Counseling</button>
                                    <button type="button" class="btn btn-primary catclick">Grief Experience</button>
                                    <button type="button" class="btn btn-primary catclick">Grief Support</button>
                                    <button type="button" class="btn btn-primary catclick">Holiday Grief</button>
                                    <button type="button" class="btn btn-primary catclick">It Is Interesting</button>
                                    <button type="button" class="btn btn-primary catclick">Online Memorials</button>
                                    <button type="button" class="btn btn-primary catclick">Phenomenon Of Death </button>
                                    <button type="button" class="btn btn-primary catclick">Widowed</button>
                                </div>
                            </div>
                            <div class="populardata">
                                <h3>Popular Posts</h3>
                                <h5>Funeral Planning</h5>
                                <h2>Lorem Ipsum is simply dummy text of the printing</h2>
                                <hr>
                                <h5>Funeral Planning</h5>
                                <h2>Lorem Ipsum is simply dummy text of the printing</h2>
                                <hr>
                                <h5>Funeral Planning</h5>
                                <h2>Lorem Ipsum is simply dummy text of the printing</h2>
                                <hr>
                                <h5>Funeral Planning</h5>
                                <h2>Lorem Ipsum is simply dummy text of the printing</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pagidata">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item backnext">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item pgnumb"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item pgnumb"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item pgnumb"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item backnext">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
