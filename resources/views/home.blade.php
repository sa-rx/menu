@extends('layouts.app')
@section('title', ' الرئيسيه ')

@section('content')
<section class="page-section cta">
            <div class="container">
                <div class="row">
                    <h2 class="section-heading mb-2  text-center">العروض</h2>
                    <div class="col-xl-9 mx-auto">
                        @forelse($offers as $offer)
                            
                            <div class="cta-inner bg-faded text-center rounded">
                                <h2 class="section-heading mb-2">
                                    <span class="section-heading-lower">{{$offer->title}}</span>
                                    <span class="section-heading-upper">{{$offer->content}}</span>
                                </h2>
                                <p class="mb-0">{{$offer->price}}
                            </div>
                            
                        @empty
                        <p class="mb-0 text-center">  لا توجد عروض حاليا </p>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>       

        <section class="page-section cta">
            <div class="container">


                

                    @forelse($categories as $category)
                    <span class="section-heading-lower">{{$category->title}}</span>

                    <table class="table table-hover table-striped cta-inner   mb-5">
                
                        <thead>
                            <tr>
                                <th scope="col">   الاسم</th>
                                <th scope="col">السعر</th>
                                <th scope="col">السعرات الحراريه</th>
                            </tr>
                        </thead>


                        <tbody class="cta">
                        @forelse($category->foods as $food)
                            @if($food->available == 0)
                            
                            @else

                                <tr>
                                    <th scope="row">  {{$food->name}}</th>

                                    @if(isset($food->offer_price))
                                    <td> {{$food->price}} {{$food->offer_price}} </td>
                                    @else
                                    <td>{{$food->price}}</td>
                                    @endif   
                                    <td>  {{$food->calories}}</td>
                                </tr>

                            @endif
                        @empty
                        {{__('no comments yet')}}
                        @endforelse
                        </tbody>
                        
                    
                    </table>

                        @empty
                            {{__('no comments yet')}}
                        @endforelse




            </div>
        </section>
@endsection