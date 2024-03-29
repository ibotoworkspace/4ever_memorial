@extends('user_layout.main_header_footer')

@section('title')
    <title>4Year Project Blog</title>
@endsection

@section('headerfiles')
    <link href="{!! asset('public/theme/user_theme/css/blog.css') !!}" rel="stylesheet">
@endsection

@section('body')
    <section>
        <div class="blogtopbanner">
            @include('user_layout.components.banner_menu')
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bannerdata aboutheading">
                            <h1>Child Loss, Coping With Grief</h1>
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
                            <img src="{!! asset('public/theme/user_theme/images/image1.jpg')!!}" class="img-responsive">
                            <div class="blogertext">
                                <h5>Child Loss, Coping With Grief</h5>
                                <h2>Coping with the grief of child loss can be a difficult and heartbreaking process. </h2>
                                <h3>One-way parents may cope is by connecting with other people who have experienced similar losses. It is important to find both professional and informal support networks, such as bereavement groups or online forums. Talking openly about the pain of losing a child can help to reduce feelings of isolation and loneliness. 

It also helps to take care of one's physical health in times of grief, such as following a balanced diet, getting regular exercise, getting enough sleep, and avoiding alcohol or drugs. Taking time out for oneself can provide moments of respite from the sadness and despair that come with grieving the loss of a child. Activities like yoga, meditation, reading, listening to music, spending time with friends, or even just taking a long walk can all help to bring some peace and comfort.

Finally, it is important to remember that there is no "right" way to grieve—everyone experiences grief differently and will find their own ways of coping. It is okay to cry, laugh, and feel a range of emotions. Taking each day at a time and finding new moments of joy can be helpful for those on the journey of grieving. There is no timeline for processing grief; it may take months or years before one can find acceptance and healing from this difficult experience. 
</h3>
                            </div>
                        </div>
                      
                       
                    </div>
                    <div class="col-sm-4">
                        <div class=sideblogdata>
                            <!-- <input type="email" class="form-control" id="Search" placeholder="Search Here!"> -->
                            <div class="sideblog">
                                <img src="{!! asset('public/theme/user_theme/images/jacob-about.png')!!}" class="img-responsive">
                                <p>Our success story is attributed
                                    to the great confidence
                                    bestow on us by our various
                                    students; because we know
                                    that your success in your
                                    career path is ultimately our
                                    success as an organization.</p>
                                    <a  href="{!! asset('user/blog/our_story')!!}" class="btn btn-primary blogclick">Read More ></a>
                            </div>
                            <div class="catagedata">
                                <h3>Categories</h3>
                                <div class="catclicks">
                                    <a href="{!! asset('user/blog/child_loss')!!}" class="btn btn-primary catclick">Child Loss</a>
                                    <a href="{!! asset('user/blog/child_loss')!!}" class="btn btn-primary catclick">Coping With Grief</a>
                                    <a href="{!! asset('user/blog/death')!!}" class="btn btn-primary catclick">End-of-life</a>
                                    <a href="{!! asset('user/blog/death')!!}" class="btn btn-primary catclick">Funeral Planning</a>
                                    <a href="{!! asset('user/blog/child_loss')!!}" class="btn btn-primary catclick">Grief Counseling</a>
                                    <a href="{!! asset('user/blog/child_loss')!!}" class="btn btn-primary catclick">Grief Experience</a>
                                    <a href="{!! asset('user/blog/our_story')!!}" class="btn btn-primary catclick">It Is Interesting</a>
                                    <a href="{!! asset('user/testing')!!}" class="btn btn-primary catclick">Online Memorials</a>
                                    <a href="{!! asset('user/blog/death')!!}" class="btn btn-primary catclick">Phenomenon Of Death </a>
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
