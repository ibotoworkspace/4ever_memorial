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
                            <h1>Our success story at forever memorial</h1>
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
                            <img src="{!! asset('theme/user_theme/images/image3.jpg')!!}" class="img-responsive">
                            <div class="blogertext">
                                        <h5>Our success story at forever memorial
</h5>
                                        <h2>Forever Memorial is a success story that began with a simple dream </h2>
                                        <h3>to create an online memorial service for those who have passed away. What we created was much more than just an online space dedicated to remembrance. We developed a comprehensive platform that connects families, friends, and those who are grieving in meaningful ways. 

Our journey began when our founder noticed the lack of support available to people dealing with loss. He wanted to bridge the gap between technology and grief, so he set out to create Forever Memorial—an engaging digital platform that offers personalized tributes, guest books, and other features designed to honor lost loved ones. 

Since then, Forever Memorial has grown exponentially due to its unique ability to provide comfort and healing through technology. We’ve connected countless family members, friends, and those who are grieving in meaningful ways, allowing them to share memories and experiences together. 

From a small startup to an award-winning business, Forever Memorial has come a long way. We have developed innovative tools that make the mourning process more bearable for all involved. Through our efforts, we continue to bridge the gap between technology and grief—connecting people from all over the world in profound ways. 

We are excited about what the future holds for Forever Memorial as we strive to bring comfort and healing through technology each and every day. Our mission is simple: to enable people around the world to remember their loved ones with dignity and respect. With this goal in mind, we will continue to create meaningful experiences and be at the forefront of innovation within the memorial services industry. 

The success of Forever Memorial has been a truly remarkable journey. It is a testament to how technology can bring people together in times of loss. We are proud to have made an impact on so many lives and look forward to furthering our mission for years to come. To quote our founder, “Forever Memorial is more than just an online space dedicated to remembrance; it’s a sanctuary for those who need it most.”  And that is why we do what we do. For all those missing their loved ones—we are here with you every step of the way. 

We invite you to join us on this journey and experience the power of Forever Memorial. Thank you for being part of our success story.  Together, we can create a better future - one that helps people remember their loved ones in meaningful ways. We are Forever Memorial. Let’s continue to make an impact together.
</h3>
                                        
                                    </div>
                        </div>
                      
                       
                    </div>
                    <div class="col-sm-4">
                        <div class=sideblogdata>
                            <!-- <input type="email" class="form-control" id="Search" placeholder="Search Here!">
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
                            </div> -->
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
                            <!-- <div class="populardata">
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
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
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
                </div> -->
            </div>
        </div>
    </section>
@endsection
