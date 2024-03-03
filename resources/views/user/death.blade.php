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
                            <h1>Phenomenon Of Death</h1>
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
                            <img src="{!! asset('public/theme/user_theme/images/image2.jpg')!!}" class="img-responsive">
                            <div class="blogertext">
                                        <h5>Phenomenon Of Death</h5>
                                        <h2>Death is an inevitable phenomenon in the world. It is a universal truth that no one can escape from death. </h2>
                                        <h3>Death is an inevitable phenomenon in the world. It is a universal truth that no one can escape from death. Death has been part of human life since time immemorial and it is something that we all must eventually face. There are many different beliefs and theories surrounding death, with cultures around the world having their own unique views on its meaning and importance. 

Most people accept death as a natural part of life, although some may feel grief or anger upon losing a loved one. Many religions incorporate various rituals into their traditions to honor the deceased and help family members cope with their loss. Funerals, memorial services, wakes, cremations, and burials are common ways to commemorate those who have passed away. 

The emotional and psychological effects of death can be long-lasting, and people often find themselves struggling to come to terms with the loss. Grief is a common response, as it can help individuals process their emotions associated with the death of someone they care about. Many religions view death as a journey to an afterlife or spiritual realm, providing comfort and hope in times of sorrow. 
</br>
</br>
Death is an inevitability that we must all face, but it does not have to be feared or dreaded. With the right perspective and understanding, death can be seen as a natural part of life and a reminder to cherish each day. It can bring about great spiritual growth and healing if approached with peace and acceptance. 
Looking at death in this way will allow us to live more meaningful lives and help us cope with its unavoidable reality. The phenomenon of death is universal, yet distinct in its own way, reminding us that life is precious and fleeting. 
Understandably, dealing with the loss of someone we care for can be very difficult for many people. However, by accepting death as a natural part of life and taking the time to properly grieve, we can use it as an opportunity to grow spiritually. With the right perspective, death has the potential to bring us greater insight into the fragility and preciousness of life. Understanding its significance can help us live our lives with appreciation and gratitude while we are still here. 

Death is unavoidable but that does not mean it has to be feared or dreaded. Taking on a more positive outlook on death can help make it easier to accept when it approaches, allowing us to find peace and healing in times of sorrow. Although loss is painful, understanding the phenomenon of death can open up new dimensions of spiritual growth and meaning in life. 

Regardless of individual beliefs, death is one of life's certainties that no one can avoid. While this knowledge may be difficult to accept, understanding its significance can help us navigate life with grace and appreciation while we are still alive. Death reminds us to make the most out of every moment we have on Earth so that when our time comes, we can look back on our lives with a sense of fulfillment. 
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
