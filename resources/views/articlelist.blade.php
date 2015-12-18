@section('styles')
    @parent
    <link rel="stylesheet" href="{{ asset('dist/css/articlelist.min.css') }}">
@stop
@extends('layout')
@section('content')
    <section class="latest-news" style="background-image:url('{{asset('dist/images/banner1.jpg')}}');">
        <div class="gray-cover"></div>
        <div class="container">
            <p>2015 Dec 11</p>
            <h2>Lorem ipsum dolor sit amet</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Permanentes vivatur sustulisti homini utrisque arbitramur, angere stabilem via inquit, efficerent viros.</p>
            <div class="action-box">
                <div>
                    <a href="" title="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                </div>
                <div>
                    <a href="" title="">39<i class="fa fa-heart"></i>
                    </a>
                </div>
                <div>
                    <a href="" title="">12<i class="fa fa-comment"></i></a>
                </div>
            </div>
        </div>
    </section>
    <div class="wrap container">
        <div class="grid">
            <div class="grid-sizer"></div>
            <div class="grid-item">
                <figure>
                    <img src="{{ asset('dist/images/sample3.jpg') }}" >
                </figure>
                <article>
                    <p>2015 Dec 11</p>
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Interpretaris quas mala utraque liberiusque locus parvam claudicare dissentiet, doleamus laetitia insitam.</p>
                    <div class="action-box">
                        <div>
                            <a class="read-more" href="" title="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div>
                            <a href="" title="">39<i class="fa fa-heart"></i>
                            </a>
                        </div>
                        <div>
                            <a href="" title="">12<i class="fa fa-comment"></i></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="grid-item">
                <figure>
                    <img src="{{ asset('dist/images/sample2.jpg') }}" >
                </figure>
                <article>
                    <p>2015 Dec 11</p>
                    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Legere, chorusque nec ex. Invidus desideraret artibus terminatas desideraturam.</p>
                    <div class="action-box">
                        <div>
                            <a class="read-more" href="" title="readme">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div>
                            <a href="" title="">39<i class="fa fa-heart"></i>
                            </a>
                        </div>
                        <div>
                            <a href="" title="">12<i class="fa fa-comment"></i></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="grid-item">
                <figure>
                    <img src="{{asset('dist/images/sample1.jpg')}}" >
                </figure>
                <article>
                    <p>2015 Dec 11</p>
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iudicante asperum natum poterimus antipatrum apertam faciam.</p>
                    <div class="action-box">
                        <div>
                            <a class="read-more" href="" title="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div>
                            <a href="" title="">39<i class="fa fa-heart"></i>
                            </a>
                        </div>
                        <div>
                            <a href="" title="">12<i class="fa fa-comment"></i></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="grid-item">
                <figure>
                    <img src="{{asset('dist/images/sample4.jpg')}}" >
                </figure>
                <article>
                    <p>2015 Dec 11</p>
                    <h2>Lorem ipsum dolor.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. His efficiendi.</p>
                    <div class="action-box">
                        <div>
                            <a class="read-more" href="" title="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div>
                            <a href="" title="">39<i class="fa fa-heart"></i>
                            </a>
                        </div>
                        <div>
                            <a href="" title="">12<i class="fa fa-comment"></i></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="grid-item">
                <figure>
                    <img src="{{asset('dist/images/sample5.jpg')}}" >
                </figure>
                <article>
                    <p>2015 Dec 11</p>
                    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tradidisse fructu statue impedit, urbane disciplina viros afficitur, liberamur triarium possumus.</p>
                    <div class="action-box">
                        <div>
                            <a class="read-more" href="" title="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div>
                            <a href="" title="">39<i class="fa fa-heart"></i>
                            </a>
                        </div>
                        <div>
                            <a href="" title="">12<i class="fa fa-comment"></i></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="grid-item">
                <figure>
                    <img src="{{asset('dist/images/sample6.jpg')}}" >
                </figure>
                <article>
                    <p>2015 Dec 11</p>
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptaria, omnino cotidie suapte appareat convenire. Possum astris iudicant.</p>
                    <div class="action-box">
                        <div>
                            <a class="read-more" href="" title="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div>
                            <a href="" title="">39<i class="fa fa-heart"></i>
                            </a>
                        </div>
                        <div>
                            <a href="" title="">12<i class="fa fa-comment"></i></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="grid-item">
                <figure>
                    <img src="{{asset('dist/images/sample7.jpg')}}" >
                </figure>
                <article>
                    <p>2015 Dec 11</p>
                    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Legere, chorusque nec ex. Invidus desideraret artibus terminatas desideraturam.</p>
                    <div class="action-box">
                        <div>
                            <a class="read-more" href="" title="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div>
                            <a href="" title="">39<i class="fa fa-heart"></i>
                            </a>
                        </div>
                        <div>
                            <a href="" title="">12<i class="fa fa-comment"></i></a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
@stop